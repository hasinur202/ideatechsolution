<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Technology;
use RealRashid\SweetAlert\Facades\Alert;

class TechnologiesController extends Controller
{
    public function index(){
        $data = auth()->user();
        // $services = Service::get();

        return view('layouts.backend.technology.technology',[
            // 'services'=>$services ?? '',
            'data'=>$data
        ]);
    }

    public function store(Request $request){
        request()->validate([
            'logo' =>'required',
        ]);

        if ($request->file('logo')) {
            $logo = $request->file('logo');
            $new_name = rand() . '.' . $logo->getClientOriginalExtension();
            $upload_path = public_path()."/images/technology/";

            $data = Technology::create([
                'logo'=>$new_name,
                'logo_alt'=>$request->logo_alt,
            ]);

            if($data){
                $logo->move($upload_path, $new_name);

                toast('Changes saved successfully','success')
                ->padding('10px')->width('270px')->timerProgressBar()->hideCloseButton();

                return redirect()->back();

            }else{
                Alert::error('Opps...','Something went wrong!');
            }
        }
    }

}
