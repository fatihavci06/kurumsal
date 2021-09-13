@extends('back.layouts.master')
        <!-- End of Sidebar -->
@section('content')
@section('title','Hakkımızda')        <!-- Content Wrapper -->


                        <!-- Nav Item - Alerts -->
                        


                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Hakkımızda</h1>
                        
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
                            <form  action="{{route('hakkimizda.post',$hakkimizda->id)}}" method="post">
                                @csrf
                                      <div class="form-group">
                                        <label for="exampleFormControlInput1">Başlık</label>
                                        <input type="title" name="title" class="form-control" value="{{$hakkimizda->title}}"  >
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput1">İçerik</label>
                                        <textarea id="summernote" style="background: #fff;" name="content">
                                            {{$hakkimizda->content}}
                                        </textarea>

                                      </div>

                                      <div class="form-group">
                                        <label for="exampleFormControlInput2">Başlık2</label>
                                        <input type="title2" name="title2"  class="form-control" value="{{$hakkimizda->title2}}" >
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput2">İçerik2</label>
                                        <textarea class="form-control" name="content2">{{$hakkimizda->content2}}</textarea>

                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput2">Başlık3</label>
                                        <input type="title3" name="title3" value="{{$hakkimizda->title3}}"class="form-control"  >
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput2">İçerik3</label>
                                        <textarea class="form-control" name="content3">{{$hakkimizda->content3}}</textarea>

                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput2">Başlık4</label>
                                        <input type="title4" name="title4"  value="{{$hakkimizda->title4}}" class="form-control"  >
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput2">İçerik4</label>
                                        <textarea class="form-control" name="content4">{{$hakkimizda->content4}}</textarea>

                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput2">Başlık5</label>
                                        <input type="title5" name="title5" value="{{$hakkimizda->title5}}" class="form-control"  >
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput2">İçerik5</label>
                                        <textarea class="form-control" name="content5">{{$hakkimizda->content5}}</textarea>

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