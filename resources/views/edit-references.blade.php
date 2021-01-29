@extends('layouts.master')
@section('content')

    <main role="main" class="main-content">
        <div class="container-fluid">
            <form action="{{route('references.update',$references->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row justify-content-center">


                    <div class="form-group mb-3 col-md-6">
                        <label for="example-email">Firma Adı</label>
                        <input value="{{$references->companyName}}" name="companyName" placeholder="BTG Medya" type="text" id="simpleinput"
                               class="form-control">
                    </div>


                    <div class="form-group mb-3 col-md-6">
                        <label for="example-email">Link</label>
                        <input value="{{$references->url}}" name="link" placeholder="www.btgmedya.com" type="text" id="simpleinput"
                               class="form-control">
                    </div>

                    <div class="form-group mb-3 col-md-6">
                        <div class="form-group mb-3">
                            <label for="custom-select">Kategori</label>
                            <select name="category" class="custom-select" id="custom-select">
                                @foreach($categories as $category)
                                    <option @if($references->categoryId ==$category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group mb-3 col-md-6">
                        <label for="example-email">Sektör</label>
                        <input value="{{$references->sector}}" name="sector" placeholder="Bilişim" type="text" id="simpleinput" class="form-control">
                    </div>


                    <div class="form-group mb-3 col-md-6">
                        <label for="example-email">Tarih</label>
                        <input value="{{$references->date}}" name="date" placeholder="2020" type="text" id="simpleinput" class="form-control">
                    </div>

{{--                    <div class="form-group">--}}
{{--                        <label>Image</label>--}}
{{--                        <input type="file" name="image" class="form-control">--}}
{{--                    </div>--}}

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
