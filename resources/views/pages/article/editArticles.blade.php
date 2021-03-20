@extends('template.main')
@section('content')
    <section class="container p-5">
        <div class="container">
            @if ($errors->any()) 
            <div class="alert alert-danger"> 
                <ul> @foreach ($errors->all() as $error) 
                    <li>{{ $error }}</li> @endforeach 
                </ul> 
            </div> 
            @endif
        </div>

        <form action="/article/{{$article->id}}" method="POST" class="border border-primary rounded p-5">
            @csrf
            @method("PATCH")

            <label for="">Titre : </label>
            <input type="text" name="title" value="{{old("title")? old("title") : $article->title}}">

            <label for="">Text : </label>
            <input type="text" name="text" value="{{old("text")? old("text") : $article->text}}">

            <button type="submit" class="btn btn-warning">Ajouter</button>
        </form>
    </section>
    
    @endsection