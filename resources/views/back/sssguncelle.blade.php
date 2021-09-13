@extends('back.layouts.master')
        <!-- End of Sidebar -->
@section('content')
@section('title','SSS Güncelle')        <!-- Content Wrapper -->


                        <!-- Nav Item - Alerts -->
                        

                   
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">SSS Guncelle</h1>
                        
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
                       <form action="{{route('admin.ssspost.update',$sss->id)}}" method="post" enctype="multipart/form-data" style="margin-top:20px;">
                        @csrf
                          <div class="form-group">
                            <label for="exampleInputEmail1">Soru</label>
                            <input type="text" value="{{$sss->soru}}" class="form-control" name="soru"  >
                            
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Cevap</label>
                            <input type="text" value="{{$sss->cevap}}" class="form-control" name="cevap"  >
                            
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