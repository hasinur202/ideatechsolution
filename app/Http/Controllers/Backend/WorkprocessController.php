<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Work_process;
use RealRashid\SweetAlert\Facades\Alert;

class WorkprocessController extends Controller
{
    public function index(){
        $data = auth()->user();
        $processes = Work_process::get();

        return view('layouts.backend.work_process.work_process',[
            'processes'=>$processes ?? '',
            'data'=>$data
        ]);
    }


    public function store(Request $request){
        request()->validate([
            'title' =>'required',
            'image' =>'required',
            'description' =>'required',
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $new_name1 = rand() . '.' . $image->getClientOriginalExtension();
            $upload_path = public_path()."/images/workprocess/";

            $work = Work_process::create([
                'title'=>$request->title,
                'image'=>$new_name1,
                'image_alt'=>$request->image_alt,
                'description'=>$request->description,
            ]);

            if($work){
                $image->move($upload_path, $new_name1);

                toast('Changes saved successfully','success')
                ->padding('10px')->width('270px')->timerProgressBar()->hideCloseButton();

                return redirect()->back();

            }else{
                Alert::error('Opps...','Something went wrong!');
            }
        }
    }

    // public function update(Request $request){
    //     request()->validate([
    //         'title' =>'required',
    //         'description' =>'required',
    //         'short_description' =>'required',
    //     ]);

    //     $service = Service::where('id',$request->id)->first();

    //     if ($request->file('icon')) {
    //         $icon = $request->file('icon');
    //         $new_name = rand() . '.' . $icon->getClientOriginalExtension();
    //         $icon_d = public_path('images/services/').$service->icon;
    //         if(file_exists($icon_d)){
    //             @unlink($icon_d);
    //         }
    //         $icon->move(public_path()."/images/services/", $new_name);
    //     }else{
    //         $new_name = $service->icon;
    //     }

    //     if ($request->file('image')) {
    //         $image = $request->file('image');
    //         $new_name1 = rand() . '.' . $image->getClientOriginalExtension();
    //         $image_d = public_path('images/services/').$service->image;
    //         if(file_exists($image_d)){
    //             @unlink($image_d);
    //         }
    //         $image->move(public_path()."/images/services/", $new_name1);
    //     }else{
    //         $new_name1 = $service->image;
    //     }

    //     $uodate = Service::where('id',$request->id)->update([
    //         'title'=>$request->title,
    //         'icon'=>$new_name,
    //         'icon_alt'=>$request->icon_alt,
    //         'image'=>$new_name1,
    //         'image_alt'=>$request->image_alt,
    //         'description'=>$request->description,
    //         'short_description'=>$request->short_description,
    //     ]);

    //     if($uodate){
    //         toast('Updated successfully','success')
    //         ->padding('10px')->width('270px')->timerProgressBar()->hideCloseButton();
    //         return redirect()->back();
    //     }else{
    //         Alert::error('Opps...','Something went wrong!');
    //     }

    // }


    // public function destroy(Request $request){
    //     $serv = Service::where('id',$request->id)->first();

    //     $icon_d = public_path('images/services/').$serv->icon;
    //     $image_d = public_path('images/services/').$serv->image;
    //     if(file_exists($icon_d) && file_exists($image_d)){
    //         @unlink($icon_d);
    //         @unlink($image_d);

    //         $serv->delete();
    //     }


    //     return response()->json([
    //         'success'=>'success'
    //      ],200);
    // }


}
