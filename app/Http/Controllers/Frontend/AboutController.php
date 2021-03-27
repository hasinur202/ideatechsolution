<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Setting;
use App\Models\Category;
use App\Models\SiteMeta;
use App\Models\Technology;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;

class AboutController extends Controller
{
    public function index(){
        $metas = SiteMeta::all();
        $setting = Setting::first();
        $technologies = Technology::where('status',1)->get();
        $datas = Category::with(['get_demos'=>function($q){
            $q->where('status',1);
        }])->where('status',1)->get();

        $about = About::first();

        return view('layouts.frontend.about',[
            'metas'=>$metas,
            'setting'=>$setting,
            'technologies'=>$technologies,
            'datas'=>$datas,
            'about'=>$about
        ]);
    }
}
