<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Choose;
use Illuminate\Http\Request;

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
}
