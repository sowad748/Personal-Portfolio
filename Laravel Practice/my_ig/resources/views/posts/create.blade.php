@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/p" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row mb-3">
                        <label for="Caption" class="col-md-4 col-form-label ">Post Caption</label>

                        <div class="col-md-">
                            <input id="Caption" type="Caption" class="form-control @error('Caption') is-invalid @enderror"
                                name="caption" value="{{ old('Caption') }}" autocomplete="Caption">

                            @error('Caption')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label ">Post Image</label>
                        <input type="file" name="image" id="image" class="form-control-file">
                        @error('image')
                            <strong>{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="row mt-4">
                        <button type="submit" class="btn btn-primary" style="max-width: 100px">Add New Post</button>
                    </div>

                </div>
            </div>
        </form>






    </div>
@endsection
