<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutsController extends Controller
{
    public function index(){
        $confirm = ConfirmMessage::where('admin_id',auth()->user()->id)->first() ?? '';

        return view('layouts.backend.settings.confirm',[
            'about'=>$about
        ])
    }
}
