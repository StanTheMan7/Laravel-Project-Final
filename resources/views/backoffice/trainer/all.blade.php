@extends('template.mainB')
@section('content')
<div class="container ">

@if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
@endif

  <h2 class="text-center mb-5">DATA Trainer</h2>
  {{-- Button Create --}}

  <div style="display: flex; justify-content:center;">
    <a class="btn btn-info" href="{{route("trainer.create")}}">Create</a>
</div>

<table class="table">
  <thead>
      <tr>
          <th scope="col">ID</th>
          <th scope="col">Url Image </th>
          <th scope="col">Name</th>
          <th scope="col">Icon1</th>
          <th scope="col">Icon2</th>
          <th scope="col">Icon3</th>
          <th scope="col">Icon4</th>
          <th scope="col">Link 1</th>
          <th scope="col">Link 2</th>
          <th scope="col">Link 3</th>
          <th scope="col">Link 4</th>
          <th scope="col">Actions</th>
      </tr>
  </thead>
  <tbody>
  @foreach ($trainer as $item)

    <tr>
      <th scope="row">{{$item->id}}</th>
      <td><img style="width: 250px" src="{{ asset('img/trainer/' . $item->url) }}" alt=""></td>
      <td>{{$item->name}}</td>
      <td>{{$item->icon1}}</td>
      <td>{{$item->icon2}}</td>
      <td>{{$item->icon3}}</td>
      <td>{{$item->icon4}}</td>
      <td>{{$item->link1}}</td>
      <td>{{$item->link2}}</td>
      <td>{{$item->link3}}</td>
      <td>{{$item->link4}}</td>
    <td><a class="btn btn-warning" href="{{route('trainer.edit', $item->id)}}">Edit Trainer</a> </td> 
    <td><a href="{{route("trainer.show", $item->id)}}" class="btn btn-warning">Show</a></td>
    <td>
        <form action="{{route('trainer.destroy', $item->id)}}" method="post">
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