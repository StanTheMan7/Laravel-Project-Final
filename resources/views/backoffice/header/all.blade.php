@extends('template.mainB')
@section('content')
<div class="container ">
  <h2 class="text-center mb-5">DATA Header</h2>
{{-- Button Create --}}



<table class="table">
  <thead>
      <tr>
          <th scope="col">ID</th>
          <th scope="col">Logo</th>
          <th scope="col">List 1</th>
          <th scope="col">List 2</th>
          <th scope="col">List 3</th>
          <th scope="col">List 4</th>
          <th scope="col">List 5</th>
          <th scope="col">Actions</th>
      </tr>
  </thead>
  <tbody>
  @foreach ($header as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td><img style="width: 10rem" src="{{ asset('img/logo/' . $item->logo) }}" alt=""></td>
      <td>{{$item->li1}}</td>
      <td>{{$item->li2}}</td>
      <td>{{$item->li3}}</td>
      <td>{{$item->li4}}</td>
      <td>{{$item->li5}}</td>
    <td><a class="btn btn-warning" href="{{route('header.edit', $item->id)}}">Edit Header</a> </td> 
    <td><a href="{{route("header.show", $item->id)}}" class="btn btn-warning">Show</a></td>
    <td>
        <form action="{{route('header.destroy', $item->id)}}" method="post">
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