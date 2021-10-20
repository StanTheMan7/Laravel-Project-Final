@extends('template.mainB')

@section('content')

<div class="card container ">
    <div class="ml-5 p-5">
    <p><b>ID de l'élément : </b><i>{{$about->id}}</i></p>
    <p><b>Title  : </b><i>{{$about->title}}</i></p>
    <p><b>Description 1 : </b><i>{{$about->description1}}</i></p>
    <p><b>Description 2 : </b><i>{{$about->description2}}</i></p>
    <p><b>Image : </b><i><img class="w-50" src="{{asset("img/about/" . $about->url)}}" alt="" srcset=""></i></p>
    <p><b>Video : </b><i>{{$about->video}}</i></p>
    <p><b>Button: </b><i>{{$about->button}}</i></p>
    </div>
</div>



@endsection