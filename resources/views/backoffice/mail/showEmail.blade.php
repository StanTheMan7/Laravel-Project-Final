@extends('template.mainB')

@section('content')

<div class="card container ">
    <div class="ml-5 p-5">
    <p><b>ID de l'élément : </b><i>{{$mail->id}}</i></p>
    <p><b>Name  : </b><i>{{$mail->name}}</i></p>
    <p><b>Email: </b><i>{{$mail->email}}</i></p>
    <p><b>Subject : </b><i>{{$mail->subject}}</i></p>
    </div>
</div>

@endsection