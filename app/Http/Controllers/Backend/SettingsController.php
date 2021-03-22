<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{

    public function index()
    {
        $data = auth()->user();
        $setting = Setting::first();

        return view('layouts.backend.settings.setup',[
            'data'=>$data,
            'setting'=>$setting,
        ]);
    }


    public function store(Request $request){
        $SettingId = Setting::select('id')->first();

        if($SettingId == null){
            $validator = Validator::make($request->all(), [
                'logo' => 'required',
                'title' =>'required',
                'contact' =>'required',
                'email' =>'required',
                'description' =>'required'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'errors'=> $validator->messages()->all()
                ]);
            }elseif($request->file('logo') != null){
                $logo = $request->file('logo');
                $new_name = rand() . '.' . $logo->getClientOriginalExtension();
                $upload_path = public_path()."/images/logo/";

                if($new_name){
                    $data = Setting::create([
                        'title'=>$request->title,
                        'logo'=>$new_name,
                        'description'=>$request->description,
                        'email'=>$request->email,
                        'address'=>$request->address,
                        'contact'=>$request->contact,
                        'contact2'=>$request->contact2,
                        'fb'=>$request->fb,
                        'linkedin'=>$request->linkedin,
                        'whatsapp'=>$request->whatsapp,
                        'skype'=>$request->skype
                    ]);
                    if($data){
                        $logo->move($upload_path, $new_name);

                       toast('Changes saved successfully','success')
                       ->padding('10px')->width('270px')->timerProgressBar()->hideCloseButton();
                        return redirect()->back();
                    }
                }
            }
            else{
                Alert::error('Opps...','Data entry wrong.');
                return response()->json([
                    'message'=>'success'
                ],200);
            }

        }else{
            $setting = Setting::where('id',$request->id)->first();
            if($request->file('logo') != null){
                $logo = $request->file('logo');
                $new_name = rand() . '.' . $logo->getClientOriginalExtension();
                $upload_path = public_path()."/images/logo/";


                $logoPhoto = public_path('images/logo/').$setting->logo;
                if(file_exists($logoPhoto)){
                    @unlink($logoPhoto);
                }

                if($new_name){
                    $data = Setting::where('id',$request->id)->update([
                        'logo'=>$new_name,
                        'title'=>$request->title,
                        'contact'=>$request->contact,
                        'contact2'=>$request->contact2,
                        'email'=>$request->email,
                        'address'=>$request->address,
                        'description'=>$request->description,
                        'fb'=>$request->fb,
                        'linkedin'=>$request->linkedin,
                        'whatsapp'=>$request->whatsapp,
                        'skype'=>$request->skype
                    ]);

                    if($data){
                        $logo->move($upload_path, $new_name);

                        toast('Changes saved successfully','success')
                       ->padding('10px')->width('270px')->timerProgressBar()->hideCloseButton();
                        return redirect()->back();
                    }
                }

            }elseif($request->logo == ''){
                $data = Setting::where('id',$request->id)->update([
                    'title'=>$request->title,
                    'contact'=>$request->contact,
                    'contact2'=>$request->contact2,
                    'email'=>$request->email,
                    'address'=>$request->address,
                    'description'=>$request->description,
                    'fb'=>$request->fb,
                    'linkedin'=>$request->linkedin,
                    'whatsapp'=>$request->whatsapp,
                    'skype'=>$request->skype
                ]);

                toast('Changes saved successfully','success')
                ->padding('10px')->width('270px')->timerProgressBar()->hideCloseButton();
                 return redirect()->back();
            }else{
                Alert::error('Opps...', 'Please fillup all field');
                return response()->json([
                    'message'=>'success'
                ],200);
            }

        }
    }

}
