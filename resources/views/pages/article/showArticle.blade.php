@extends('template.main')
@section('content')
<div class="jumbotron">
    <h1 class="display-4">{{$article->title}}</h1>
    <p class="lead">{{$article->text}}</p>
    <hr class="my-4">
    {{-- <p>{{$article->users->name}}</p> --}}
  </div>
    
@endsection