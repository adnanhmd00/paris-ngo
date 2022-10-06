<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){
        $contact = ContactUs::all();
        return view('admin.contact.index', compact('contact'));
    }
}
