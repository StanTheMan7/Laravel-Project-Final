@extends('template.mainB')
@section('content')
<div class="container ">
  <h2 class="text-center mb-5">DATA About</h2>
{{-- Button Create --}}



<table class="table">
  <thead>
      <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">Description1</th>
          <th scope="col">Description2</th>
          <th scope="col">Url</th>
          <th scope="col">Video</th>
          <th scope="col">Button</th>
          <th scope="col">Actions</th>
      </tr>
  </thead>
  <tbody>
  @foreach ($about as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->title}}</td>
      <td>{{$item->description1}}</td>
      <td>{{$item->description2}}</td>
      <td><img style="width: 250px" src="{{ asset('img/about/' . $item->url) }}" alt=""></td>
      <td>{{$item->video}}</td>
      <td>{{$item->button}}</td>
    <td><a class="btn btn-warning" href="{{route('about.edit', $item->id)}}">Edit about</a> </td> 
    <td><a href="{{route("about.show", $item->id)}}" class="btn btn-warning">Show</a></td>
    <td>
        <form action="{{route('about.destroy', $item->id)}}" method="post">
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