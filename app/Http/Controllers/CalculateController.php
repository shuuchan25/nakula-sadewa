<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
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
                $attractionItem = Attraction::findOrFail($calcItem->item_id);

                $allItems[] = [
                    "id" => $calcItem->id,
                    "name" => $attractionItem->name,
                    "category" => $calcItem->category,
                    "image" => $attractionItem->image,
                    "quantity" => $calcItem->quantity,
                    "sub_quantity" => $calcItem->sub_quantity,
                    "price" => $calcItem->price,
                    "subtotal" => $calcItem->subtotal,
                ];
            }

            if($calcItem->category === "Hotel") {
                $hotelRoomItem = HotelRoom::findOrFail($calcItem->item_id);
                
                $hotelName = $hotelRoomItem->hotel->name;

                $hotelIndex = array_search($hotelName, array_column($allItems, 'name'));

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
                } else {
                    // Hotel doesn't exist in the array, create a new hotel entry
                    $allItems[] = [
                        "id" => $calcItem->id,
                        "name" => $hotelName,
                        "slug" => $calcItem->slug,
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

    public function destroy(string $slug)
    {
        $calcItem = DetailTempCalculate::where('slug', $slug);

        $calcItem->delete();

        return redirect()->back()->with('success', 'Item berhasil dihapus!');
    }
}
