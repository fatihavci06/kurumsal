<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\service;
use Validator;
class hizmetlerimiz extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['hizmetler']=service::get();
        
        return view('back.hizmetlerimiz',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.hizmetekle');
    }
     public function ekle(Request $request)
    {

        $request->validate([
                'servicetitle'=>'required|min:5',
                    'content'=>'required'
               ]);
        $hizmet= new service;
       $hizmet->servicetitle=$request->servicetitle;
       $hizmet->serviceaciklama=$request->content;
      
       $hizmet->save();
      return redirect()->route('admin.hizmetlerimiz.ekle')->with('success','Mesajınız bize iletildi teşekkürler');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        $data['services']=service::findOrFail($id);
       return view('back.hizmetedit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
        'servicetitle'=>'required|min:5',
        'content'=>'required|min:5',
       
        ]);
        

        $content=service::findOrFail($id);
        $content->servicetitle=$request->servicetitle;
        $content->serviceaciklama=$request->content;
        $content->save();

          return back()->with('success','Makale başarıyla eklendi');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = service::findOrFail($id);

        $service->delete();
         return redirect()->route('admin.hizmetlerimiz');

    }
}
