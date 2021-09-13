<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\option;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class optionscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function edit()
    {
        $data['ayarlar']=option::findorFail(1);
        return view('back.ayarlar',$data);
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
        'title1'=>'required|min:5',
        
        
       ]);
        $content=option::findOrFail($id);
        $eskifoto=$content->image;
        File::delete($eskifoto); //UNLİNK GİBİ ESKİ FOTOĞRAFI SİLDİK
       $content->title1=$request->title1;
       $content->title2=$request->title2;
       $content->facebook=$request->facebook;
       $content->twitter=$request->twitter;
       $content->instagram=$request->instagram;
       $content->skype=$request->skype;
       $content->linkedin=$request->linkedin;

        if($request->hasfile('image')){
            $imagename=Str::slug($request->title1).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imagename);
            $content->image='/uploads/'.$imagename;


         }
         $content->save();
         
         return back()->with('success','Ayarlar başarıyla güncellendi');
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
