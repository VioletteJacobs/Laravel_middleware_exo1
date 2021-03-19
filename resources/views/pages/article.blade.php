@extends('template.main')
@section('content')
    
<section>
    <h1>Articles</h1>
    <section class="container">
        <h1 class="text-center">Les articles : </h1>
        <div class="container">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Titre</th>
                    <th scope="col">Text</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Show</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $item)
                        
                    <tr>
                        <td>{{$item->title}}</td>
                        <td>{{$item->text}}</td>
                        <td>?</td>
                        <td>
                          <form action="/article/{{$item->id}}" method="POST">
                              @csrf
                              @method("DELETE")
                              <button type="submit" class="btn btn-danger">Delete</button>
                        </form>  
                        </td>
                        <td>
                            <a href="/article/{{$item->id}}/edit" class="btn btn-primary">Edit </a>

                        </td>
                    </tr>
    
                    @endforeach
                </tbody>
              </table>
        </div>
    </section>
</section>
@endsection