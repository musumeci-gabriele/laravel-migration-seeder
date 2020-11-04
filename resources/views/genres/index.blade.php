@extends("layouts.admin")

@section("main-content")

<table class="table">
<thead class="thead-dark">
  <tr>
    <th>Id</th>
    <th>Nome</th>
    <th></th>
    <th></th>
    <th></th>
  </tr>
</thead>
<tbody>
  @foreach($genres as $genre)
  <tr>
    <td>{{$genre->id}}</td>
    <td>{{$genre->name}}</td>
    <td><a class="btn btn-outline-secondary" href="#">View</a></td>
    <td><a class="btn btn-outline-primary" href="{{route("genres.edit", $genre->id)}}">Update</a></td>
    <td>
      <form action="{{route("genres.destroy", $genre->id)}}" method="POST">
        @csrf
        @method("DELETE")
        <button class="btn btn-outline-danger" type="submit" name="button">Cancella</button>
      </form>
    </td>
  </tr>
  @endforeach
</tbody>
</table>

@endsection
