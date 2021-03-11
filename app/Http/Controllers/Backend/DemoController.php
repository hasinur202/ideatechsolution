<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Demo;
use App\Models\Category;
class DemoController extends Controller
{
    public function index()
    {
        $data = auth()->user();
        $demos = Demo::all();
        $categories = Category::all();
        return view('layouts.backend.demo.demo',[
            'demos'=>$demos,
            'data'=>$data,
            'categories'=>$categories
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'slug'  =>  'required|unique:demos',
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $upload_path = public_path()."/images/";

            Demo::create([
                'category_id'=>$request->category_id,
                'title'=>$request->title,
                'slug'=>$request->slug,
                'link'=>$request->link,
                'username'=>$request->username,
                'password'=>$request->password,
                'image'=>$new_name,
                'description'=>$request->description,
                'status'=>1
            ]);

            $image->move($upload_path, $new_name);

            return response()->json([
                'message'=>'success'
            ],200);
        }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {

        $data = Demo::where('id',$request->id)->first();

        if ($request->file('image') !=null) {
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $upload_path = public_path()."/images/";
        }else{
            $new_name=$data->image;
        }

        if($data->slug == $request->slug){
            $slugg = $request->slug;
        }else{
            $checkslug = Demo::where('slug',$request->slug)->count();
            if($checkslug > 0){
                return response()->json([
                    'error'=>'error'
                ],500);
            }else{
                $slugg = $request->slug;
            }
        }

        Demo::where('id',$request->id)->update([
            'category_id'=>$request->category_id,
            'title'=>$request->title,
            'slug'=>$slugg,
            'link'=>$request->link,
            'username'=>$request->username,
            'password'=>$request->password,
            'image'=>$new_name,
            'description'=>$request->description
        ]);

        if ($request->file('image') !=null){
            $image->move($upload_path, $new_name);
        }

        return response()->json([
            'message'=>'success'
        ],200);
    }

    public function demoActivity(Request $request){
        $data = Demo::where('id',$request->id)->first();

        if ($data->status == 0) {
            Demo::where('id',$request->id)->update([
                'status'=>1
            ]);

            return response()->json([
                'message'=>'success'
            ],200);
        }else{
            Demo::where('id',$request->id)->update([
                'status'=>0
            ]);

            return response()->json([
                'message'=>'success'
            ],200);
        }
    }




    public function destroy($id)
    {
        //
    }
}
