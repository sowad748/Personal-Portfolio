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
        <div class="container text-center mt-5 rounded p-5 w-50" style="background-color: rgb(231, 207, 207)">
            <h4>Add post here</h4>
            <div class="container-fluid align-item-center">
                <form action="{{url('upload_post')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-3">
                        <label class="p-2" for="description"><b>Description</b></label>
                        <input  type="text" name="description">
                    </div>

                    <div class="mt-3" >
                        <label class="p-2"  for="image"><b>Upload an image</b></label>
                        <input type="file" name="image">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success mt-5">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </body>

    </html>
@endsection
