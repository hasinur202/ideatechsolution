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
}
