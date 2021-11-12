@extends('template.main')
@section('content')
    
<div style="justify-content: center; display:flex; flex-direction:column; align-items:center; padding-top:1%;">
    <h1 style="background-color: #0e816a; border-radius: 25px; height: 3rem width: 100%">Voilà le mail du client nommé: <b><u>{{$mail->name}}</b></u>  </h1>
        <p style="background-color:#0e816a">Email : <i>{{$mail->email}}</i></p>
        <div style="padding-top:5%; justify-content: center; display:flex; flex-direction:column; align-items:center;">
            <span style="text-align: center">Message du client :</span>
            <div style="border:solid #0e816a 5px; border-radius: 20px; padding:3%">
                <span>{{$mail->subject}}</span>
            </div> 
        </div>

</div>
@endsection

