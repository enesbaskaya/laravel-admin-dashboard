@extends('layouts.master')
@section('content')

    <main role="main" class="main-content">
        <div class="container-fluid">
            <form action="{{route('about.update',$about->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row justify-content-center">


                    <div class="form-group mb-3 col-md-6">
                        <label for="example-textarea">Hakkımızda İçerik</label>
                        <textarea name="about" class="form-control" id="example-textarea" rows="6">{{$about->aboutDetail}}</textarea>
                    </div>


                    <div class="form-group mb-3 col-md-6">
                        <label for="example-textarea">Vizyon İçerik</label>
                        <textarea name="vision" class="form-control" id="example-textarea" rows="6">{{$about->visionDetail}}</textarea>
                    </div>


                    <div class="form-group mb-3 col-md-6">
                        <label for="example-textarea">Misyon İçerik</label>
                        <textarea name="mission" class="form-control" id="example-textarea" rows="6">{{$about->missionDetail}}</textarea>
                    </div>

                    <div class="form-group mb-3 col-md-6">
                        <label for="customFile">Hakkımızda Fotoğraf</label><br>
                        <img width="120" height="88"  class="rounded mb-3" src="{{asset($about->aboutImage)}}">
                        <div class="custom-file">
                            <input name="image" type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Fotoğraf</label>
                        </div>
                    </div>
                </div> <!-- end section -->
                <div class="form-group mb-3 float-left">
                    <button type="submit" class="mt-4 btn mt-2 btn-primary">Kaydet</button>
                </div>

            </form>
        </div>
    </main> <!-- main -->
    </div> <!-- .wrapper -->

@endsection
