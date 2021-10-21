@extends('template.mainB')

@section('content')

<form enctype="multipart/form-data" action="{{route("title.update", $title->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    
    <label for="">title :</label>
    <input type="text" name="title" value="{{$title->title}}">
    <br>
    <label for="">description  :</label>
    <input type="text" name="description" value="{{$title->description}}">
    <br>
    </div>
    </div>
    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>