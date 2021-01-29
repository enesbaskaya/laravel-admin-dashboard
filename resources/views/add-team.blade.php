@extends('layouts.master')
@section('content')

    <main role="main" class="main-content">
        <div class="container-fluid">
            <form action="{{route('teams.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-center">


                    <div class="form-group mb-3 col-md-6">
                        <label for="example-email">Ad Soyad</label>
                        <input name="name" placeholder="İsim Girin" type="text" id="simpleinput"
                               class="form-control">
                    </div>


                    <div class="form-group mb-3 col-md-6">
                        <label for="example-email">Email</label>
                        <input name="email" placeholder="Mail Girin" type="text" id="simpleinput"
                               class="form-control">
                    </div>


                    <div class="form-group mb-3 col-md-6">
                        <label for="example-email">Ünvan</label>
                        <input name="jobtitle" placeholder="Ünvan Girin" type="text" id="simpleinput"
                               class="form-control">
                    </div>


                    <div class="form-group mb-3 col-md-6">
                        <label for="example-email">Twitter</label>
                        <input name="twitter" placeholder="Twitter Link Girin" type="text" id="simpleinput"
                               class="form-control">
                    </div>
                    <div class="form-group mb-3 col-md-6">
                        <label for="example-email">Instagram</label>
                        <input name="instagram" placeholder="Instagram Link Girin" type="text" id="simpleinput"
                               class="form-control">
                    </div>
                    <div class="form-group mb-3 col-md-6">
                        <label for="example-email">Linkedin</label>
                        <input name="linkedin" placeholder="Linkedin Adresi Girin" type="text" id="simpleinput"
                               class="form-control">
                    </div>

                    <div class="form-group mb-3 col-md-6">
                        <label for="customFile">Fotoğraf</label>
                        <div class="custom-file">
                            <input name="image" type="file" class="custom-file-input" id="customFile">
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
