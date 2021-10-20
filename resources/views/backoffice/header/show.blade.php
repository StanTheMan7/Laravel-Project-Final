@extends('template.mainB')

@section('content')

<div class="card container ">
    <div class="ml-5 p-5">
        <p><b>ID de l'élément : </b><i>{{$header->id}}</i></p>
        <p><b>Logo : </b><i><img class="w-50" src="{{asset("img/logo/" . $header->url)}}" alt="" srcset=""></i></p>
        <p><b>List 1  : </b><i>{{$header->li1}}</i></p>
        <p><b>Lsit 2 : </b><i>{{$header->li2}}</i></p>
        <p><b>List 3: </b><i>{{$header->li3}}</i></p>
        <p><b>List 4: </b><i>{{$header->li4}}</i></p>
        <p><b>List 5: </b><i>{{$header->li5}}</i></p>
    </div>
</div>



@endsection