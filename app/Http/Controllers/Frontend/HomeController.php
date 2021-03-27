<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Demo;
use App\Models\Category;
use App\Models\Choose;
use App\Models\Service;
use App\Models\Setting;
use App\Models\SiteMeta;
use App\Models\Technology;
use App\Models\Work_process;
use Symfony\Component\Process\Process;

class HomeController extends Controller
{
    public function index()
    {
        $metas = SiteMeta::all();
        $setting = Setting::first();
        $technologies = Technology::where('status',1)->get();
        $datas = Category::with(['get_demos'=>function($q){
            $q->where('status',1);
        }])->where('status',1)->get();

        $services = Service::where('status',1)->get();
        $processes = Work_process::where('status',1)->get();
        $chooses = Choose::where('status',1)->get();


        return view('layouts.frontend.home',[
            'metas'=>$metas ?? '',
            'setting'=>$setting ?? '',
            'technologies'=>$technologies ?? '',
            'datas'=>$datas,
            'services'=>$services,
            'processes'=>$processes,
            'chooses'=>$chooses
        ]);
    }

    public function all_product()
    {
        $datas = Category::with(['get_demos'=>function($q){
            $q->where('status',1);
        }])->where('status',1)->get();

        $metas = SiteMeta::all();
        $setting = Setting::first();
        $technologies = Technology::where('status',1)->get();

        return view('layouts.frontend.product.all-product',[
            'datas'=>$datas,
            'metas'=>$metas ?? '',
            'setting'=>$setting,
            'technologies'=>$technologies
        ]);
    }

    public function details(Request $request, $cat, $slug)
    {
        $details = Demo::where('slug',$slug)->first();
        $metas = SiteMeta::all();

        $setting = Setting::first();
        $technologies = Technology::where('status',1)->get();
        $datas = Category::with(['get_demos'=>function($q){
            $q->where('status',1);
        }])->where('status',1)->get();

        return view('layouts.frontend.product.details',[
            'details'=>$details,
            'category'=>$cat,
            'metas'=>$metas ?? '',
            'datas'=>$datas,
            'setting'=>$setting,
            'technologies'=>$technologies
        ]);
    }

}
