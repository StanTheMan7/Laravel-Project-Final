@extends('template.mainB')
@section('content')
<div class="container ">
  <h2 class="text-center mb-5">DATA Footer</h2>

<table class="table">
  <thead>
      <tr>
          <th scope="col">ID</th>
          <th scope="col">Text</th>
          <th scope="col">Icon1</th>
          <th scope="col">Icon2</th>
          <th scope="col">Icon3</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Address</th>
          <th scope="col">Copyright</th>
          <th scope="col">Title</th>
          <th scope="col">Icon4</th>
          <th scope="col">Text 2</th>
          <th scope="col">Link1</th>
          <th scope="col">Icon 5</th>
          <th scope="col">Text 3</th>
          <th scope="col">Link 2</th>
          <th scope="col">Actions</th>
      </tr>
  </thead>
  <tbody>
  @foreach ($footer as $item )
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->text}}</td>
      <td>{{$item->icon1}}</td>
      <td>{{$item->icon2}}</td>
      <td>{{$item->icon3}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->phone}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->copyright}}</td>

      @foreach ($tweet as $item)
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->title}}</td>
        <td>{{$item->icon4}}</td>
        <td>{{$item->text2}}</td>
        <td>{{$item->link1}}</td>
        <td>{{$item->icon5}}</td>
        <td>{{$item->text3}}</td>
        <td>{{$item->link2}}</td>
        <td><a class="btn btn-warning" href="{{route('tweet.edit', $item->id)}}">Edit tweet</a> </td> 
        <td><a href="{{route("tweet.show", $item->id)}}" class="btn btn-warning">Show</a></td>
        <td>
          <form action="{{route('tweet.destroy', $item->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td> 
        @endforeach
        <td><a class="btn btn-warning" href="{{route('footer.edit', $item->id)}}">Edit footer</a> </td> 
        <td><a href="{{route("footer.show", $item->id)}}" class="btn btn-warning">Show</a></td>
        <td>
          <form action="{{route('footer.destroy', $item->id)}}" method="post">
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