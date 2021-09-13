<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\testimonial;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
class testimonialcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['yorumlar']=testimonial::all();
        return view('back.yorumlar',$data);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.yorumlarekle');
    }
    public function ekle(Request $request)
    {
        
       $request->validate([
        'name'=>'required|min:5',
        'image'=>'required|image|mimes:jpeg,png,jpg|max:300'
        
       ]);
       $content=new testimonial;
       $content->name=$request->name;
       $content->job=$request->job;
         $content->comment=$request->comment;
         if($request->hasfile('image')){
            $imagename=Str::slug($request->name).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imagename);
            $content->image='/uploads/'.$imagename;


         }
         $content->save();
         
          return back()->with('success','Marka başarıyla eklendi');
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
        $data['yorumlar']=testimonial::findOrFail($id);
        return view('back.yorumlaredit',$data);
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
        $content=testimonial::findOrFail($id);
        $eskifoto=$content->image;
        File::delete($eskifoto); //UNLİNK GİBİ ESKİ FOTOĞRAFI SİLDİK
       $content->name=$request->name;
       $content->job=$request->job;
       $content->comment=$request->comment;

        if($request->hasfile('image')){
            $imagename=Str::slug($request->name).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imagename);
            $content->image='/uploads/'.$imagename;


         }
         $content->save();
         
         return back()->with('success','Yorum başarıyla güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $yorum = testimonial::findOrFail($id);
        
        $yorum->delete();
        return redirect()->route('admin.yorumlar');
    }
}
