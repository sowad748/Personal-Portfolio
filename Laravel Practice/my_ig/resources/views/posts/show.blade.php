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
        <div class="container pt-5">
            <div class="card">
                <div class="row">
                    <div class="col-8">
                        <img src="/upload/{{ $post->image }}" class="w-100">
                    </div>
                    <div class="col-4">
                        <div class="d-flex align-items-center">
                            <a href="/profile/{{$post->user->id}}"><img src="/dp/{{ $post->user->profile->dp }}" class="rounded-circle" style="height:35px;"></a>
                            <div class="font-weight-bold"><a class="text-dark text-decoration-none" href="/profile/{{$post->user->id}}">{{ $post->user->profile->username }}</a></div>
                        </div>
                        <hr>
                        <p><span class="font-weight-bold me-2"><a class="text-dark text-decoration-none" href="/profile/{{$post->user->id}}">{{ $post->user->profile->username }}</a></span>{{ $post->caption }}</p>
                    </div>

                </div>
            </div>



        </div>
    </body>

    </html>
@endsection
