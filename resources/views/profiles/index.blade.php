@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row pt-3 pb-5 align-items-center">
        <div class="col-3">
            <img class="w-100 h-auto rounded-circle my-auto" src="{{ $user -> profile -> profileImage()}}" alt="">
        </div>
        <div class="col-7 pt-5 px-5">
            <div class="d-flex align-items-center pb-2">
                <h1>{{ $user -> username }}</h1>

                <follow-button user-id="{{ $user -> id}}" follows="{{ $follows }}"></follow-button>
            </div>
            <div class="d-flex">
                <div class="px-2"><strong>{{ $user->posts->count()}}</strong> posts</div>
                <div class="px-2"><strong>{{ $user->profile->followers->count()}}</strong> followers</div>
                <div class="px-2"><strong>{{ $user->following->count()}}</strong> following</div>
            </div>
            <div class="py-4">
                <strong>{{ $user->profile->title}}</strong>
                <p>{{$user->profile->description}}</p>
                <p>{{$user->profile->url}}</p>
            </div>

           
        </div>
    @can('update', $user->profile)
        <div class="col-2">
        <a href="/post/create"><button class="px-4 py-2 border-0"><strong class="display-5">+</strong></button></a>
        </div>
    </div>
    @endcan
    @can('update', $user->profile)
         <div class="row pb-5">
            <div class="col-12">
                         <a href="/profile/{{ $user->id }}/edit" class=""><button class="px-4 py-2 border-0 w-100 ">Edit profile</button></a>
            </div>
           
        </div>  
     @endcan
    <div class="row">
        
       @foreach( $user->posts as $post )

       <div class="col-4 pb-4"> 
            <a href="/post/{{ $post->id }}">
                <img src= "/storage/{{ $post->image }}" class="w-100">
             </a>
        </div>
       @endforeach
    </div>
</div>
@endsection
