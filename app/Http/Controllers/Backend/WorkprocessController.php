<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkprocessController extends Controller
{
    public function index(){
        $data = auth()->user();
        // $services = Service::get();

        return view('layouts.backend.work_process.work_process',[
            // 'services'=>$services ?? '',
            'data'=>$data
        ]);
    }
}
