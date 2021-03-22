<?php

namespace App\Http\Controllers\Backend;

use App\Models\Choose;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ChooseController extends Controller
{
    public function index(){
        $data = auth()->user();
        $chooses = Choose::get();

        return view('layouts.backend.choose.choose_us',[
            'chooses'=>$chooses ?? '',
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
            $upload_path = public_path()."/images/choose_us/";

            $work = Choose::create([
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

    public function update(Request $request){
        request()->validate([
            'title' =>'required',
            'description' =>'required',
        ]);

        $www = Choose::where('id',$request->id)->first();

        if ($request->file('image')) {
            $image = $request->file('image');
            $new_name1 = rand() . '.' . $image->getClientOriginalExtension();
            $image_d = public_path('images/choose_us/').$www->image;
            if(file_exists($image_d)){
                @unlink($image_d);
            }
            $image->move(public_path()."/images/choose_us/", $new_name1);
        }else{
            $new_name1 = $www->image;
        }

        $uodate = Choose::where('id',$request->id)->update([
            'title'=>$request->title,
            'image'=>$new_name1,
            'image_alt'=>$request->image_alt,
            'description'=>$request->description,
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
        $serv = Choose::where('id',$request->id)->first();

        $image_d = public_path('images/choose_us/').$serv->image;
        if(file_exists($image_d)){
            @unlink($image_d);

            $serv->delete();
        }


        return response()->json([
            'success'=>'success'
         ],200);
    }
}
