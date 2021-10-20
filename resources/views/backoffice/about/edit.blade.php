@extends('template.mainB')

@section('content')

<form enctype="multipart/form-data" action="{{route("about.update", $about->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Title :</label>
    <input type="text" name="title" value="{{$about->title}}">
    <br>
    <label for="">Description1 :</label>
    <input type="text" name="description1" value="{{$about->description1}}">
    <br>
    <label for="">Description1 :</label>
    <input type="text" name="description2" value="{{$about->description2}}">
    <br>
    <label for="">Url of Image :</label>
    <input type="file" name="url" value="{{$about->url}}">
    <br>
    <label for=""> Video Link :</label>
    <input type="text" name="video" value="{{$about->video}}">
    <br>
    <label for="">Button :</label>
    <input type="text" name="button" value="{{$about->button}}">
    <br>
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>

@endsection