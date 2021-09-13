<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sss;
use Illuminate\Support\Str;
class sssescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sss']=sss::all();
        return view('back.ssses',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('back.sssekle');
    }
    public function ekle(Request $request)
    {
         $request->validate([
                'soru'=>'required|min:5',
                    'cevap'=>'required'
               ]);
        $sss= new sss;
       $sss->soru=$request->soru;
       $sss->cevap=$request->cevap;
      
       $sss->save();
      return back()->with('success','SSS başarıyla eklendi');
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
        $data['sss']=sss::findOrFail($id);
        return view('back.sssguncelle',$data);
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
        'soru'=>'required|min:5',
        'cevap'=>'required|min:5',
       
        ]);
        

        $content=sss::findOrFail($id);
        $content->soru=$request->soru;
        $content->cevap=$request->cevap;
        $content->save();

          return back()->with('success','SSS başarıyla eklendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sss = sss::findOrFail($id);
        
        $sss->delete();
        return redirect()->route('admin.sss');
    }
}
