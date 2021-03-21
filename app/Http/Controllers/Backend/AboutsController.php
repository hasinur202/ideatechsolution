<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

use App\Models\About;
use Illuminate\Http\Request;

class AboutsController extends Controller
{
    public function index(){
        $data = auth()->user();
        $about = About::first() ?? '';

        return view('layouts.backend.settings.about',[
            'about'=>$about,
            'data'=>$data
        ]);
    }
}
