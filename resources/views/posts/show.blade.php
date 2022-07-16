@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
    <div class="col-8">
         <img src='$post -> user -> profile -> profileImage()' class="w-100">
    </div>
    <div class="col-4">
        <div>
            <div class="d-flex align-items-center pb-2 pt-5">
                <img src="/storage/{{$post->user->profile->image}}" class="w-25 rounded-circle">
                 <h3 class="px-4"><a href="/profile/{{$post -> user -> id}}" class="text-decoration-none"><strong class="text-dark">{{ $post->user->username}}</strong></a></h3>
            </div>
            
            <hr>
            <a href="#">Follow</a>
            <p>{{ $post -> caption}}</p>
        </div>
    </div>
   </div>
   
</div>
@endsection
