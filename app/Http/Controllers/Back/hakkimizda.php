<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\about;
Use Validator;
class hakkimizda extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['hakkimizda']=about::find(1);
        return view('back.hakkimizda',$data);
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
        $request->validate([
        'title'=>'required|min:5',
        'content'=>'required|min:5',
        
       ]);
        $content=about::findOrFail($id);
        $content->title=$request->title;
        $content->content=$request->content;
        $content->title2=$request->title2;
        $content->content2=$request->content2;
        $content->title3=$request->title3;
        $content->content3=$request->content3;
        $content->title4=$request->title4;
        $content->content4=$request->content4;
        $content->title5=$request->title5;
        $content->content5=$request->content5;
        $content->save();
         return redirect()->route('admin.hakkimizda')->with('success','Makale başarıyla eklendi');
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
