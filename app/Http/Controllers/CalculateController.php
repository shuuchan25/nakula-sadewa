<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use App\Models\CulinaryMenu;
use App\Models\DetailTempCalculate;
use App\Models\DetailTransaction;
use App\Models\HotelRoom;
use App\Models\TempCalculate;
use App\Models\Transaction;
use App\Models\TravelMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class CalculateController extends Controller
{
    public function index()
    {
        $calcItems = DetailTempCalculate::all();

        $allItems = [];

        foreach($calcItems as $calcItem) {
            if($calcItem->category === "Attraction") {
                $existingItemKey = array_search($calcItem->item_id, array_column($allItems, 'id'));
        
                if ($existingItemKey !== false) {
                    $allItems[$existingItemKey]['quantity'] += $calcItem->quantity;
                    $allItems[$existingItemKey]['subtotal'] += $calcItem->subtotal;
                } else {
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
                    $existingItemKey = array_search($calcItem->item_id, array_column($allItems[$hotelIndex]['rooms'], 'id'));

                    if ($existingItemKey !== false) {
                        $allItems[$hotelIndex]['rooms'][$existingItemKey]['quantity'] += $calcItem->quantity;
                        $allItems[$hotelIndex]['rooms'][$existingItemKey]['subtotal'] += $calcItem->subtotal;
                    } else {
                        $allItems[$hotelIndex]['rooms'][] = [
                            "id" => $hotelRoomItem->id,
                            "room" => $hotelRoomItem->name,
                            "quantity" => $calcItem->quantity,
                            "sub_quantity" => $calcItem->sub_quantity,
                            "price" => $calcItem->price,
                            'subtotal' => $calcItem->subtotal
                        ];
                    }

                    $totalSubtotal = 0;
                    foreach ($allItems[$hotelIndex]['rooms'] as $room) {
                        $totalSubtotal += $room['subtotal'];
                    }

                    $allItems[$hotelIndex]['total'] = $totalSubtotal;
                } else {
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
                    $existingItemKey = array_search($calcItem->item_id, array_column($allItems[$culinaryIndex]['menus'], 'id'));

                    if ($existingItemKey !== false) {
                        $allItems[$culinaryIndex]['menus'][$existingItemKey]['quantity'] += $calcItem->quantity;
                        $allItems[$culinaryIndex]['menus'][$existingItemKey]['subtotal'] += $calcItem->subtotal;
                    } else {
                        $allItems[$culinaryIndex]['menus'][] = [
                            "id" => $culinaryMenu->id,
                            "menu" => $culinaryMenu->name,
                            "quantity" => $calcItem->quantity,
                            "sub_quantity" => $calcItem->sub_quantity,
                            "price" => $calcItem->price,
                            'subtotal' => $calcItem->subtotal
                        ];
                    }

                    $totalSubtotal = 0;
                    foreach ($allItems[$culinaryIndex]['menus'] as $menu) {
                        $totalSubtotal += $menu['subtotal'];
                    }

                    $allItems[$culinaryIndex]['total'] = $totalSubtotal;
                } else {
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

            if($calcItem->category === "Travel") {
                $existingItemKey = array_search($calcItem->item_id, array_column($allItems, 'id'));
        
                if ($existingItemKey !== false) {
                    $allItems[$existingItemKey]['quantity'] += $calcItem->quantity;
                    $allItems[$existingItemKey]['subtotal'] += $calcItem->subtotal;
                } else {
                    $travelMenuItem = TravelMenu::findOrFail($calcItem->item_id);
                    $allItems[] = [
                        "id" => $calcItem->item_id,
                        "name" => $travelMenuItem->name,
                        "slug" => $travelMenuItem->slug,
                        "category" => $calcItem->category,
                        "image" => $travelMenuItem->image,
                        "quantity" => $calcItem->quantity,
                        "sub_quantity" => $calcItem->sub_quantity,
                        "price" => $calcItem->price,
                        "subtotal" => $calcItem->subtotal,
                    ];
                }
            }
        }

        return view('kalkulator', compact('calcItems', 'allItems'));
    }

    public function attraction(Request $request)
    {
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

    public function travel(Request $request)
    {
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
        $detailTempCal->category = 'Travel';
        $detailTempCal->quantity = $validatedData['quantity'] ?? 1;
        $detailTempCal->sub_quantity = $validatedData['sub_quantity'] ?? 1;
        $detailTempCal->price = $validatedData['price'];
        $detailTempCal->subtotal = $detailTempCal->quantity * $detailTempCal->sub_quantity * $detailTempCal->price;

        $tempCal->details()->save($detailTempCal);

        Alert::success('Item berhasil ditambahkan!', 'Pergi ke laman kalkulator untuk melihat!');

        return redirect()->back();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'total' => 'required',
        ]);

        DB::beginTransaction();

        try {
            $transaction = new Transaction();
            $transaction->total = $validatedData['total'];

            $transaction->save();

            $tempCal = TempCalculate::first();

            $details = DetailTempCalculate::where('temp_id', $tempCal->id)->get();
            $mergedDetails = [];
            $groupedDetails = $details->groupBy(['category', 'item_id']);
            
            foreach ($groupedDetails as $category => $categoryDetails) {
                foreach ($categoryDetails as $itemId => $itemDetails) {
                
                $totalQuantity = $itemDetails->sum('quantity');
                $totalSubtotal = $itemDetails->sum('subtotal');

                $firstDetail = $itemDetails->first();
                $mergedDetail = new DetailTransaction();
                $mergedDetail->transaction_id = $transaction->id;
                $mergedDetail->item_id = $itemId;
                $mergedDetail->category = $category;
                $mergedDetail->slug = $firstDetail->slug;
                $mergedDetail->quantity = $totalQuantity;
                $mergedDetail->sub_quantity = $firstDetail->sub_quantity;
                $mergedDetail->price = $firstDetail->price;
                $mergedDetail->subtotal = $totalSubtotal;

                $mergedDetail->save();
                
                $mergedDetails[] = $mergedDetail;
                }        
            }

            $details = DetailTempCalculate::where('temp_id', $tempCal->id)->get();
            foreach ($details as $detail) {
                $detail->delete();
            }

            $tempCal->delete();

            DB::commit();

            Alert::success('Berhasil di cetak!', 'Mohon ditunggu!');

            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            dd($e->getMessage());
            return redirect()->back();
        }
    }

    public function destroy(string $slug)
    {
        $calcItem = DetailTempCalculate::where('slug', $slug);

        $calcItem->delete();

        return redirect()->back()->with('success', 'Item berhasil dihapus!');
    }
}
