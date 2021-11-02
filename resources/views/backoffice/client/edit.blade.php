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
<form enctype="multipart/form-data" action="{{route("client.update", $client->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Icon :</label>
    <input type="text" name="title" value="{{$client->icon}}">
    <br>
    <label for="">Text:</label>
    <input type="text" name="text" value="{{$client->text}}">
    <br>
    <label for="">Image :</label>
    <input type="file" name="url" value="{{$client->url}}">
    <br>
    <label for="">Function:</label>
    <input type="text" name="function" value="{{$client->function}}">
    <br>
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>

@endsection