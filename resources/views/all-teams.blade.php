@extends('layouts.master')
@section('content')

    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2 page-title">Ekibimiz</h2>
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
                                            <th>Adı Soyadı</th>
                                            <th>Fotoğraf</th>
                                            <th>Email</th>
                                            <th>Ünvan</th>
                                            <th>Twitter</th>
                                            <th>Linkedin</th>
                                            <th>Instagram</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($teams as $team)
                                            <tr>


                                                <td>{{$team->id}}</td>
                                                <td>{{$team->name}}</td>
                                                <td><img class="rounded" width="50" height="50" src="{{$team->image}}">
                                                </td>
                                                <td>{{$team->email}}</td>
                                                <td>{{$team->jobtitle}}</td>
                                                <td>{{$team->twitter}}</td>
                                                <td>{{$team->instagram}}</td>
                                                <td>{{$team->linkedin}}</td>
                                                <td>
                                                    <button class="btn btn-sm dropdown-toggle more-horizontal"
                                                            type="button"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                        <span class="text-muted sr-only">Action</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item"
                                                           href="{{route('teams.edit',$team->id)}}">Düzenle</a>
                                                        <a class="dropdown-item"
                                                           href="{{route('teams.destroy',$team->id)}}">Sil</a>
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
