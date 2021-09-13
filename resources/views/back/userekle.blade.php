@extends('back.layouts.master')
        <!-- End of Sidebar -->
@section('content')
@section('title','Kullanıcı Ekle')        <!-- Content Wrapper -->


                        <!-- Nav Item - Alerts -->
                        


                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Kullanıcı Ekle</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="col-lg-8">
                        @if(session('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                        @endif
                         @if(session('danger'))
                        <div class="alert alert-danger">{{session('danger')}}</div>
                        @endif
                         @if($errors->any()) 
                         <div class="alert alert-danger">
                                @foreach($errors->all() as $e)
                                <li>{{$e}}</li>
                                 {{session('success')}}
                                @endforeach
                            </div>
                            @endif
                            <form  action="{{route('admin.kullanici.olustur')}}" method="post">
                                @csrf
                                      <div class="form-group">
                                        <label for="exampleFormControlInput1">Kullanıcı Adı</label>
                                        <input type="title" name="name" class="form-control" value="{{old('name')}}"  >
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput1">Email</label>
                                        <input type="title" name="email" class="form-control" value="{{old('email')}}"  >
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput1">Şifre</label>
                                        <input type="password" name="password" class="form-control" value="{{old('password')}}"  >
                                      </div>
                                     

                                      
                                        <div class="form-group">
                                         <button  class="btn btn-success form-control">Gönder</button>   

                                      </div>
                                  
                            </form>
                            
                    

                    </div>

                    <!-- Content Row -->

                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@endsection