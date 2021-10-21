@extends('template.mainB')

@section('content')

<div class="card container ">
    <div class="ml-5 p-5">
    <p><b>ID de l'élément : </b><i>{{$client->id}}</i></p>
    <p><b>Icon  : </b><i>{{$client->icon}}</i></p>
    <p><b>Text : </b><i>{{$client->text}}</i></p>
    <p><b>Image Signiature : </b><i><img class="w-50" src="{{asset("img/icon/" . $client->url)}}" alt="" srcset=""></i></p>
    <p><b>Funtion: </b><i>{{$client->function}}</i></p>
    </div>
</div>

@endsection