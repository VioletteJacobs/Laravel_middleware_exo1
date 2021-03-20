@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row justify_content_center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">Mon profil : </div>

                <div class="card-body">
                   <form action="/users/{{$users->id}}" methode="POST">
                       @csrf
                       @method("PATCH")
                       <div class="form-group">
                           <label for="name">Name : </label>
                           <input type="text" name="name" value="{{Auth::user()->name}}">
                           <label for="name">Email : </label>
                           <input type="text" name="email" value="{{Auth::user()->email}}">
                       </div>
                       <button type="submit" class="btn btn-warning">Submit</button>

                   </form>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection