<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        $data = auth()->user();
        $services = Service::get() ?? '';

        return view('layouts.backend.services.services',[
            'services'=>$services,
            'data'=>$data
        ]);
    }
}
