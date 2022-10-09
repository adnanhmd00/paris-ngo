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

    public function razorPaySuccess(Request $Request){
        $data = [
                  'user_id' => '1',
                  'product_id' => $request->product_id,
                  'r_payment_id' => $request->payment_id,
                  'amount' => $request->amount,
               ];

        $getId = Payment::insertGetId($data);  

        $arr = array('msg' => 'Payment successfully credited', 'status' => true);

        return Response()->json($arr);    
    }

    public function RazorThankYou()
    {
      return view('thankyou');
    }
}
