@extends('layouts.main');



@section('page-content')
    @foreach($comics as $comic)
        <div>
            <img src="{{$comic->cover}}" alt="{{$comic->title}}">
        </div>
        
        <h3>{{$comic->title}}</h3>
        <a href="{{route("comics.show", $comic->id)}}" class="">Scopri di piu</a>
    @endforeach
@endsection
    