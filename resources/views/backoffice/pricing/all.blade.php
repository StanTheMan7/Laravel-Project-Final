@extends('template.mainB')
@section('content')
<div class="container ">
  <h2 class="text-center mb-5">DATA pricing</h2>
{{-- Button Create --}}
@if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
@endif

<div style="display: flex; justify-content:center;">
    <a class="btn btn-info" href="{{route("pricing.create")}}">Create</a>
</div>

<table class="table">
  <thead>
      <tr>
          <th scope="col">ID</th>
          <th scope="col">package</th>
          <th scope="col">price</th>
          <th scope="col">month</th>
          <th scope="col">gift1</th>
          <th scope="col">gift2</th>
          <th scope="col">gift3</th>
          <th scope="col">gift4</th>
          <th scope="col">button</th>
          <th scope="col">Actions</th>
      </tr>
  </thead>
  <tbody>
  @foreach ($pricing as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->package}}</td>
      <td>{{$item->price}}</td>
      <td>{{$item->month}}</td>
      <td>{{$item->gift1}}</td>
      <td>{{$item->gift2}}</td>
      <td>{{$item->gift3}}</td>
      <td>{{$item->gift4}}</td>
      <td>{{$item->button}}</td>
    <td><a class="btn btn-warning" href="{{route('pricing.edit', $item->id)}}">Edit pricing</a> </td> 
    <td><a href="{{route("pricing.show", $item->id)}}" class="btn btn-warning">Show</a></td>
    <td>
        <form action="{{route('pricing.destroy', $item->id)}}" method="post">
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