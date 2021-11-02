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
<h1 style="text-align: center">Trainer</h1>
<br>

<div style="display: flex; justify-content: center;">
    <form action="{{route("trainer.store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="display:flex; flex-direction:column">

            <input type="file" name="url" placeholder="url" value="{{ old('url') }}">
            <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
            <select name="icon1">
                <option value="fa fa-facebook">Icon1 Facebook</option>
                <option value="fa fa-twitter">Icon1 Twitter</option>
                <option value="fa fa-dribbble">Icon1 Dribble</option>
                <option value="fa fa-pinterest">Icon1 Printerest</option>
            </select>
            <select name="icon2">
                <option value="fa fa-facebook">Icon2 Facebook</option>
                <option value="fa fa-twitter">Icon2 Twitter</option>
                <option value="fa fa-dribbble">Icon2 Dribble</option>
                <option value="fa fa-pinterest">Icon2 Printerest</option>
            </select>
            <select name="icon3">
                <option value="fa fa-facebook">Icon3 Facebook</option>
                <option value="fa fa-twitter">Icon3 Twitter</option>
                <option value="fa fa-dribbble">Icon3 Dribble</option>
                <option value="fa fa-pinterest">Icon3 Printerest</option>
            </select>
            <select name="icon4">
                <option value="fa fa-facebook">Icon4 Facebook</option>
                <option value="fa fa-twitter">Icon4 Twitter</option>
                <option value="fa fa-dribbble">Icon4 Dribble</option>
                <option value="fa fa-pinterest">Icon4 Printerest</option>
            </select>
            <select name="link1">
                <option value="https://www.facebook.com/">Link1 Facebook</option>
                <option value="https://twitter.com/'">Link1 Twitter</option>
                <option value="https://dribbble.com/">Link1 Dribble</option>
                <option value="https://www.pinterest.com/">Link1 Printerest</option>
            </select>
            <select name="link2">
                <option value="https://www.facebook.com/">Link2 Facebook</option>
                <option value="https://twitter.com/'">Link2 Twitter</option>
                <option value="https://dribbble.com/">Link2 Dribble</option>
                <option value="https://www.pinterest.com/">Link2 Printerest</option>
            </select>
            <select name="link3">
                <option value="https://www.facebook.com/">Link3 Facebook</option>
                <option value="https://twitter.com/'">Link3 Twitter</option>
                <option value="https://dribbble.com/">Link3 Dribble</option>
                <option value="https://www.pinterest.com/">Link3 Printerest</option>
            </select>
            <select name="link4">
                <option value="https://www.facebook.com/">Link4 Facebook</option>
                <option value="https://twitter.com/'">Link4 Twitter</option>
                <option value="https://dribbble.com/">Link4 Dribble</option>
                <option value="https://www.pinterest.com/">Link4 Printerest</option>
            </select>
            
            <input type="text" name="button" placeholder="button" value="{{ old('button') }}">

            <button class="btn btn-success" type="submit">Validate</button>
        </div>
    </form>
</div>

@endsection