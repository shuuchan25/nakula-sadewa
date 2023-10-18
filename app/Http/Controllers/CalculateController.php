<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use App\Models\DetailTempCalculate;
use App\Models\TempCalculate;
use Illuminate\Http\Request;

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
                    "name" => $attractionItem->name,
                    "image" => $attractionItem->image,
                    "quantity" => $calcItem->quantity,
                    "sub_quantity" => $calcItem->sub_quantity,
                    "price" => $calcItem->price,
                    "subtotal" => $calcItem->subtotal,
                ];
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

        return redirect()->back()->with('success', 'Item berhasil ditambahkan di <a href="/kalkulator">Kalkulator</a>!');
    }
}
