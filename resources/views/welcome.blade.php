@extends('template.main')
@section('content')
<h1 class="text-center p-5">Welcome</h1>
<span >Bienvenue sur le blog Laravel !</span>
<p class="bg-dark text-white text-center py-5">En tant que non membre, vous n'avez droit qu'à la page d'accueil, c'est à dire ici-même.
    <br>
    En tant que membre, vous avez accès aux articles écrits par nos rédactrices. Pour vous inscrire, allez dans home ci dessus. 
    <br>
    En tant que Webmaster (c'est à dire moi et moi-même), j'ai accès à tout sauf à la page utilisatrices. 
    <br>
    En tant que Rédactrice, vous avez accès aux articles et à la partie backoffice de vos propres articles.
    <br>
    En tant qu'Admin la toute puissante a accès tout le contenu de ce site. 
</p>
@endsection