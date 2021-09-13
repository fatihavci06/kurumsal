<?php

 use Illuminate\Support\Facades\Auth;

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable; //bu satır eklendi
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class user extends Authenticatable //model yerine bu eklendi
{
    use HasFactory;
     public function bilgiuye(){
      return  $this->hasOne(userstatus::class, 'kullanici_id', 'id');
    }
}
