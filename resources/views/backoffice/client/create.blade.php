@extends('template.mainB')

@section('content')
    
<br>
<h1 style="text-align: center">Client</h1>
<br>

<div style="display: flex; justify-content: center;">
    <form action="{{route("client.store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="display:flex; flex-direction:column">

            <input type="text" name="icon" placeholder="icon" value="{{ old('icon') }}">
            <input type="text" name="text" placeholder="text" value="{{ old('text') }}">
            <input type="file" name="url" placeholder="url" value="{{ old('url') }}">
            <input type="text" name="function" placeholder="function" value="{{ old('function') }}">

            <button class="btn btn-success" type="submit">Validate</button>
        </div>
    </form>
</div>

@endsection