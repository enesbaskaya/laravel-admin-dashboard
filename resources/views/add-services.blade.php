@extends('layouts.master')
@section('content')

    <main role="main" class="main-content">
        <div class="container-fluid">
            <form action="{{route('services.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-center">


                    <div class="form-group mb-3 col-md-6">
                        <label for="example-email">Hizmet Adı</label>
                        <input name="name" placeholder="BTG Medya" type="text" id="simpleinput"
                               class="form-control">
                    </div>


                    <div class="form-group mb-3 col-md-6">
                        <label for="example-email">Hizmet Açıklaması</label>
                        <input name="desc" placeholder="www.btgmedya.com" type="text" id="simpleinput"
                               class="form-control">
                    </div>

                    <div class="form-group mb-3 col-md-6">
                        <label for="customFile">Hizmet Fotoğrafı</label>
                        <div class="custom-file">
                            <input name="simage" type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Fotoğraf</label>
                        </div>
                    </div>

                    <div class="form-group mb-3 col-md-6">
                        <label for="customFile">Paket Fotoğrafı</label>
                        <div class="custom-file">
                            <input name="pimage" type="file" class="custom-file-input" id="customFile">
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
