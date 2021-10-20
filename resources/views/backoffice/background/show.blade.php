@extends('template.mainB')

@section('content')

<div class="card container ">
    <div class="ml-5 p-5">
    <p><b>ID de l'élément : </b><i>{{$background->id}}</i></p>
    <p><b>Title  : </b><i>{{$background->title}}</i></p>
    <p><b>Big Title : </b><i>{{$background->bigTitle}}</i></p>
    <p><b>Description 2 : </b><i>{{$background->description}}</i></p>
    <p><b>Image : </b><i><img class="w-50" src="{{asset("img/slider/" . $background->url)}}" alt="" srcset=""></i></p>
    <p><b>Button: </b><i>{{$background->button}}</i></p>
    </div>
</div>



@endsection