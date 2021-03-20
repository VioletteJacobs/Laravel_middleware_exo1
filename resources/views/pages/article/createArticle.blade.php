@extends('template.main')
@section('content')

    <section class="container">
        <div class="container">
            @if ($errors->any()) 
            <div class="alert alert-danger"> 
                <ul> @foreach ($errors->all() as $error) 
                    <li>{{ $error }}</li> @endforeach 
                </ul> 
            </div> 
            @endif
        </div>
        <form  class="border border-primary rounded p-5" action="/article" method="POST">
            @csrf
            <label for="">Titre : </label>
            <input type="text" name="title" value={{old("title")}}>
            <label for="">Text : </label>
            <input type="text" name="text" value={{old("text")}}>
            <button type="submit" class="btn btn-warning">Ajouter</button>
        </form>
    </section>
    
    @endsection