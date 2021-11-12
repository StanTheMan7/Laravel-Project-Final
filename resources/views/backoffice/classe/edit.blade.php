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

<form enctype="multipart/form-data" action="{{route("classe.update", $classe->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content: center;">
    <div style="display:flex; flex-direction:column">
    <label for="">Url of Image :</label>
    <input type="file" name="url" value="{{$classe->url}}">
    <br>
    <label for="">Title :</label>
    <input type="text" name="title" value="{{$classe->title}}">
    <br>
    <label for="">Classe Name :</label>
    <input type="text" name="name" value="{{$classe->name}}">
    <br>
    <label for="">Time :</label>
    <input type="text" name="time" value="{{$classe->time}}">
    <br>
    <label for="">Date :</label>
    <input type="date" name="date" value="{{$classe->date}}">
    <br>
    <label for="">category :</label>
    <input type="text" name="category_id" value="{{$classe->category_id}}">
    <br>
    <label for="">Trainer of classe :</label>
    <input type="text" name="trainer_id" value="{{$classe->trainer_id}}">
    <br>
    <label for="">Max Users in classe :</label>
    <input type="text" name="nrMax" value="{{$classe->nrMax}}">
    <br>
    <label for="">Status of classe:</label>
    <input type="text" name="status_id" value="{{$classe->status_id}}">
    <br>
</div>
    </div>

    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>
