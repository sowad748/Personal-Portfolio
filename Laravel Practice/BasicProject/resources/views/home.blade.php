@extends('layouts.app')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

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
        @if(session('message'))
            <strong>{{session('message')}}</strong>
        @endif
        <div class="container d-flex">

            <div>

                @foreach ($post as $post)
                    <div class="card border-dark m-3">
                        <div>
                            <h5>{{ $post->description }}</h5>
                            <img src="/post/{{ $post->image }}" alt="" style="height: 300px; width:550px;">
                        </div>
                        <div class="d-flex justify-content-center">

                            <a class="text-decoration-none text-dark" href="{{ url('/update_post', $post->id) }}"><button
                                    type="submit" class="btn btn-info">Edit</button></a>

                            <a href="{{ url('/delete_post', $post->id) }}"><button
                                    onclick="return confirm('The data will be permanently deleted')" type="submit"
                                    class="btn btn-danger">Delete</button></a>
                        </div>

                    </div>
                @endforeach

            </div>

            <div class="mt-5" style="margin-left: 35%">

                <a class="text-decoration-none text-light" href="{{ url('/form') }}" href=""><button
                        class="btn btn-dark p-3">Add Post</button></a>
            </div>
        </div>
    </body>

    </html>
@endsection
