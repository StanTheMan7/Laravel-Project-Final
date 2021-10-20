@extends('template.mainB')

@section('content')

<form enctype="multipart/form-data" action="{{route("gallery.update", $gallery->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Url of Image :</label>
    <input type="file" name="url" value="{{$gallery->url}}">
    <br>
    <label for="">Icon :</label>
    <input type="text" name="icon" value="{{$gallery->icon}}">
    <br>
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>

@endsection