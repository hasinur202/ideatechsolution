<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Setting;
use App\Models\Category;
use App\Models\SiteMeta;
use App\Models\Technology;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $technologies = Technology::where('status',1)->get();
        $datas = Category::with(['get_demos'=>function($q){
            $q->where('status',1);
        }])->where('status',1)->get();
        $metas = SiteMeta::all();

        $services = Service::where('status',1)->get();

        return view('layouts.frontend.service',[
            'metas'=>$metas,
            'datas'=>$datas,
            'technologies'=>$technologies,
            'setting'=>$setting,
            'services'=>$services
        ]);
    }
}
