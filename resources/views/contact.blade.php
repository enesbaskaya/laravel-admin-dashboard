@extends('layouts.master')
@section('content')

    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <h2 class="h3 mb-4 page-title">İletişim</h2>
                    <div class="my-4">
                        <form action="{{route('contact.update',$contact->id)}}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row mt-5 align-items-center">
                                <div class="col-md-3 text-center mb-5">
                                    <div class="avatar avatar-xl">
                                        <img src="./assets/avatars/face-1.jpg" alt="..."
                                             class="avatar-img rounded-circle">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row align-items-center">
                                        <div class="col-md-7">
                                            <h4 class="mb-1">BTG Medya</h4>
                                            <p class="small mb-3"><span
                                                    class="badge badge-dark">İstanbul, Türkiye</span></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="lastname">Adres</label>
                                    <input value="{{$contact->address}}" type="text" name="address" class="form-control"
                                           placeholder="Ataköy Towers Hazır Ofis Kat:6 Daire:85">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lastname">Telefon</label>
                                    <input value="{{$contact->telephone}}" type="text" name="telephone" class="form-control" placeholder="05345862413">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="lastname">İletişim Mail</label>
                                    <input value="{{$contact->infoEmail}}" type="text" name="info" class="form-control"
                                           placeholder="Ataköy Towers Hazır Ofis Kat:6 Daire:85">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lastname">Destek Mail</label>
                                    <input value="{{$contact->supportEmail}}" type="text" name="support" class="form-control" placeholder="05345862413">
                                </div>
                            </div> <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="lastname">Harita Kodu</label>
                                    <input value="{{$contact->iframe}}" type="text" name="iframe" class="form-control"
                                           placeholder="Ataköy Towers Hazır Ofis Kat:6 Daire:85">
                                </div>

                            </div>


                            <button type="submit" class="btn btn-primary">Kaydet</button>
                        </form>
                    </div> <!-- /.card-body -->
                </div> <!-- /.col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main> <!-- main -->
    </div> <!-- .wrapper -->

@endsection
