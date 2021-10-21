@extends('template.mainB')

@section('content')

<form enctype="multipart/form-data" action="{{route("newsletter.update", $newsletter->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    
    <label for="">Title :</label>
    <input type="text" name="title" value="{{$newsletter->title}}">
    <br>
    <label for="">Button  :</label>
    <input type="text" name="button" value="{{$newsletter->button}}">
    <br>

    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>

@endsection