@extends('back.layouts.master')
        <!-- End of Sidebar -->
@section('content')
@section('title','Marka Ekle')        <!-- Content Wrapper -->


                        <!-- Nav Item - Alerts -->
                        

                   
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Marka Ekle</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="content col-lg-10" style="background:#fff;border-style: solid;">
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
                       <form action="{{route('admin.markalarpost.update',$markalar->id)}}" method="post" style="margin-top:20px;" enctype="multipart/form-data">
                        @csrf
                          <div class="form-group">

                            <label for="exampleInputEmail1">İsim</label>
                            <input type="text" value="{{$markalar->name}}" class="form-control" name="name"  >
                            
                          </div>
                          <div class="form-group">
                             <img src="{{$markalar->image}}" style="max-width:100px;max-height:175px;" />
                            <label for="exampleInputPassword1">Fotoğraf</label>
                            <input type="file"  class="form-control" name="image"  placeholder="file">
                          </div>
                          
                          <button  class="btn btn-primary form-control"  style="margin-bottom:50px;">Kaydet</button>
                        </form>
                
                    </div>

                    <!-- Content Row -->

                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@endsection