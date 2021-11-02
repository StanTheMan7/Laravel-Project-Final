@extends('template.mainB')
@section('content')
<div class="container ">
  <h2 class="text-center mb-5">DATA Contact</h2>
@if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
@endif
<table class="table">
  <thead>
      <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">PlaceHolder Name</th>
          <th scope="col">PlaceHolder Email</th>
          <th scope="col">PlaceHolder Subject</th>
          <th scope="col">Actions</th>
      </tr>
  </thead>
  <tbody>
  @foreach ($contact as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->title}}</td>
      <td>{{$item->placeholdername}}</td>
      <td>{{$item->placeholderemail}}</td>
      <td>{{$item->placeholdersubject}}</td>
    <td><a class="btn btn-warning" href="{{route('contact.edit', $item->id)}}">Edit contact</a> </td> 
    <td><a href="{{route("contact.show", $item->id)}}" class="btn btn-warning">Show</a></td>
    <td>
        <form action="{{route('contact.destroy', $item->id)}}" method="post">
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