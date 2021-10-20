@extends('template.mainB')

@section('content')

<form enctype="multipart/form-data" action="{{route("trainer.update", $trainer->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
        <label for="">Url of Image :</label>
        <input type="file" name="url" value="{{$trainer->url}}">
        <br>
    <label for="">Name :</label>
    <input type="text" name="name" value="{{$trainer->name}}">
    <br>
    <label for="">Icon 1:</label>
    <input type="text" name="icon1" value="{{$trainer->icon1}}">
    <br>
    <label for="">Icon 2 :</label>
    <input type="text" name="icon2" value="{{$trainer->icon2}}">
    <br>
    <label for="">Icon 3 :</label>
    <input type="text" name="icon3" value="{{$trainer->icon3}}">
    <br>
    <label for="">Icon 4  :</label>
    <input type="text" name="icon4" value="{{$trainer->icon4}}">
    <br>
    <label for="">Link 1 :</label>
    <input type="text" name="link1" value="{{$trainer->link1}}">
    <br>
    <label for="">Link 2 :</label>
    <input type="text" name="link2" value="{{$trainer->link2}}">
    <br>
    <label for="">Link 3 :</label>
    <input type="text" name="link3" value="{{$trainer->link3}}">
    <br>
    <label for="">Link 4 :</label>
    <input type="text" name="link4" value="{{$trainer->link4}}">
    <br>
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>

@endsection