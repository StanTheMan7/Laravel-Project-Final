@extends('template.mainB')

@section('content')

<div class="card container ">
    <div class="ml-5 p-5">
    <p><b>ID de l'élément : </b><i>{{$contact->id}}</i></p>
    <p><b>Title : </b><i>{{$contact->title}}</i></p>
    <p><b>PlaceHolder Name : </b><i>{{$contact->placeholdername}}</i></p>
    <p><b>PlaceHolder Email: </b><i>{{$contact->placeholderemail}}</i></p>
    <p><b>PlaceHolder Subject: </b><i>{{$contact->placeholdersubject}}</i></p>
    </div>
</div>

@endsection