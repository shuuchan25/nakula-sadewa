<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use App\Models\CulinaryMenu;
use App\Models\DetailTempCalculate;
use App\Models\HotelRoom;
use App\Models\TempCalculate;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CalculateController extends Controller
{
    public function index()
    {
        $calcItems = DetailTempCalculate::all();

        $allItems = [];

        foreach($calcItems as $calcItem) {
            if($calcItem->category === "Attraction") {
                // Check if the item already exists in $allItems array based on item_id
                $existingItemKey = array_search($calcItem->item_id, array_column($allItems, 'id'));
        
                if ($existingItemKey !== false) {
                    // If item exists, update the quantity
                    $allItems[$existingItemKey]['quantity'] += $calcItem->quantity;
                    $allItems[$existingItemKey]['subtotal'] += $calcItem->subtotal;
                } else {
                    // If item doesn't exist, add a new entry
                    $attractionItem = Attraction::findOrFail($calcItem->item_id);
                    $allItems[] = [
                        "id" => $calcItem->item_id,
                        "name" => $attractionItem->name,
                        "slug" => $attractionItem->slug,
                        "category" => $calcItem->category,
                        "image" => $attractionItem->image,
                        "quantity" => $calcItem->quantity,
                        "sub_quantity" => $calcItem->sub_quantity,
                        "price" => $calcItem->price,
                        "subtotal" => $calcItem->subtotal,
                    ];
                }
            }

            if($calcItem->category === "Hotel") {
                $hotelRoomItem = HotelRoom::findOrFail($calcItem->item_id);
                
                $hotelSlug = $hotelRoomItem->hotel->slug;

                $hotelIndex = array_search($hotelSlug, array_column($allItems, 'slug'));

                if ($hotelIndex !== false) {
                    // Hotel already exists in the array, add the room to the existing hotel
                    $allItems[$hotelIndex]['rooms'][] = [
                        "id" => $hotelRoomItem->id,
                        "room" => $hotelRoomItem->name,
                        "quantity" => $calcItem->quantity,
                        "sub_quantity" => $calcItem->sub_quantity,
                        "price" => $calcItem->price,
                        'subtotal' => $calcItem->subtotal
                    ];

                    $totalSubtotal = 0;
                    foreach ($allItems[$hotelIndex]['rooms'] as $room) {
                        $totalSubtotal += $room['subtotal'];
                    }

                    $allItems[$hotelIndex]['total'] = $totalSubtotal;
                } else {
                    // Hotel doesn't exist in the array, create a new hotel entry
                    $newHotel = [
                        "id" => $calcItem->id,
                        "name" => $hotelRoomItem->hotel->name,
                        "slug" => $hotelSlug,
                        "category" => $calcItem->category,
                        "image" => $hotelRoomItem->hotel->image,
                        "rooms" => [
                            [
                                "id" => $hotelRoomItem->id,
                                "room" => $hotelRoomItem->name,
                                "quantity" => $calcItem->quantity,
                                "sub_quantity" => $calcItem->sub_quantity,
                                "price" => $calcItem->price,
                                'subtotal' => $calcItem->subtotal
                            ],
                        ],
                    ];

                    $totalSubtotal = 0;
                    foreach ($newHotel['rooms'] as $room) {
                        $totalSubtotal += $room['subtotal'];
                    }

                    $newHotel['total'] = $totalSubtotal;

                    $allItems[] = $newHotel;
                }
            }

            if($calcItem->category === "Culinary") {
                $culinaryMenu = CulinaryMenu::findOrFail($calcItem->item_id);
                
                $culinaryName = $culinaryMenu->culinary->name;

                $culinaryIndex = array_search($culinaryName, array_column($allItems, 'name'));

                if ($culinaryIndex !== false) {
                    // Hotel already exists in the array, add the room to the existing hotel
                    $allItems[$culinaryIndex]['menus'][] = [
                        "id" => $culinaryMenu->id,
                        "menu" => $culinaryMenu->name,
                        "quantity" => $calcItem->quantity,
                        "sub_quantity" => $calcItem->sub_quantity,
                        "price" => $calcItem->price,
                        'subtotal' => $calcItem->subtotal
                    ];

                    $totalSubtotal = 0;
                    foreach ($allItems[$culinaryIndex]['menus'] as $menu) {
                        $totalSubtotal += $menu['subtotal'];
                    }

                    $allItems[$culinaryIndex]['total'] = $totalSubtotal;
                } else {
                    // Hotel doesn't exist in the array, create a new hotel entry
                    $newCulinary = [
                        "id" => $calcItem->id,
                        "name" => $culinaryName,
                        "slug" => $calcItem->slug,
                        "category" => $calcItem->category,
                        "image" => $culinaryMenu->culinary->image,
                        "menus" => [
                            [
                                "id" => $culinaryMenu->id,
                                "menu" => $culinaryMenu->name,
                                "quantity" => $calcItem->quantity,
                                "sub_quantity" => $calcItem->sub_quantity,
                                "price" => $calcItem->price,
                                'subtotal' => $calcItem->subtotal
                            ],
                        ],
                    ];

                    $totalSubtotal = 0;
                    foreach ($newCulinary['menus'] as $menu) {
                        $totalSubtotal += $menu['subtotal'];
                    }

                    $newCulinary['total'] = $totalSubtotal;

                    $allItems[] = $newCulinary;
                }
            }
        }

        // dd($detailTempCals);

        return view('kalkulator', compact('calcItems', 'allItems'));
    }

    public function attraction(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'session_id' => 'required',
            'item_id' => 'required',
            'slug' => 'required',
            'quantity' => 'nullable|integer|min:1',
            'sub_quantity' => 'nullable|integer|min:1',
            'price' => 'required',
        ]);

        $tempCal = TempCalculate::firstOrCreate([
            'session_id' => $validatedData['session_id'],
        ]);

        $detailTempCal = new DetailTempCalculate();
        $detailTempCal->session_id = $validatedData['session_id'];
        $detailTempCal->item_id = $validatedData['item_id'];
        $detailTempCal->slug = $validatedData['slug'];
        $detailTempCal->category = 'Attraction';
        $detailTempCal->quantity = $validatedData['quantity'] ?? 1;
        $detailTempCal->sub_quantity = $validatedData['sub_quantity'] ?? 1;
        $detailTempCal->price = $validatedData['price'];
        $detailTempCal->subtotal = $detailTempCal->quantity * $detailTempCal->sub_quantity * $detailTempCal->price;

        $tempCal->details()->save($detailTempCal);

        Alert::success('Item berhasil ditambahkan!', 'Pergi ke laman kalkulator untuk melihat!');

        return redirect()->back();
    }

    public function hotel(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'session_id' => 'required',
            'item_id' => 'required',
            'slug' => 'required',
            'quantity' => 'nullable|integer|min:1',
            'sub_quantity' => 'nullable|integer|min:1',
            'price' => 'required',
        ]);

        $tempCal = TempCalculate::firstOrCreate([
            'session_id' => $validatedData['session_id'],
        ]);

        $detailTempCal = new DetailTempCalculate();
        $detailTempCal->session_id = $validatedData['session_id'];
        $detailTempCal->item_id = $validatedData['item_id'];
        $detailTempCal->slug = $validatedData['slug'];
        $detailTempCal->category = 'Hotel';
        $detailTempCal->quantity = $validatedData['quantity'] ?? 1;
        $detailTempCal->sub_quantity = $validatedData['sub_quantity'] ?? 1;
        $detailTempCal->price = $validatedData['price'];
        $detailTempCal->subtotal = $detailTempCal->quantity * $detailTempCal->sub_quantity * $detailTempCal->price;

        $tempCal->details()->save($detailTempCal);

        Alert::success('Item berhasil ditambahkan!', 'Pergi ke laman kalkulator untuk melihat!');

        return redirect()->back();
    }

    public function culinary(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'session_id' => 'required',
            'item_id' => 'required',
            'slug' => 'required',
            'quantity' => 'nullable|integer|min:1',
            'sub_quantity' => 'nullable|integer|min:1',
            'price' => 'required',
        ]);

        $tempCal = TempCalculate::firstOrCreate([
            'session_id' => $validatedData['session_id'],
        ]);

        $detailTempCal = new DetailTempCalculate();
        $detailTempCal->session_id = $validatedData['session_id'];
        $detailTempCal->item_id = $validatedData['item_id'];
        $detailTempCal->slug = $validatedData['slug'];
        $detailTempCal->category = 'Culinary';
        $detailTempCal->quantity = $validatedData['quantity'] ?? 1;
        $detailTempCal->sub_quantity = $validatedData['sub_quantity'] ?? 1;
        $detailTempCal->price = $validatedData['price'];
        $detailTempCal->subtotal = $detailTempCal->quantity * $detailTempCal->sub_quantity * $detailTempCal->price;

        $tempCal->details()->save($detailTempCal);

        Alert::success('Item berhasil ditambahkan!', 'Pergi ke laman kalkulator untuk melihat!');

        return redirect()->back();
    }

    public function destroy(string $slug)
    {
        $calcItem = DetailTempCalculate::where('slug', $slug);

        $calcItem->delete();

        return redirect()->back()->with('success', 'Item berhasil dihapus!');
    }
}
