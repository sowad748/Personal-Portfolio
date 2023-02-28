@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 ">
                <img src="/dp/{{ $user->profile->dp ?? '' }}" class="rounded-circle" style="height:150px; width:150px;">
            </div>
            <div class="col-9">
                @can('update', $user->profile)
                    <div class="d-flex justify-content-between align-items-baseline mb-1">
                        <h3>{{ $user->profile->username ?? '' }}</h3>
                        <a class="btn btn-info" href="/p/create">Add new Post</a>
                    </div>
                    @endcan
                    <div>
                        <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                    </div>
                    <div class="d-flex">
                        <div><strong class="pe-2">{{ $user->posts->count() }}</strong>Posts</div>

                        <div><strong class="pe-2 ps-2">{{$user->profile->followers->count()}}</strong>Followers</div>
                        <div><strong class="pe-2 ps-2">{{$user->following->count()}}</strong>Followings</div>
                    </div>
                    <div class="mt-3"><b>{{ $user->profile->title ?? '' }}</b></div>
                    <div>{{ $user->profile->description ?? '' }} </div>
                    @can('update', $user->profile)


                        <div class="pt-2">
                            <a href="/profile/{{ $user->id }}/edit" class="btn btn-info">Edit Profile</a>
                        </div>
                    @endcan
                </div>


            </div>
            <div class="mt-5 ms-4">

                <div class="row d-flex">

                    @foreach ($user->posts as $posts)
                        <div class="col-3 ms-5 mb-3">
                            <a href="/p/{{ $posts->id }}">
                                <img src="/upload/{{ $posts->image }}" style="height: 350px; width: 300px">
                                {{-- <div>{{$posts->caption}}</div> --}}
                            </a>

                        </div>
                    @endforeach

                </div>





            </div>
        </div>
    @endsection
