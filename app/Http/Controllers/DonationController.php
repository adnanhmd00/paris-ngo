<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index(){
        $donations = Donation::all();
        return view('admin.donations', compact('donations'));
    }

    public function store(Request $request){
        $donation = new Donation();
        $donation->name = $request->name;
        $donation->phone = $request->phone;
        $donation->email = $request->email;
        $donation->amount = $request->amount;
        $donation->transaction_id = $request->transaction_id;
        $donation->gateway = 'razorpay';
        $donation->save();

        // if($donation->save()){

        // }
    }
}
