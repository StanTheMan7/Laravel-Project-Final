@extends('template.mainB')

@section('content')
    
<br>
<h1 style="text-align: center">Trainer</h1>
<br>

<div style="display: flex; justify-content: center;">
    <form action="{{route("trainer.store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="display:flex; flex-direction:column">

            <input type="file" name="url" placeholder="url" value="{{ old('url') }}">
            <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
            <input type="text" name="icon1" placeholder="icon1" value="{{ old('icon1') }}">
            <input type="text" name="icon1" placeholder="icon2" value="{{ old('icon2') }}">
            <input type="text" name="icon1" placeholder="icon3" value="{{ old('icon3') }}">
            <input type="text" name="icon1" placeholder="icon4" value="{{ old('icon4') }}">
            <input type="text" name="icon1" placeholder="link1" value="{{ old('link1') }}">
            <input type="text" name="icon1" placeholder="link2" value="{{ old('link2') }}">
            <input type="text" name="icon1" placeholder="link3" value="{{ old('link3') }}">
            <input type="text" name="icon1" placeholder="link4" value="{{ old('link4') }}">
            <input type="text" name="description" placeholder="description" value="{{ old('description') }}">
            <input type="text" name="button" placeholder="button" value="{{ old('button') }}">

            <button class="btn btn-success" type="submit">Validate</button>
        </div>
    </form>
</div>

@endsection