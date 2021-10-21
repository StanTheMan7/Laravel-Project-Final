@extends('template.mainB')

@section('content')

<div class="card container d-flex justify-content-center align-items-center ">
    <div class="ml-5 p-5">
        <p><b>ID de l'élément : </b><i>{{$title->id}}</i></p>
        <p><b>title : </b><i>{{$title->title}}</i></p>
        <p><b>description : </b><i>{{$title->description}}</i></p>
    </div>
</div>



@endsection