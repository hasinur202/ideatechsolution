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
        $demos = Demo::with('get_category')->get();
        $categories = Category::all();
        return view('layouts.frontend.product.all-product',[
            'categories'=>$categories,
            'demos'=>$demos
        ]);
    }

    public function details()
    {
        return view('layouts.frontend.product.details');
    }

    public function show(Request $request)
    {
        if (is_null($request->id)) {
            $demos = Demo::all();
        }else{
            $demos = Demo::where('category_id',$request->id)->get();
        }
        return view('layouts.frontend.product.product-section',[
            'demos'=>$demos
        ]);
    }


}
