@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap Site</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
            integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
            integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
        </script>
    </head>

    <body>
        <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row mb-3">
                        <label for="username" class="col-md-4 col-form-label ">Update Username</label>

                        <div class="col-md-">
                            <input id="username" type="username" class="form-control @error('username') is-invalid @enderror"
                                name="username" value="{{ old('username')?? $user->profile->username ?? 'Null'}}" autocomplete="username">

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label for="title" class="col-md-4 col-form-label ">Update Title</label>

                        <div class="col-md-">
                            <input id="title" type="title" class="form-control @error('title') is-invalid @enderror"
                                name="title" value="{{ old('title')?? $user->profile->title ?? 'Null' }}" autocomplete="title">

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label for="title" class="col-md-4 col-form-label ">Update Description</label>

                        <div class="col-md-">
                            <input id="description" type="description" class="form-control @error('description') is-invalid @enderror"
                                name="description" value="{{ old('description')?? $user->profile->description ?? 'Null'}}" autocomplete="description">

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                            <label for="dp" class="col-md-4 col-form-label ">Change profile picture</label>
                            <input type="file" name="dp" id="dp" class="form-control-file">
                           
                            @error('dp')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    {{-- <div class="row">
                        <label for="image" class="col-md-4 col-form-label ">Post Image</label>
                        <input type="file" name="image" id="image" class="form-control-file">
                        @error('image')
                            <strong>{{ $message }}</strong>
                        @enderror
                    </div> --}}

                    <div class="row mt-4">
                        <button type="submit" class="btn btn-primary" style="max-width: 100px">Update</button>
                    </div>

                </div>
            </div>
        </form>




    </body>

    </html>
@endsection
