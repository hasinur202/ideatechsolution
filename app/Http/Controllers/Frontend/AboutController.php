<?php

namespace App\Http\Controllers\Frontend;

use App\Models\SiteMeta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index(){
        $metas = SiteMeta::all();

        return view('layouts.frontend.about',[
            'metas'=>$metas
        ]);
    }
}
