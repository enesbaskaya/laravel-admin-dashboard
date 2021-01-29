@extends('layouts.master')
@section('content')

    <main role="main" class="main-content">
        <div class="container-fluid">
            <form action="{{route('services.update',$services->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row justify-content-center">


                    <div class="form-group mb-3 col-md-6">
                        <label for="example-email">Hizmet Adı</label>
                        <input value="{{$services->name}}" name="name" placeholder="BTG Medya" type="text" id="simpleinput"
                               class="form-control">
                    </div>


                    <div class="form-group mb-3 col-md-6">
                        <label for="example-email">Hizmet Açıklaması</label>
                        <input value="{{$services->desc}}" name="desc" placeholder="www.btgmedya.com" type="text" id="simpleinput"
                               class="form-control">
                    </div>


                    <div class="form-group mb-3 col-md-6">
                        <img class="rounded mt-3 mb-3" width="100" height="100" src="{{asset($services->servicesImage)}}">
                            <label for="customFile">Hizmet Fotoğrafı</label>
                            <div class="custom-file">
                                <input value="{{$services->simage}}" name="simage" type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Fotoğraf</label>
                            </div>
                    </div>
                    <div class="form-group mb-3 col-md-6">
                        <img class="rounded mt-3 mb-3" width="100" height="100" src="{{asset($services->packetImage)}}">

                        <label for="customFile">Paket Fotoğrafı</label>
                            <div class="custom-file">
                                <input value="{{$services->pimage}}" name="pimage" type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Fotoğraf</label>
                            </div>
                    </div>


                    <div class="form-group mb-3 col-md-6">
                        <button type="submit" class="mt-4 btn mt-2 btn-primary">Kaydet</button>
                    </div>


                </div> <!-- end section -->
            </form>


        </div>
    </main> <!-- main -->
    </div> <!-- .wrapper -->

@endsection
