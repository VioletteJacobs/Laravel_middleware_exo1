@extends('template.main')
@section('content')
    <section class="container">
        <form action="/article" method="POST">
            @csrf
            <label for="">Titre : </label>
            <input type="text" name="title" value={{old("title")}}>
            <label for="">Text : </label>
            <input type="text" name="text" value={{old("text")}}>
            <button type="submit" class="btn btn-warning">Ajouter</button>
        </form>
    </section>
    
    @endsection