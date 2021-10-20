@extends('template.mainB')
@section('content')
<div class="container ">
  <h2 class="text-center mb-5">DATA Gallery</h2>
  {{-- Button Create --}}

  <div style="display: flex; justify-content:center;">
    <a class="btn btn-info" href="{{route("gallery.create")}}">Create</a>
</div>

<table class="table">
  <thead>
      <tr>
          <th scope="col">ID</th>
          <th scope="col">Image</th>
          <th scope="col">Icon</th>
          <th scope="col">Actions</th>
      </tr>
  </thead>
  <tbody>
  @foreach ($gallery as $item)

    <tr>
      <th scope="row">{{$item->id}}</th>
      <td><img style="width: 250px" src="{{ asset('img/portfolio/' . $item->url) }}" alt=""></td>
      <td>{{$item->icon}}</td>
    <td><a class="btn btn-warning" href="{{route('gallery.edit', $item->id)}}">Edit Gallery</a> </td> 
    <td><a href="{{route("gallery.show", $item->id)}}" class="btn btn-warning">Show</a></td>
    <td>
        <form action="{{route('gallery.destroy', $item->id)}}" method="post">
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