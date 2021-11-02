@extends('template.mainB')

@section('content')

    @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
    @endif
<form enctype="multipart/form-data" action="{{route("background.update", $background->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Title :</label>
    <input type="text" name="title" value="{{$background->title}}">
    <br>
    <label for="">Big Title:</label>
    <input type="text" name="bigTitle" value="{{$background->bigTitle}}">
    <br>
    <label for="">Description :</label>
    <input type="text" name="description" value="{{$background->description}}">
    <br>
    <label for="">Url of Image :</label>
    <input type="file" name="url" value="{{$background->url}}">
    <br>
    <label for="">Button :</label>
    <input type="text" name="button" value="{{$background->button}}">
    <br>
    <label for="">principal :</label>
    <input type="checkbox" name="principal" value="true" {{$background->principal == true ? 'checked': null}}>
    <br>
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>

@endsection