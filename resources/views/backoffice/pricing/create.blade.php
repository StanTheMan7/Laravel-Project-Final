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
<h1 style="text-align: center">pricing</h1>
<br>

<div style="display: flex; justify-content: center;">
    <form action="{{route("pricing.store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="display:flex; flex-direction:column">

            <input type="text" name="package" placeholder="package" value="{{ old('package') }}">
            <input type="text" name="price" placeholder="price" value="{{ old('price') }}">
            <input type="text" name="month" placeholder="month" value="{{ old('month') }}">
            <input type="text" name="gift1" placeholder="gift1" value="{{ old('gift1') }}">
            <input type="text" name="gift2" placeholder="gift2" value="{{ old('gift2') }}">
            <input type="text" name="gift3" placeholder="gift3" value="{{ old('gift3') }}">
            <input type="text" name="gift4" placeholder="gift4" value="{{ old('gift4') }}">
            <input type="text" name="button" placeholder="button" value="{{ old('button') }}">
            <button class="btn btn-success" type="submit">Validate</button>
        </div>
    </form>
</div>

@endsection