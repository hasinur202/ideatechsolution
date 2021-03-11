<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('layouts.frontend.contact');
    }

    public function store(Request $request){

        Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'subject'=>$request->subject,
            'description'=>$request->description,
        ]);

        return response()->json([
            'message'=>'success'
        ],200);
    }
}
