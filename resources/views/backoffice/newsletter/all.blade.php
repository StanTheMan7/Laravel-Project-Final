@extends('template.mainB')
@section('content')

@if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
@endif

<div class="container ">
  <h2 class="text-center mb-5">DATA Newsletter</h2>
{{-- Button Create --}}



<table class="table">
  <thead>
      <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">Button</th>
          <th scope="col">Actions</th>
      </tr>
  </thead>
  <tbody>
  @foreach ($newsletter as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->title}}</td>
      <td>{{$item->button}}</td>

    <td><a class="btn btn-warning" href="{{route('newsletter.edit', $item->id)}}">Edit newsletter</a> </td> 
    <td><a href="{{route("newsletter.show", $item->id)}}" class="btn btn-warning">Show</a></td>
    <td>
        <form action="{{route('newsletter.destroy', $item->id)}}" method="post">
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