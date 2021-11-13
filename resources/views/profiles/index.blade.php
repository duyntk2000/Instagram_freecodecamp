@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" alt="" class="rounded-circle" style="width: 100px;">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-center">
                <h1 style="margin: 0px;">{{$user->username}}</h1>
                <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                @can('update',$user->profile)
                    <a href="/p/create">Add new post.</a>
                @endcan
            </div>
            @can('update',$user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-4"><strong>{{ $user->profile->followers->count() }}</strong> followers</div>
                <div class="pr-4"><strong>{{ $user->following->count() }}</strong> following</div>
            </div>
            <div class="pt-4"><strong>{{$user->profile->title}}</strong></div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}"><img src="/storage/{{ $post->image }}" class="w-100"></a>
        </div>
        @endforeach
    </div>
</div>
@endsection
