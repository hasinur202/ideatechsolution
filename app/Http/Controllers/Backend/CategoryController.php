<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $data = auth()->user();
        $categories = Category::all();
        return view('layouts.backend.category.categories',[
            'categories'=>$categories,
            'data'=>$data
        ]);
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:categories'

        ]);

        
        if ($validator->fails()) {
            return response()->json([
                'errors'=>"match"
            ],500);
        }else{
            $user = Category::create([
                'title' => $request->title
            ]);

            return response()->json([
                'msg'=>'succes'
            ],200);
        }
    }

    public function change_status(Request $request)
    {
        $data = Category::where('id',$request->id)->first();
        
        if ($data->status == null) {
            Category::where('id',$request->id)->update([
                'status'=>1
            ]);
            return response()->json([
                'message'=>'success'
            ],200);
        }else{
            Category::where('id',$request->id)->update([
                'status'=>null
            ]);
            return response()->json([
                'message'=>'success'
            ],401);
        }
    }

    public function update(Request $request)
    {
        $data = Category::where('id',$request->id)->first();

        if ($data) {
            Category::where('id',$request->id)->update([
                'title'=>$request->title
            ]);
        }
        return response()->json([
            'message'=>'success'
        ],200);
    }

    public function destroy($id)
    {
        //
    }
}
