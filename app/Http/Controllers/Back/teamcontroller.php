<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\team;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
class teamcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['teams']=team::all();
        return view('back.takim',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('back.takimekle');
    }
    public function ekle(Request $request)
    {
        $request->validate([
        'name'=>'required|min:5',
        'image'=>'required|image|mimes:jpeg,png,jpg|max:400'
        
       ]);
       $content=new team;
       $content->name=$request->name;
       $content->job=$request->job;
        
         if($request->hasfile('image')){
            $imagename=Str::slug($request->name).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imagename);
            $content->image='/uploads/'.$imagename;


         }
         $content->save();
         
          return back()->with('success','Takım arkadaşı başarıyla eklendi');
      
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
        $data['teams']=team::findOrFail($id);
        return view('back.takimguncelle',$data);
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
        'name'=>'required|min:5',
        'image'=>'image|mimes:jpeg,png,jpg|max:500'
        
       ]);
        $content=team::findOrFail($id);
        $eskifoto=$content->image;
        File::delete($eskifoto); //UNLİNK GİBİ ESKİ FOTOĞRAFI SİLDİK
       $content->name=$request->name;
       $content->job=$request->job;
        if($request->hasfile('image')){
            $imagename=Str::slug($request->name).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imagename);
            $content->image='/uploads/'.$imagename;


         }
         $content->save();
         
         return back()->with('success','Marka başarıyla güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $takim = team::findOrFail($id);
        
        $takim->delete();
        return redirect()->back();
    }
}
