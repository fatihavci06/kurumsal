@extends('back.layouts.master')
        <!-- End of Sidebar -->
@section('content')
@section('title','Kullanıcılar')        <!-- Content Wrapper -->


                        <!-- Nav Item - Alerts -->
                        

                   
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @if(session('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                        @endif
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Kullanıcılar</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="content col-lg-10">
                        
                <table id="example" class="table table-striped table-bordered col-lg-12" style="width:100%">
        <thead>
           
            <tr>
                <th>Id</th>
                <th>Adı</th>
                <th>Email</th>
                <th>İşlem</th>
                
            </tr>
            
        </thead>
        <tbody>
             @foreach($kullanicilar as $h)
            <tr>
                <td>{{$h->id}}</td>
                <td>{{$h->name}}</td>
                <td>{{$h->email}}</td>
                
                <td>
                 
                    <a onclick="silmedenSor('{{route('admin.kullanici.sil',$h->id)}}');return false"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    &nbsp&nbsp
                    <a href="{{route('admin.markalar.guncelle',$h->id)}}"><i class="fas fa-edit" aria-hidden="true"></i></a>
                    @if($h->bilgiuye->status==1)
                    
                            
                            <a href="{{route('askiyaal',$h->bilgiuye->kullanici_id)}}" class="btn btn-danger askiyal">Askıya al</a>
                    

                    @endif
                    @if($h->bilgiuye->status==0)
                    <a href="{{route('aktifet',$h->bilgiuye->kullanici_id)}}" class="btn btn-success askiyal">Aktif Et</a>
                    @endif
                    
                   
                </td>
               
            </tr>
            @endforeach
        
           
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Adı</th>
                <th>Email</th>
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