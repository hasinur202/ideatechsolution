<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

}
