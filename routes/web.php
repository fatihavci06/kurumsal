<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.index');
});
Route::get('/','App\Http\Controllers\Front\Homepages@index')->name('front.index');
Route::post('/contactpost','App\Http\Controllers\Front\Homepages@contact')->name('contact.post');
Route::get('/admin/dashboard','App\Http\Controllers\Back\Homepages@index')->middleware('buadminmi')->name('admin.dashboard');
Route::get('admin/giris','App\Http\Controllers\Back\Auths@login')->name('admin.login');
Route::get('admin/cikis','App\Http\Controllers\Back\Auths@logout')->name('admin.logout');
Route::post('admin/giris','App\Http\Controllers\Back\Auths@loginpost')->name('admin.login.post');
Route::get('admin/hakkimizda','App\Http\Controllers\Back\hakkimizda@index')->middleware('buadminmi')->name('admin.hakkimizda');

Route::get('admin/hizmetlerimiz','App\Http\Controllers\Back\hizmetlerimiz@index')->middleware('buadminmi')->name('admin.hizmetlerimiz');
Route::get('admin/hizmetlerimiz/sil/{id}','App\Http\Controllers\Back\hizmetlerimiz@destroy')->middleware('buadminmi')->name('admin.hizmetlerimiz.sil');
Route::get('admin/hizmetlerimiz/ekle','App\Http\Controllers\Back\hizmetlerimiz@create')->middleware('buadminmi')->name('admin.hizmetlerimiz.ekle');
Route::post('admin/hakkimizda/{id?}','App\Http\Controllers\Back\hakkimizda@update')->name('hakkimizda.post');
Route::post('admin/hizmetlerimiz/ekle','App\Http\Controllers\Back\hizmetlerimiz@ekle')->middleware('buadminmi')->name('admin.hizmetlerimizpost.ekle');
Route::get('admin/hizmetlerimiz/edit/{id}','App\Http\Controllers\Back\hizmetlerimiz@edit')->middleware('buadminmi')->name('admin.hizmetlerimiz.guncelle');
Route::post('admin/hizmetlerimiz/update/{id}','App\Http\Controllers\Back\hizmetlerimiz@update')->middleware('buadminmi')->name('admin.hizmetlerimizpost.update');

Route::get('admin/markalar','App\Http\Controllers\Back\markalar@index')->middleware('buadminmi')->name('admin.markalar');
Route::get('admin/markalar/sil/{id}','App\Http\Controllers\Back\markalar@destroy')->middleware('buadminmi')->name('admin.markalar.sil');
Route::get('admin/markalar/ekle','App\Http\Controllers\Back\markalar@create')->middleware('buadminmi')->name('admin.markalar.ekle');
Route::post('admin/markalar/markaekle','App\Http\Controllers\Back\markalar@ekle')->middleware('buadminmi')->name('admin.markalarpost.ekle');
Route::get('admin/markalar/edit/{id}','App\Http\Controllers\Back\markalar@edit')->middleware('buadminmi')->name('admin.markalar.guncelle');
Route::post('admin/markalar/update/{id}','App\Http\Controllers\Back\markalar@update')->middleware('buadminmi')->name('admin.markalarpost.update');


Route::get('admin/yorumlar','App\Http\Controllers\Back\testimonialcontroller@index')->middleware('buadminmi')->name('admin.yorumlar');
Route::get('admin/yorumlar/ekle','App\Http\Controllers\Back\testimonialcontroller@create')->middleware('buadminmi')->name('admin.yorumlar.ekle');
Route::get('admin/yorumlar/sil/{id}','App\Http\Controllers\Back\testimonialcontroller@destroy')->middleware('buadminmi')->name('admin.yorumlar.sil');
Route::post('admin/yorumlar/yorumlarekle','App\Http\Controllers\Back\testimonialcontroller@ekle')->middleware('buadminmi')->name('admin.yorumlarpost.ekle');
Route::get('admin/yorumlar/edit/{id}','App\Http\Controllers\Back\testimonialcontroller@edit')->middleware('buadminmi')->name('admin.yorumlar.guncelle');
Route::post('admin/yorumlar/update/{id}','App\Http\Controllers\Back\testimonialcontroller@update')->middleware('buadminmi')->name('admin.yorumlarpost.update');


