@extends('template.mainB')

@section('content')

<form enctype="multipart/form-data" action="{{route("header.update", $header->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Logo :</label>
    <input type="file" name="logo" value="{{$header->logo}}">
    <br>
    <label for="">List 1 :</label>
    <input type="text" name="li1" value="{{$header->li1}}">
    <br>
    <label for="">List 2 :</label>
    <input type="text" name="li2" value="{{$header->li2}}">
    <br>
    <label for="">List 3:</label>
    <input type="text" name="li3" value="{{$header->li3}}">
    <br>
    <label for="">List 4 :</label>
    <input type="text" name="li4" value="{{$header->li4}}">
    <br>
    <label for="">List 5:</label>
    <input type="text" name="li5" value="{{$header->li5}}">
    <br>
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>

@endsection