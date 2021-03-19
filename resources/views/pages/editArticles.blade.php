@extends('template.main')
@section('content')
    <section class="container">
        <form action="/article/{{$edit->id}}" method="POST">
            @csrf
            @method("PATCH")

            <label for="">Titre : </label>
            <input type="text" name="title" value={{old("title")? old("title") : $edit->title}}>

            <label for="">Text : </label>
            <input type="text" name="text" value={{old("text")? old("text") : $edit->text}}>

            <button type="submit" class="btn btn-warning">Ajouter</button>
        </form>
    </section>
    
    @endsection