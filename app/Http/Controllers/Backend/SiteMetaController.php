<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteMeta;
class SiteMetaController extends Controller
{
    
    public function index()
    {
        $data = auth()->user();
        $metas = SiteMeta::all();
        return view("layouts.backend.siteMeta.meta",[
            'data'=>$data,
            'metas'=>$metas
        ]);
    }

    
    public function store(Request $request)
    {
        // dd($request->all());
        $datas = $request->all();
        foreach ($datas['name'] as $key => $value) {
            SiteMeta::create([
                'name'=>$datas['name'][$key],
                'meta_des'=>$datas['meta_des'][$key],
            ]);
        }

        return response()->json([
            'msg'=>"success"
        ],200);
    }

    
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request)
    {
        SiteMeta::where('id',$request->metaId)->update([
            'name'=>$request->name,
            'meta_des'=>$request->meta_des,
        ]);

        return response()->json([
            'msg'=>"success"
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
