@extends('template.mainB')

@section('content')

<div class="card container d-flex justify-content-center align-items-center ">
    <div class="ml-5 p-5">
        <p><b>ID de l'élément : </b><i>{{$pricing->id}}</i></p>
        <p><b>Package : </b><i>{{$pricing->package}}</i></p>
        <p><b>Price : </b><i>{{$pricing->price}}</i></p>
        <p><b>Month: </b><i>{{$pricing->month}}</i></p>
        <p><b>Gift1: </b><i>{{$pricing->gift1}}</i></p>
        <p><b>Gift 2: </b><i>{{$pricing->gift2}}</i></p>
        <p><b>Gift 3: </b><i>{{$pricing->gift3}}</i></p>
        <p><b>Gift 4 : </b><i>{{$pricing->gift4}}</i></p>
        <p><b>Button : </b><i>{{$pricing->button}}</i></p>

    </div>
</div>



@endsection