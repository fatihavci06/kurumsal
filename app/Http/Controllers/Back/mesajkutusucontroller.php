<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\iletisimpost;
class mesajkutusucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['iletisimposts']=iletisimpost::all();
        return view('back.iletisimposts',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $data['mesaj']=iletisimpost::findOrFail($id);
       return view('back.mesajdetay',$data);
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
     public function arsiv()
    {
        $data['iletisimposts']=iletisimpost::where('durum', '=', 3)->get();
        return view('back.mesaj_arsivlenen',$data);
    }
      public function okunan()
    {
        $data['iletisimposts']=iletisimpost::where('durum', '=', 2)->get();
        return view('back.mesaj_okunan',$data);
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $content=iletisimpost::findOrFail($id);
        $content->durum=$request->durum;
        $content->save();
        return back()->with('success','Durum başarıyla güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mesaj = iletisimpost::findOrFail($id);
        
        $mesaj->delete();
        return back()->with('success','Mesaj başarıyla silindi'); 
    }
}
