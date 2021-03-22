<?php

namespace App\Http\Controllers\Backend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ServicesController extends Controller
{
    public function index(){
        $data = auth()->user();
        $services = Service::get();

        return view('layouts.backend.services.services',[
            'services'=>$services ?? '',
            'data'=>$data
        ]);
    }


    public function store(Request $request){
        request()->validate([
            'title' =>'required',
            'icon' =>'required',
            'image' =>'required',
            'description' =>'required',
            'short_description' =>'required',
        ]);

        if ($request->file('icon') && $request->file('image')) {
            $icon = $request->file('icon');
            $image = $request->file('image');
            $new_name = rand() . '.' . $icon->getClientOriginalExtension();
            $new_name1 = rand() . '.' . $image->getClientOriginalExtension();
            $upload_path = public_path()."/images/services/";

            $services = Service::create([
                'title'=>$request->title,
                'icon'=>$new_name,
                'icon_alt'=>$request->icon_alt,
                'image'=>$new_name1,
                'image_alt'=>$request->image_alt,
                'description'=>$request->description,
                'short_description'=>$request->short_description,
            ]);

            if($services){
                $icon->move($upload_path, $new_name);
                $image->move($upload_path, $new_name1);

                toast('Changes saved successfully','success')
                ->padding('10px')->width('270px')->timerProgressBar()->hideCloseButton();

                return redirect()->back();

            }else{
                Alert::error('Opps...','Something went wrong!');
            }
        }
    }

    public function update(Request $request){
        request()->validate([
            'title' =>'required',
            'description' =>'required',
            'short_description' =>'required',
        ]);

        $service = Service::where('id',$request->id)->first();

        if ($request->file('icon')) {
            $icon = $request->file('icon');
            $new_name = rand() . '.' . $icon->getClientOriginalExtension();
            $icon_d = public_path('images/services/').$service->icon;
            if(file_exists($icon_d)){
                @unlink($icon_d);
            }
            $icon->move(public_path()."/images/services/", $new_name);
        }else{
            $new_name = $service->icon;
        }

        if ($request->file('image')) {
            $image = $request->file('image');
            $new_name1 = rand() . '.' . $image->getClientOriginalExtension();
            $image_d = public_path('images/services/').$service->image;
            if(file_exists($image_d)){
                @unlink($image_d);
            }
            $image->move(public_path()."/images/services/", $new_name1);
        }else{
            $new_name1 = $service->image;
        }

        $uodate = Service::where('id',$request->id)->update([
            'title'=>$request->title,
            'icon'=>$new_name,
            'icon_alt'=>$request->icon_alt,
            'image'=>$new_name1,
            'image_alt'=>$request->image_alt,
            'description'=>$request->description,
            'short_description'=>$request->short_description,
        ]);

        if($uodate){
            toast('Updated successfully','success')
            ->padding('10px')->width('270px')->timerProgressBar()->hideCloseButton();
            return redirect()->back();
        }else{
            Alert::error('Opps...','Something went wrong!');
        }

    }


    public function destroy(Request $request){
        $serv = Service::where('id',$request->id)->first();

        $icon_d = public_path('images/services/').$serv->icon;
        $image_d = public_path('images/services/').$serv->image;
        if(file_exists($icon_d) && file_exists($image_d)){
            @unlink($icon_d);
            @unlink($image_d);

            $serv->delete();
        }


        return response()->json([
            'success'=>'success'
         ],200);

    }




}
