@extends('template.mainB')
@section('content')
<div class="container ">
  <h2 class="text-center mb-5">DATA Event</h2>

  @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
  @endif
  
  <div style="display: flex; justify-content:center;">
    <a class="btn btn-info" href="{{route("event.create")}}">Create</a>
</div>
<table class="table">
  <thead>
      <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Date</th>
          <th scope="col">Time</th>
          <th scope="col">Actions</th>
      </tr>
  </thead>
  <tbody>
  @foreach ($event as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->title}}</td>
      <td>{{$item->description}}</td>
      <td>{{$item->date}}</td>
      <td>{{$item->time}}</td>
    <td><a class="btn btn-warning" href="{{route('event.edit', $item->id)}}">Edit event</a> </td> 
    <td><a href="{{route("event.show", $item->id)}}" class="btn btn-warning">Show</a></td>
    <td>
        <form action="{{route('event.destroy', $item->id)}}" method="post">
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