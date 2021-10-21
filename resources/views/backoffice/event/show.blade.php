@extends('template.mainB')

@section('content')

<div class="card container ">
    <div class="ml-5 p-5">
    <p><b>ID de l'élément : </b><i>{{$event->id}}</i></p>
    <p><b>Title : </b><i>{{$event->title}}</i></p>
    <p><b>Description : </b><i>{{$event->description}}</i></p>
    <p><b>Date: </b><i>{{$event->date}}</i></p>
    <p><b>Time: </b><i>{{$event->time}}</i></p>
    </div>
</div>

@endsection