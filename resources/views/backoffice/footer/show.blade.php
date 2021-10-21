@extends('template.mainB')

@section('content')

<div class="card container d-flex">
    <div class="ml-5 p-5">
        <p><b>ID de l'élément : </b><i>{{$footer->id}}</i></p>
        <p><b>Text : </b><i>{{$footer->text}}</i></p>
        <p><b>Icon1 : </b><i>{{$footer->icon1}}</i></p>
        <p><b>icon2: </b><i>{{$footer->icon2}}</i></p>
        <p><b>icon3: </b><i>{{$footer->icon3}}</i></p>
        <p><b>email: </b><i>{{$footer->email}}</i></p>
        <p><b>phone: </b><i>{{$footer->phone}}</i></p>
        <p><b>address: </b><i>{{$footer->address}}</i></p>
        <p><b>copyright: </b><i>{{$footer->copyright}}</i></p>
        </div>
    <div class="ml-5 p-5">
        <p><b>ID de l'élément : </b><i>{{$tweet->id}}</i></p>
        <p><b>Text : </b><i>{{$tweet->title}}</i></p>
        <p><b>Icon1 : </b><i>{{$tweet->icon4}}</i></p>
        <p><b>icon2: </b><i>{{$tweet->text2}}</i></p>
        <p><b>icon3: </b><i>{{$tweet->link1}}</i></p>
        <p><b>email: </b><i>{{$tweet->icon5}}</i></p>
        <p><b>phone: </b><i>{{$tweet->text3}}</i></p>
        <p><b>address: </b><i>{{$tweet->link2}}</i></p>
    </div>
</div>

@endsection