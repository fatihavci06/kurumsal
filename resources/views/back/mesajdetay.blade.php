@extends('back.layouts.master')
        <!-- End of Sidebar -->
@section('content')
@section('title','Mesaj Detay')        <!-- Content Wrapper -->


                        <!-- Nav Item - Alerts -->
                        

                   
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Marka Ekle</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="content col-lg-10" >
                         @if(session('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                        @endif
                        @if($errors->any()) 
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $e)
                            <li>{{$e}}</li>
                            @endforeach
                        </div>
                        @endif

                       <table class="table table-bordered" style="background:#fff;">
                          
                          <tbody>
                            
                            <tr>
                              <th scope="row" width="300px;">Ad/Soyad</th>
                              <td colspan="2">{{$mesaj->name}}</td>
                              
                            </tr>
                            <tr>
                              <th scope="row" width="300px;">Email</th>
                              <td colspan="2">{{$mesaj->email}}</td>
                              
                            </tr>
                             <tr>
                              <th scope="row" width="300px;">Konu</th>
                              <td colspan="2">{{$mesaj->subject}}</td>
                              
                            </tr>
                            <tr>
                              <th scope="row" width="300px;">Mesaj</th>
                              <td colspan="2">{{$mesaj->message}}</td>
                              
                            </tr>
                            <tr>
                              <th scope="row" width="300px;">Durumu</th>
                              <td colspan="2">
                                <form method="post" action="{{route('admin.mesaj.guncelle',$mesaj->id)}}">
                                    @csrf
                                <select name="durum" class="form-control">
                                  <option value="1" @if($mesaj->durum==1) selected="selected" @endif>Okunmadı</option>
                                  <option value="2" @if($mesaj->durum==2) selected="selected" @endif >Okundu</option>
                                  <option value="3" @if($mesaj->durum==3) selected="selected" @endif>Arşivlendi</option>
                                 
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                
                                    
                                    <div class="form-group">
                                         <button  class="btn btn-success form-control">Gönder</button>   

                                      </div>
                                </form>
                                </td>
                              
                            </tr>
                          </tbody>
                        </table>
                
                    </div>

                    <!-- Content Row -->

                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@endsection