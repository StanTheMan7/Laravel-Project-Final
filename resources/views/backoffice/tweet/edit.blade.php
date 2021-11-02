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
<form enctype="multipart/form-data" action="{{route("tweet.update", $tweet->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
        <label for="">title:</label>
        <input type="text" name="title" value="{{$tweet->title}}">
    <br>
        <label for="">icon4:</label>
        <input type="text" name="icon4" value="{{$tweet->icon4}}">
    <br>
        <label for="">text2:</label>
        <input type="text" name="text2" value="{{$tweet->text2}}">
    <br>
        <label for="">link1:</label>
        <input type="text" name="link1" value="{{$tweet->link1}}">
    <br>
        <label for="">icon5:</label>
        <input type="text" name="icon5" value="{{$tweet->icon5}}">
    <br>
        <label for="">text3:</label>
        <input type="text" name="text3" value="{{$tweet->text3}}">
    <br>
        <label for="">link2:</label>
        <input type="text" name="link2" value="{{$tweet->link2}}">
    <br>
    <div style="display: flex; justify-content:center;">
        <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>
</div>
</div>
@endsection
