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
<br>
<h1 style="text-align: center">Background</h1>
<br>

<div style="display: flex; justify-content: center;">
    <form action="{{route("background.store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="display:flex; flex-direction:column">

            <input type="text" name="title" placeholder="title" value="{{ old('title') }}">
            <input type="text" name="bigTitle" placeholder="bigTitle" value="{{ old('bigTitle') }}">
            <input type="text" name="description" placeholder="description" value="{{ old('description') }}">
            <input type="file" name="url" placeholder="url" value="{{ old('url') }}">
            <input type="text" name="button" placeholder="button" value="{{ old('button') }}">

            <button class="btn btn-success" type="submit">Validate</button>
        </div>
    </form>
</div>

@endsection