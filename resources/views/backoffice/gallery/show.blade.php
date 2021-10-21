@extends('template.mainB')

@section('content')

<div class="card container ">
    <div class="ml-5 p-5">
    <p><b>ID de l'élément : </b><i>{{$gallery->id}}</i></p>
    <p><b>Image: </b><i><img class="w-50" src="{{asset("img/portfolio/" . $gallery->url)}}" alt="" srcset=""></i></p>
    <p><b>Icon: </b><i>{{$gallery->icon}}</i></p>
    </div>
</div>

@endsection