@extends('template.mainB')

@section('content')

<form enctype="multipart/form-data" action="{{route("event.update", $event->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Icon :</label>
    <input type="text" name="title" value="{{$event->title}}">
    <br>
    <label for="">Description:</label>
    <input type="text" name="description" value="{{$event->description}}">
    <br>
    <label for="">Date :</label>
    <input type="text" name="date" value="{{$event->date}}">
    <br>
    <label for="">Time:</label>
    <input type="text" name="time" value="{{$event->time}}">
    <br>
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>

@endsection