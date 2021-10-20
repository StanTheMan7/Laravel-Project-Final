@extends('template.mainB')
@section('content')
<div class="container ">
  <h2 class="text-center mb-5">DATA background</h2>
  {{-- Button Create --}}

  <div style="display: flex; justify-content:center;">
    <a class="btn btn-info" href="{{route("background.create")}}">Create</a>
</div>

<table class="table">
  <thead>
      <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">bigTitle</th>
          <th scope="col">Description</th>
          <th scope="col">Url</th>
          <th scope="col">Button</th>
          <th scope="col">Actions</th>
      </tr>
  </thead>
  <tbody>
  @foreach ($background as $item)

    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->title}}</td>
      <td>{{$item->bigTitle}}</td>
      <td>{{$item->description}}</td>
      <td><img style="width: 250px" src="{{ asset('img/slider/' . $item->url) }}" alt=""></td>
      <td>{{$item->button}}</td>
    <td><a class="btn btn-warning" href="{{route('background.edit', $item->id)}}">Edit Background</a> </td> 
    <td><a href="{{route("background.show", $item->id)}}" class="btn btn-warning">Show</a></td>
    <td>
        <form action="{{route('background.destroy', $item->id)}}" method="post">
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