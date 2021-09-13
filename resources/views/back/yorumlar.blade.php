@extends('back.layouts.master')
        <!-- End of Sidebar -->
@section('content')
@section('title','Anasayfa')        <!-- Content Wrapper -->


                        <!-- Nav Item - Alerts -->
                        

                   
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Hizmetlerimiz</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="content col-lg-10">
                        
                <table id="example" class="table table-striped table-bordered col-lg-12" style="width:100%">
        <thead>
           
            <tr>
               
                <th>Ad</th>
                <th>Meslek</th>
                <th>Resim</th>
                <th>Yorum</th>
                <th>İşlem</th>
                
            </tr>
            
        </thead>
        <tbody>
             @foreach($yorumlar as $h)
            <tr>
                
                <td>{{$h->name}}</td>
                <td>{{$h->job}}</td>
                <td><img style="max-width:150px;max-height:100px;"src="{{$h->image}}"/></td>
                <td>{{$h->comment}}</td>
                <td>
                 
                    <a onclick="silmedenSor('{{route('admin.yorumlar.sil',$h->id)}}');return false"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    &nbsp&nbsp
                    <a href="{{route('admin.yorumlar.guncelle',$h->id)}}"><i class="fas fa-edit" aria-hidden="true"></i></a>
                </td>

               
            </tr>
            @endforeach
        
           
        </tbody>
        <tfoot>
            <tr>
                
                <th>Ad</th>
                <th>Meslek</th>
                <th>Resim</th>
                <th>Yorum</th>
                <th>İşlem</th>
            </tr>
        </tfoot>
    </table>
                    </div>

                    <!-- Content Row -->

                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@endsection