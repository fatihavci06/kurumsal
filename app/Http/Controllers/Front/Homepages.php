<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\service;
use App\Models\iletisimpost;
use App\Models\team;
use App\Models\sss;
use App\Models\testimonial;
use App\Models\about;
use App\Models\marka;
use App\Models\option;
use Validator;
class Homepages extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data['about']=about::find(1);
        $data['option']=option::find(1);
        $data['services']=service::all();
        $data['contacts']=contact::find(1);
        $data['teams']=team::all();
        $data['sss']=sss::all();
        $data['markas']=marka::all();

        $data['testimonials']=testimonial::all();

        return view('front.index',$data);
    }
    public function contact(Request $request)
    {   
      
      $errors=$request->validate([
        'name'=>'required|min:5'

       ]);

       $contact= new iletisimpost;
       $contact->name=$request->name;
       $contact->email=$request->email;
       $contact->subject=$request->subject;
       $contact->message=$request->message;
       $contact->save();
       return 'Başarıyla iletildi';
        
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
        //
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
