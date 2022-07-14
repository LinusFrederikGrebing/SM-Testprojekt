@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row pt-3 pb-5 align-items-center">
        <div class="col-3">
            <img class="w-100 h-auto rounded-circle my-auto" src="https://kartolomio.de/wp-content/uploads/2021/08/GOL-EG-12-1837.jpg" alt="">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between">
                <h1>{{ $user -> username }}</h1>
                <button class="px-4 border-0 align-items-baseline">Neuen Post hinzufügen</button>
            </div>
            <div class="d-flex">
                <div class="px-2"><strong>155</strong> posts</div>
                <div class="px-2"><strong>255</strong> followers</div>
                <div class="px-2"><strong>355</strong> following</div>
            </div>
            <div class="py-4">
                <strong>{{ $user->profile->title}}</strong>
                <p>{{$user->profile->description}}</p>
                <p>{{$user->profile->url}}</p>
            </div>

           
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img class="w-100 h-100" src="https://wallpaperaccess.com/full/2029165.jpg" alt="">
        </div>
        <div class="col-4">
        <img class="w-100 h-100" src="https://wallpaperaccess.com/full/2029165.jpg" alt="">
        </div>
        <div class="col-4">
        <img class="w-100 h-100" src="https://wallpaperaccess.com/full/2029165.jpg" alt="">
        </div>
    </div>
</div>
@endsection