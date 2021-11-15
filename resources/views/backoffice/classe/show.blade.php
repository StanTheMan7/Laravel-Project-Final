@extends('template.mainB')
@section('content')

<div class="card container ">
    <div class="ml-5 p-5">
    <p><b>ID de l'élément : </b><i>{{$classe->id}}</i></p>
    <p><b>Image : </b><i><img class="w-50" src="{{asset("img/class/" . $classe->url)}}" alt="" srcset=""></i></p>
    <p><b>Name of Classe  : </b><i>{{$classe->name}}</i></p>
    <p><b>Time : </b><i>{{$classe->time}}</i></p>
    <p><b>Date : </b><i>{{$classe->date}}</i></p>
    <p><b> Category : </b><i>{{$classe->categorie_id}}</i></p>
    <p><b>Trainer : </b><i>{{$classe->trainer_id}}</i></p>
    <p><b>Nr max: </b><i>{{$classe->nrMax}}</i></p>
    <p><b>Status: </b><i>{{$classe->status_id}}</i></p>
    <p><b>Inscriptions: </b><i>{{$classesFromDB->count()}}/{{$classe->nrMax}}</i></p>
    
    
    </div>
</div>
@endsection
