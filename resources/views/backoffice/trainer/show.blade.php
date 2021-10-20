@extends('template.mainB')

@section('content')

<div class="card container ">
    <div class="ml-5 p-5">
    <p><b>ID de l'élément : </b><i>{{$trainer->id}}</i></p>
    <p><b>Image : </b><i><img class="w-50" src="{{asset("img/trainer/" . $trainer->url)}}" alt="" srcset=""></i></p>
    <p><b>Name : </b><i>{{$trainer->name}}</i></p>
    <p><b>Icon 1 : </b><i>{{$trainer->icon1}}</i></p>
    <p><b>Icon 2 : </b><i>{{$trainer->icon2}}</i></p>
    <p><b>Icon 3 : </b><i>{{$trainer->icon3}}</i></p>
    <p><b>Icon 4 : </b><i>{{$trainer->icon4}}</i></p>
    <p><b>Link 1 : </b><i>{{$trainer->link1}}</i></p>
    <p><b>Link 2: </b><i>{{$trainer->link2}}</i></p>
    <p><b>Link 3: </b><i>{{$trainer->link3}}</i></p>
    <p><b>Link 4: </b><i>{{$trainer->link4}}</i></p>
    </div>
</div>



@endsection