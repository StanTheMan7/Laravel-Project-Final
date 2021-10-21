@extends('template.mainB')
@section('content')
<div class="container ">
  <h2 class="text-center mb-5">DATA User</h2>
  {{-- Button Create --}}

  <div style="display: flex; justify-content:center;">
    <a class="btn btn-info" href="{{route("user.create")}}">Create User</a>
</div>

<table class="table">
  <thead>
      <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Role_id</th>
          <th scope="col">Actions</th>
      </tr>
  </thead>
  <tbody>
  @foreach ($user as $item)

    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->password}}</td>
      <td>{{$item->role_id}}</td>
    <td><a class="btn btn-warning" href="{{route('user.edit', $item->id)}}">Edit user</a> </td> 
    <td><a href="{{route("user.show", $item->id)}}" class="btn btn-warning">Show</a></td>
    <td>
        <form action="{{route('user.destroy', $item->id)}}" method="post">
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