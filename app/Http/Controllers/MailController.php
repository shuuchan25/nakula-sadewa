<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;
use App\Models\Attraction;
use App\Models\AttractionPackage;
use App\Models\CulinaryMenu;
use App\Models\HotelRoom;
use App\Models\Transaction;
use App\Models\TravelMenu;

class MailController extends Controller
{
    public function send($id)
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
                    "subtotal" => $detail->subtotal,
                ];
            }
            if($detail->category === "Package") {
                $attractionPackageItem = AttractionPackage::findOrFail($detail->item_id);
                $attractionItem = $attractionPackageItem->attraction;
                $allItems[] = [
                    "id" => $detail->item_id,
                    "name" => $attractionItem->name,
                    "package" => $attractionPackageItem->name,
                    "category" => $detail->category,
                    "quantity" => $detail->quantity,
                    "sub_quantity" => $detail->sub_quantity,
                    "subtotal" => $detail->subtotal,
                ];
            }
        }
        
        $data = [
            'subject' => 'Nakula Sadewa'
        ];

        try {
            Mail::to($transaction->email)->send(new MailNotify($data, $transaction, $allItems));
            return redirect()->back()->with('success', 'Sukses, Silahkan cek email anda!');
        } catch (\Exception $th) {
            dd($th->getMessage());
            return response()->json(['Sorry something went wrong']);
        }
    }
}
