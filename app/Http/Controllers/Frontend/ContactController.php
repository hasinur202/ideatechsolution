<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Contact;
use App\Models\SiteMeta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $metas = SiteMeta::all();
        return view('layouts.frontend.contact',[
            'metas'=>$metas
        ]);
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
