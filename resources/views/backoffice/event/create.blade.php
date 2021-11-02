@extends('template.mainB')
    @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
    @endif
@section('content')
    
<br>
<h1 style="text-align: center">Event</h1>
<br>

<div style="display: flex; justify-content: center;">
    <form action="{{route("event.store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="display:flex; flex-direction:column">

            <input type="text" name="title" placeholder="title" value="{{ old('title') }}">
            <input type="text" name="description" placeholder="description" value="{{ old('description') }}">
            <input type="text" name="date" placeholder="date" value="{{ old('date') }}">
            <input type="text" name="time" placeholder="time" value="{{ old('time') }}">
            <button class="btn btn-success" type="submit">Validate</button>
        </div>
    </form>
</div>

@endsection