@extends("layouts.admin")

@section("main-content")
<div class="container">
  <div class="row">
    <div class="col-12">
      <form action="{{route("genres.update", $genre->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il nome" value="{{$genre->name}}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection