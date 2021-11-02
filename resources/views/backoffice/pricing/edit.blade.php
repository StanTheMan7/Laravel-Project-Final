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
<form enctype="multipart/form-data" action="{{route("pricing.update", $pricing->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    
    <label for="">package :</label>
    <input type="text" name="package" value="{{$pricing->package}}">
    <br>
    <label for="">price  :</label>
    <input type="text" name="price" value="{{$pricing->price}}">
    <br>
    <label for="">month  :</label>
    <input type="text" name="month" value="{{$pricing->month}}">
    <br>
    <label for="">gift1  :</label>
    <input type="text" name="gift1" value="{{$pricing->gift1}}">
    <br>
    <label for="">gift2  :</label>
    <input type="text" name="gift2" value="{{$pricing->gift2}}">
    <br>
    <label for="">gift3  :</label>
    <input type="text" name="gift3" value="{{$pricing->gift3}}">
    <br>
    <label for="">gift4  :</label>
    <input type="text" name="gift4" value="{{$pricing->gift4}}">
    <br>
    <label for="">button  :</label>
    <input type="text" name="button" value="{{$pricing->button}}">
    <br>
    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>

@endsection