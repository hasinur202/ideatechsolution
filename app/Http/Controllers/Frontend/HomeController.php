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
        $datas = Category::with('get_demos')->get();

        return view('layouts.frontend.product.all-product',[
            'datas'=>$datas,
        ]);
    }

    public function details(Request $request, $cat, $slug)
    {
        return view('layouts.frontend.product.details',[
            'slug'=>$slug
        ]);
    }

}
