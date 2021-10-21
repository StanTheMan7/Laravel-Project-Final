@extends('template.mainB')
@section('content')
<div class="container ">
  <h2 class="text-center mb-5">DATA Role</h2>


<table class="table">
  <thead>
      <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
      </tr>
  </thead>
  <tbody>
  @foreach ($pricing as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
@endsection