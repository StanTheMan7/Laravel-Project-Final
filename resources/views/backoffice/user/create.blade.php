@extends('template.mainB')

@section('content')
    
<br>
<h1 style="text-align: center">User</h1>
<br>

<div style="display: flex; justify-content: center;">
    <form action="{{route("user.store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="display:flex; flex-direction:column">
    <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
    <input type="text" name="email" placeholder="email" value="{{ old('email') }}">
    <input type="password" name="password" placeholder="password" value="{{ old('password') }}">
    <select name="role_id" >
        @foreach ($role as $item)
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>
    <br>
    <button class="btn btn-success" type="submit">Validate</button>
        </div>
    </form>
</div>


@endsection