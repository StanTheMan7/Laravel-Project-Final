@extends('template.mainB')
@section('content')

@if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
@endif

<div class="container ">
  <h2 class="text-center mb-5">DATA Classes</h2>
  <div style="display: flex; justify-content:center;">
    <a class="btn btn-info" href="{{route("classe.create")}}">Create</a>
</div>
<table class="table">
  <thead>
      <tr>
          <th scope="col">ID</th>
          <th scope="col">Url</th>
          <th scope="col">Title</th>
          <th scope="col">Name</th>
          <th scope="col">Time</th>
          <th scope="col">Tags</th>
          <th scope="col">Category</th>
          <th scope="col">Trainer</th>
          <th scope="col">Status</th>
          <th scope="col">Actions</th>
      </tr>
  </thead>
  <tbody>
  @foreach ($classe as $item )
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>  <img style="width: 250px" src="{{ asset('img/class/' . $item->url) }}" alt=""></td>
      <td>{{$item->title}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->time}}</td>
      <td>
        @foreach ($item->tags as $tag)
        #{{$tag->name}}
        <br>
        @endforeach
      </td>

      <td>{{$item->categories->name}}</td>
      <td>{{$item->trainer->name}}</td>
      <td>{{$item->status->priority}}</td>

      
      
        <td><a class="btn btn-warning" href="{{route('classe.edit', $item->id)}}">Edit classe</a> </td> 
        <td><a href="{{route("classe.show", $item->id)}}" class="btn btn-warning">Show</a></td>
        <td>
          <form action="{{route('classe.destroy', $item->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td> 
      </tr>
    @endforeach
  </tbody>
</table>

</div>
@endsection