<?php

namespace App\Http\Controllers;

use App\Models\Attraction;
use App\Models\CulinaryMenu;
use App\Models\HotelRoom;
use App\Models\Transaction;
use App\Models\TravelMenu;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Transaction::query();

        if ($search) {
            $query->where('id', $search);
        }

        $transactions = $query->paginate(10);

        return view('admin.transactions.index', compact('transactions', 'search'));
    }

    public function show(int $id)
    {
        $transaction = Transaction::findOrFail($id);
        $detailTransactions = $transaction->details;
        $allItems = [];
        foreach($detailTransactions as $detail) {
            if($detail->category === "Attraction") {
        
                $attractionItem = Attraction::findOrFail($detail->item_id);
                $allItems[] = [
                    "id" => $detail->item_id,
                    "name" => $attractionItem->name,
                    "category" => $detail->category,
                    "quantity" => $detail->quantity,
                    "sub_quantity" => $detail->sub_quantity,
                    "price" => $detail->price,
                    "subtotal" => $detail->subtotal,
                ];
            }
            if($detail->category === "Hotel") {
                $roomItem = HotelRoom::findOrFail($detail->item_id);
                $hotelItem = $roomItem->hotel;
                $allItems[] = [
                    "id" => $detail->item_id,
                    "name" => $hotelItem->name,
                    "room" => $roomItem->name,
                    "category" => $detail->category,
                    "quantity" => $detail->quantity,
                    "sub_quantity" => $detail->sub_quantity,
                    "price" => $detail->price,
                    "subtotal" => $detail->subtotal,
                ];
            }
            if($detail->category === "Culinary") {
                $menuItem = CulinaryMenu::findOrFail($detail->item_id);
                $culinaryItem = $menuItem->culinary;
                $allItems[] = [
                    "id" => $detail->item_id,
                    "name" => $culinaryItem->name,
                    "menu" => $menuItem->name,
                    "category" => $detail->category,
                    "quantity" => $detail->quantity,
                    "sub_quantity" => $detail->sub_quantity,
                    "price" => $detail->price,
                    "subtotal" => $detail->subtotal,
                ];
            }
            if($detail->category === "Travel") {
                $menuItem = TravelMenu::findOrFail($detail->item_id);
                $allItems[] = [
                    "id" => $detail->item_id,
                    "name" => $menuItem->name,
                    "category" => $detail->category,
                    "quantity" => $detail->quantity,
                    "sub_quantity" => $detail->sub_quantity,
                    "price" => $detail->price,
                    "subtotal" => $detail->subtotal,
                ];
            }
        }

        return view('admin.transactions.detail', compact('transaction', 'detailTransactions', 'allItems'));
    }
}
