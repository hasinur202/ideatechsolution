<?php

namespace App\Http\Controllers\Backend;

use ArrayIterator;
use App\Models\Demo;
use MultipleIterator;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Demo_panel;

class DemoController extends Controller
{
    public function index()
    {
        $data = auth()->user();
        $demos = Demo::with('get_panels')->get();
        // dd($demos);
        $categories = Category::all();
        return view('layouts.backend.demo.demo',[
            'demos'=>$demos,
            'data'=>$data,
            'categories'=>$categories
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'slug'  =>  'required|unique:demos',
        ]);

        if ($request->file('image') && $request->file('image1') && $request->file('image2')) {
            $image = $request->file('image');
            $image1 = $request->file('image1');
            $image2 = $request->file('image2');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $new_name1 = rand() . '.' . $image1->getClientOriginalExtension();
            $new_name2 = rand() . '.' . $image2->getClientOriginalExtension();
            $upload_path = public_path()."/images/";

            Demo::create([
                'category_id'=>$request->category_id,
                'title'=>$request->title,
                'slug'=>$request->slug,
                'link'=>$request->link,
                'image'=>$new_name,
                'image1'=>$new_name1,
                'image2'=>$new_name2,
                'description'=>$request->description,
                'status'=>1
            ]);

            $image->move($upload_path, $new_name);
            $image1->move($upload_path, $new_name1);
            $image2->move($upload_path, $new_name2);


            $lastDemo = Demo::latest()->first();
            if($request->panel_name && $request->username && $request->password){
                $mi = new MultipleIterator();
                $mi->attachIterator(new ArrayIterator($request->panel_name));
                $mi->attachIterator(new ArrayIterator($request->username));
                $mi->attachIterator(new ArrayIterator($request->password));

                foreach($mi as list($panel_name, $username, $password)) {
                    if($panel_name != null || $username != null || $password != null){
                        Demo_panel::create([
                            'demo_id'=>$lastDemo->id,
                            'panel_name'=>$panel_name,
                            'username'=>$username,
                            'password'=>$password,
                        ]);
                    }
                }
            }

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

        if ($request->file('image') && $request->file('image1') && $request->file('image2')) {
            $image = $request->file('image');
            $image1 = $request->file('image1');
            $image2 = $request->file('image2');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $new_name1 = rand() . '.' . $image1->getClientOriginalExtension();
            $new_name2 = rand() . '.' . $image2->getClientOriginalExtension();
            $upload_path = public_path()."/images/";
        }else{
            $new_name=$data->image;
            $new_name1=$data->image1;
            $new_name2=$data->image2;
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
            'image'=>$new_name,
            'image1'=>$new_name1,
            'image2'=>$new_name2,
            'description'=>$request->edit_description
        ]);

        if ($request->file('image') !=null && $request->file('image1') !=null && $request->file('image2') !=null){
            $image->move($upload_path, $new_name);
            $image1->move($upload_path, $new_name1);
            $image2->move($upload_path, $new_name2);
        }

        if($request->panel_name && $request->username && $request->password){
            $mi = new MultipleIterator();
            $mi->attachIterator(new ArrayIterator($request->panel_name));
            $mi->attachIterator(new ArrayIterator($request->username));
            $mi->attachIterator(new ArrayIterator($request->password));

            Demo_panel::where('demo_id',$request->id)->delete();

            foreach($mi as list($panel_name, $username, $password)) {
                if($panel_name != null || $username != null || $password != null){
                    Demo_panel::create([
                        'demo_id'=>$request->id,
                        'panel_name'=>$panel_name,
                        'username'=>$username,
                        'password'=>$password,
                    ]);
                }
            }
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
