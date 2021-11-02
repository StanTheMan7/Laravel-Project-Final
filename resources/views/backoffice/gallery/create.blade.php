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
<h1 style="text-align: center">Gallery</h1>
<br>

<div style="display: flex; justify-content: center;">
    <form action="{{route("gallery.store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="display:flex; flex-direction:column">

            <input type="file" name="url" placeholder="url" value="{{ old('url') }}">
            <select name="icon" >
                <option value="zmdi zmdi-zoom-in">search</option>
            </select>
            <button class="btn btn-success" type="submit">Validate</button>
        </div>
    </form>
</div>

@endsection