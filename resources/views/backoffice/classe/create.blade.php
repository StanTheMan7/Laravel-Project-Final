@extends('template.mainB')

@section('content')
    
<br>
<h1 style="text-align: center">Classe</h1>
<br>
@if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
@endif
<div style="display: flex; justify-content: center;">
    <form action="{{route("classe.store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="display:flex; flex-direction:column">

            <input type="file" name="url" placeholder="url" value="{{ old('url') }}">
            <input type="text" name="title" placeholder="title" value="{{ old('title') }}">
            <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
            <input type="date" name="date" placeholder="date" value="{{ old('date') }}">
            <label class="my-3 fw-bold" for="time">Time: </label>
            <select  class="selectpicker" name="time" >
                    <option>8 AM - 12 PM</option>
                    <option>12 PM - 3 PM</option>
                    <option>3 PM - 6 PM</option>
                    <option>6 PM - 8 PM</option>
            </select>
            <br>

            <div class="container">  
            
                         <label class="my-3 fw-bold" for="tag">Tag: </label>
                        <select id="mon-select" class="selectpicker" name="tag_id[]" multiple data-live-search="true">
                            @foreach ($tags as $tag)
                                <option value={{$tag->id}}> {{$tag->name}}</option>
                            @endforeach
                        </select>
                        <br>
                        <label class="my-3 fw-bold" for="categories">Category: </label>
                        <select  name="category_id[]">
                            @foreach ($categories as $category)
                                <option value={{$category->id}}> {{$category->name}}</option>
                            @endforeach
                        </select> 
                        <br>
                        <label class="my-3 fw-bold" for="trainers">Trainers: </label>
                         <select  name="trainer_id[]">
                            @foreach ($trainers as $trainer)
                                <option value={{$trainer->id}}> {{$trainer->name}}</option>
                            @endforeach
                        </select>
                        <br>
                        <select name="status_id" id="">
                            @foreach ($status as $item)
                                <option value="{{ $item->id }}">{{ $item->priority}}</option>
                            @endforeach
                        </select>
                        <br>
                    	
                
                <button class="btn btn-success" type="submit">Validate</button>
            </div>
        </div>
    </form>
</div>

@endsection