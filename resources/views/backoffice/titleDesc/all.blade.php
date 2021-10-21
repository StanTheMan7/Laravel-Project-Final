@extends('template.mainB')
@section('content')
<div class="container ">
  <h2 class="text-center mb-5">DATA Title </h2>
{{-- Button Create --}}



<table class="table">
  <thead>
      <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Actions</th>
          
      </tr>
  </thead>
  <tbody>
  @foreach ($titleDesc as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->title}}</td>
      <td>{{$item->description}}</td>
        <td><a class="btn btn-warning" href="{{route('title.edit', $item->id)}}">Edit title</a> </td> 
        <td><a href="{{route("title.show", $item->id)}}" class="btn btn-warning">Show</a></td>
    <td>
        <form action="{{route('title.destroy', $item->id)}}" method="post">
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