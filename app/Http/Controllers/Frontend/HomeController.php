<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Demo;
use App\Models\Category;
use App\Models\Setting;
use App\Models\SiteMeta;
use App\Models\Technology;

class HomeController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $metas = SiteMeta::all();
        $technologies = Technology::where('status',1)->get();

        $datas = Category::with(['get_demos'=>function($q){
            $q->where('status',1);
        }])->where('status',1)->get();


        return view('layouts.frontend.home',[
            'metas'=>$metas ?? '',
            'setting'=>$setting ?? '',
            'technologies'=>$technologies ?? '',
            'datas'=>$datas
        ]);
    }

    public function all_product()
    {
        $datas = Category::with(['get_demos'=>function($q){
            $q->where('status',1);
        }])->where('status',1)->get();

        $metas = SiteMeta::all();

        return view('layouts.frontend.product.all-product',[
            'datas'=>$datas,
            'metas'=>$metas ?? ''
        ]);
    }

    public function details(Request $request, $cat, $slug)
    {
        $details = Demo::where('slug',$slug)->first();
        $metas = SiteMeta::all();

        return view('layouts.frontend.product.details',[
            'details'=>$details,
            'category'=>$cat,
            'metas'=>$metas ?? ''
        ]);
    }

}
