<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $data = auth()->user();
        $contacts = Contact::get();
        return view('layouts.backend.contact.contact',[
            'data'=>$data,
            'contacts'=>$contacts
        ]);
    }
}
