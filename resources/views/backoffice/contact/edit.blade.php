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
<form enctype="multipart/form-data" action="{{route("contact.update", $contact->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Title :</label>
    <input type="text" name="title" value="{{$contact->title}}">
    <br>
    <label for="">PlaceHolder Name:</label>
    <input type="text" name="placeholdername" value="{{$contact->placeholdername}}">
    <br>
    <label for="">PlaceHolder Email :</label>
    <input type="text" name="placeholderemail" value="{{$contact->placeholderemail}}">
    <br>
    <label for="">PlaceHolder Subject:</label>
    <input type="text" name="placeholdersubject" value="{{$contact->placeholdersubject}}">
    <br>

    </div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>

@endsection