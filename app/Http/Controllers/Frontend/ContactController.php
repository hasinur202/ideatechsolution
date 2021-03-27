<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Contact;
use App\Models\Setting;
use App\Models\Category;
use App\Models\SiteMeta;
use App\Models\Technology;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        $technologies = Technology::where('status',1)->get();
        $datas = Category::with(['get_demos'=>function($q){
            $q->where('status',1);
        }])->where('status',1)->get();
        $metas = SiteMeta::all();
        return view('layouts.frontend.contact',[
            'metas'=>$metas,
            'setting'=>$setting,
            'technologies'=>$technologies,
            'datas'=>$datas
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
