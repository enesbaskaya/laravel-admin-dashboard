@extends('layouts.master')
@section('content')

    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">

                <div class="col-12">
                    <h2 class="mb-2 page-title">Referanslar</h2>
                    <div class="row my-4">
                        <!-- Small table -->
                        <div class="col-md-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <!-- table -->
                                    <table class="table datatables" id="dataTable-1">
                                        <thead>
                                        <tr>

                                            <th>ID</th>
                                            <th>Aktiflik</th>
                                            <th>Hizmet Adı</th>
                                            <th>Hizmet Açıklaması</th>
                                            <th>Hizmet Fotoğrafı</th>
                                            <th>Firma Paket Fotoğrafı</th>



                                            <th>Seçenekler</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($services as $service)
                                            <tr>


                                                <td>{{$service->id}}</td>
                                                <td>@if($service->isActive == '0')Pasif @else Aktif @endif</td>
                                                <td>{{$service->name}}</td>
                                                <td>{{$service->desc}}</td>
                                                <td><img class="rounded" width="50" height="50" src="{{$service->servicesImage}}"></td>
                                                <td><img class="rounded" width="50" height="50" src="{{$service->packetImage}}"></td>

                                                <td>
                                                    <button class="btn btn-sm dropdown-toggle more-horizontal"
                                                            type="button"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="{{route('services.edit',$service->id)}}">Düzenle</a>
                                                        <a class="dropdown-item" href="{{route('services.destroy',$service->id)}}">Pasif</a>
                                                        <a class="dropdown-item" href="{{route('services.destroy',$service->id)}}">Aktif</a>
                                                    </div>
                                                </td>

                                            </tr> @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- simple table -->
                    </div> <!-- end section -->
                </div> <!-- .col-12 -->

            </div> <!-- end row -->

        </div>
    </main> <!-- main -->
    </div> <!-- .wrapper -->

@endsection
