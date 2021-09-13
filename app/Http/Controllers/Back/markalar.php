<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\marka;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
class markalar extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data['markas']=marka::all();
        return view('back.markalar',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.markalarekle');
    }
    public function ekle(Request $request)
    {
       $request->validate([
        'name'=>'required|min:5',
        'image'=>'required|image|mimes:jpeg,png,jpg|max:100'
        
       ]);
       $content=new marka;
       $content->name=$request->name;
        
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
        $data['markalar']=marka::findOrFail($id);
        return view('back.markalarguncelle',$data);
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
        'image'=>'required|image|mimes:jpeg,png,jpg|max:500'
        
       ]);
        $content=marka::findOrFail($id);
        $eskifoto=$content->image;
        File::delete($eskifoto);
       $content->name=$request->name;
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
        $markalar = marka::findOrFail($id);
        
        $markalar->delete();
        return redirect()->route('admin.markalar');
    }
}
