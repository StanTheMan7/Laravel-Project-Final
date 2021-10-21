@extends('template.mainB')

@section('content')

<form enctype="multipart/form-data" action="{{route("footer.update", $footer->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
        <label for="">Text :</label>
        <input type="text" name="text" value="{{$footer->text}}">
    <br>
        <label for="">Icon1:</label>
        <input type="text" name="icon1" value="{{$footer->icon1}}">
    <br>
        <label for="">Icon2 :</label>
        <input type="text" name="icon2" value="{{$footer->icon2}}">
    <br>
        <label for="">Icon3:</label>
        <input type="text" name="icon3" value="{{$footer->icon3}}">
    <br>
        <label for="">Email:</label>
        <input type="text" name="email" value="{{$footer->email}}">
    <br>
        <label for="">Phone:</label>
        <input type="text" name="phone" value="{{$footer->phone}}">
    <br>
        <label for="">Address:</label>
        <input type="text" name="address" value="{{$footer->address}}">
    <br>
        <label for="">Copyright:</label>
        <input type="text" name="copyright" value="{{$footer->copyright}}">
    <br>
    </div>
    </div>
    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>

@endsection