@extends('template.mainB')
@section('content')
<div class="container ">
  <h2 class="text-center mb-5">DATA Client</h2>
  {{-- Button Create --}}

  <div style="display: flex; justify-content:center;">
    <a class="btn btn-info" href="{{route("client.create")}}">Create</a>
</div>

<table class="table">
  <thead>
      <tr>
          <th scope="col">ID</th>
          <th scope="col">Icon</th>
          <th scope="col">Text</th>
          <th scope="col">Image signature</th>
          <th scope="col">Funtion</th>
          <th scope="col">Actions</th>
      </tr>
  </thead>
  <tbody>
  @foreach ($client as $item)

    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->icon}}</td>
      <td>{{$item->text}}</td>
      <td><img style="width: 250px" src="{{ asset('img/icon/' . $item->url) }}" alt=""></td>
      <td>{{$item->function}}</td>
    <td><a class="btn btn-warning" href="{{route('client.edit', $item->id)}}">Edit client</a> </td> 
    <td><a href="{{route("client.show", $item->id)}}" class="btn btn-warning">Show</a></td>
    <td>
        <form action="{{route('client.destroy', $item->id)}}" method="post">
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