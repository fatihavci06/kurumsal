@extends('back.layouts.master')
        <!-- End of Sidebar -->
@section('content')
@section('title','İletişim->Anasayfa')        <!-- Content Wrapper -->


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
                            <form  action="{{route('iletisims.post',$iletisims->id)}}" method="post">
                                @csrf
                                      <div class="form-group">
                                        <label for="exampleFormControlInput1">Adres</label>
                                        <input type="text" name="adres" class="form-control" value="{{$iletisims->adres}}"  >
                                      </div>
                                     

                                      <div class="form-group">
                                        <label for="exampleFormControlInput2">Email1</label>
                                        <input type="text" name="email1"  class="form-control" value="{{$iletisims->email1}}" >
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput2">Email2</label>
                                        <input type="text" name="email2"  class="form-control" value="{{$iletisims->email2}}" >
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput2">Tel1</label>
                                        <input type="text" name="telefon1"  class="form-control" value="{{$iletisims->telefon1}}" >
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlInput2">Tel2</label>
                                        <input type="text" name="telefon2"  class="form-control" value="{{$iletisims->telefon2}}" >
                                      </div>
                                       <div class="form-group">
                                        <label for="exampleFormControlInput1">İçerik</label>
                                        <textarea id="summernote" style="background: #fff;" name="aciklama">{{$iletisims->aciklama}}</textarea>

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