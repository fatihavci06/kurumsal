@extends('back.layouts.master')
        <!-- End of Sidebar -->
@section('content')
@section('title','Ayarlar')        <!-- Content Wrapper -->


                        <!-- Nav Item - Alerts -->
                        


                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Ayarlar</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="col-lg-8">
                        @if(session('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                        @endif
                         @if($errors->any()) 
                         <div class="alert alert-danger">
                                @foreach($errors->all() as $e)
                                <li>{{$e}}</li>
                                 {{session('success')}}
                                @endforeach
                            </div>
                            @endif
                            <form  action="{{route('admin.ayarlarpost.guncelle',$ayarlar->id)}}" enctype="multipart/form-data" method="post">
                                @csrf
                                      <div class="form-group">
                                        <label for="exampleFormControlInput1">Anasayfa Resim</label><br/>
                                        <img src="{{$ayarlar->image}}" style="max-height:100px;max-width:150px;" /><br/><br/>
                                        <input type="file" name="image" class="form-control"   >
                                      </div>
                                      
                                      <div class="form-group">
                                        <label for="exampleFormControlInput1">Başlık1</label>
                                        <input type="title" name="title1" class="form-control" value="{{$ayarlar->title1}}"  >
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput1">Başlık2</label>
                                        <input type="title" name="title2" class="form-control" value="{{$ayarlar->title2}}"  >
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput1">Facebook</label>
                                        <input type="title" name="facebook" class="form-control" value="{{$ayarlar->facebook}}"  >
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput1">Twitter</label>
                                        <input type="title" name="twitter" class="form-control" value="{{$ayarlar->twitter}}"  >
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput1">Instagram</label>
                                        <input type="title" name="instagram" class="form-control" value="{{$ayarlar->instagram}}"  >
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput1">Skype</label>
                                        <input type="title" name="skype" class="form-control" value="{{$ayarlar->skype}}"  >
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput1">Linkedin</label>
                                        <input type="title" name="linkedin" class="form-control" value="{{$ayarlar->linkedin}}"  >
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