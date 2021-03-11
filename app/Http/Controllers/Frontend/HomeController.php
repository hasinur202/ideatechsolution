<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Demo;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        return view('layouts.frontend.home');
    }

    public function all_product()
    {
        $datas = Category::with(['get_demos'=>function($q){
            $q->where('status',1);
        }])->where('status',1)->get();

        return view('layouts.frontend.product.all-product',[
            'datas'=>$datas,
        ]);
    }

    public function details(Request $request, $cat, $slug)
    {
        $details = Demo::where('slug',$slug)->first();

        return view('layouts.frontend.product.details',[
            'details'=>$details,
            'category'=>$cat
        ]);
    }

}
