<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\userstatus;
class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.userekle');
    }
     public function liste()
    {   
        $data['kullanicilar']=user::all();
        return view('back.kullanicilar',$data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
                'name'=>'required|min:5',
                    'email'=>'required',
                    'password'=>'required'

               ]);
        $content= new user;
        $content->name=$request->name;
        $varmi=user::where('email','=',$request->email);
        if($varmi->count()>0){
            return back()->with('danger','Email adresi zaten sisteme kayıtlı');
        }
        $content->email=$request->email;
        $content->password=bcrypt($request->password);
      
        $content->save();

        $soneklenen=user::max('id');
        $iliski=new userstatus;
        $iliski->kullanici_id=$soneklenen;
        $iliski->save();





        return back()->with('success','Kullanıcı başarıyla eklendi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function askiyaal(Request $request,$id)
    {
        $content=userstatus::where('kullanici_id',"=",$id)->first();
        $content->status=0;
         $content->save();
        return back()->with('success','Başarıyla askıya alındı');
    }
    public function aktifet(Request $request,$id)
    {
        $content=userstatus::where('kullanici_id',"=",$id)->first();
        $content->status=1;
         $content->save();
        return back()->with('success','Başarıyla aktif edildi.');
    }
    public function profilim(Request $request, $id)
    {
        $data['profilim']=user::findOrFail($id);
        return view('back.profilim',$data);
    }
    public function profilimduzenle(Request $request, $id)
    {
           $request->validate([
        'name'=>'required|min:5'
        
       
        ]);
        

        $content=user::findOrFail($id);
        $content->name=$request->name;
        $content->password=bcrypt($request->password);
        $content->save();

          return back()->with('success','Profil başarıyla güncellendi');
    }
    public function store(Request $request)
    {
        
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
         $content = user::findOrFail($id);
        
        $content->delete();
        return back()->with('success','Başarıyla silindi');
    }
}