Route::get('admin/takim','App\Http\Controllers\Back\teamcontroller@index')->middleware('buadminmi')->name('admin.takim');
Route::get('admin/takim/ekle','App\Http\Controllers\Back\teamcontroller@create')->middleware('buadminmi')->name('admin.takim.ekle');
Route::get('admin/takim/sil/{id}','App\Http\Controllers\Back\teamcontroller@destroy')->middleware('buadminmi')->name('admin.takim.sil');
Route::post('admin/takim/takimekle','App\Http\Controllers\Back\teamcontroller@ekle')->middleware('buadminmi')->name('admin.takimpost.ekle');
Route::get('admin/takim/edit/{id}','App\Http\Controllers\Back\teamcontroller@edit')->middleware('buadminmi')->name('admin.takim.guncelle');
Route::post('admin/takim/update/{id}','App\Http\Controllers\Back\teamcontroller@update')->middleware('buadminmi')->name('admin.takimpost.update');

Route::get('admin/sss','App\Http\Controllers\Back\sssescontroller@index')->middleware('buadminmi')->name('admin.sss');
Route::get('admin/sss/ekle','App\Http\Controllers\Back\sssescontroller@create')->middleware('buadminmi')->name('admin.sss.ekle');
Route::get('admin/sss/sil/{id}','App\Http\Controllers\Back\sssescontroller@destroy')->middleware('buadminmi')->name('admin.sss.sil');
Route::get('admin/sss/edit/{id}','App\Http\Controllers\Back\sssescontroller@edit')->middleware('buadminmi')->name('admin.sss.guncelle');
Route::post('admin/sss/update/{id}','App\Http\Controllers\Back\sssescontroller@update')->middleware('buadminmi')->name('admin.ssspost.update');
Route::post('admin/sss/ekle','App\Http\Controllers\Back\sssescontroller@ekle')->middleware('buadminmi')->name('admin.ssspost.ekle');

Route::get('admin/ayarlar/edit/','App\Http\Controllers\Back\optionscontroller@edit')->middleware('buadminmi')->name('admin.ayarlar');
Route::post('admin/ayarlar/update/{id}','App\Http\Controllers\Back\optionscontroller@update')->middleware('buadminmi')->name('admin.ayarlarpost.guncelle');
Route::get('admin/iletisimanasayfa/','App\Http\Controllers\Back\iletisimanasayfacontroller@index')->middleware('buadminmi')->name('admin.iletisimanasayfa');
Route::post('admin/iletisimyonetim/duzenle/{id}','App\Http\Controllers\Back\iletisimanasayfacontroller@update')->middleware('buadminmi')->name('iletisims.post');
Route::get('admin/mesajkutusu/','App\Http\Controllers\Back\mesajkutusucontroller@index')->middleware('buadminmi')->name('admin.mesajkutusu');
Route::get('admin/mesajkutusu/arsiv','App\Http\Controllers\Back\mesajkutusucontroller@arsiv')->middleware('buadminmi')->name('admin.mesajkutusu.arsiv');
Route::get('admin/mesajkutusu/okunan','App\Http\Controllers\Back\mesajkutusucontroller@okunan')->middleware('buadminmi')->name('admin.mesajkutusu.okunan');

Route::get('admin/mesaj/sil/{id}','App\Http\Controllers\Back\mesajkutusucontroller@destroy')->middleware('buadminmi')->name('admin.mesaj.sil');
Route::get('admin/mesaj/detay/{id}','App\Http\Controllers\Back\mesajkutusucontroller@store')->middleware('buadminmi')->name('admin.mesaj.detay');
Route::post('admin/mesaj/update/{id}','App\Http\Controllers\Back\mesajkutusucontroller@update')->middleware('buadminmi')->name('admin.mesaj.guncelle');

Route::get('admin/kullanici/ekle','App\Http\Controllers\Back\usercontroller@index')->middleware('buadminmi')->name('admin.kullanici.ekle');
Route::post('admin/kullanici/olustur','App\Http\Controllers\Back\usercontroller@create')->middleware('buadminmi')->name('admin.kullanici.olustur');
Route::get('admin/kullanici/liste','App\Http\Controllers\Back\usercontroller@liste')->middleware('buadminmi')->name('admin.kullanici.liste');
Route::get('admin/kullanici/sil/{id}','App\Http\Controllers\Back\usercontroller@destroy')->middleware('buadminmi')->name('admin.kullanici.sil');
Route::get('admin/kullanici/askiyal/{id}','App\Http\Controllers\Back\usercontroller@askiyaal')->middleware('buadminmi')->name('askiyaal');
Route::get('admin/kullanici/aktifet/{id}','App\Http\Controllers\Back\usercontroller@aktifet')->middleware('buadminmi')->name('aktifet');

Route::get('admin/kullanici/profilim/{id}','App\Http\Controllers\Back\usercontroller@profilim')->middleware('buadminmi')->middleware('bukisimi')->name('profilim');
Route::post('admin/kullanici/profilim-duzenle/{id}','App\Http\Controllers\Back\usercontroller@profilimduzenle')->middleware('buadminmi')->name('profilim.duzenle');