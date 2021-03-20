<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="row bg-dark p-5">
        <div class="col">
            <nav class=" navbar navbar-expand-lg d-flex">
                <div>
                    @if (Route::has('login'))
                    <div class="hidden fixed  sm:block">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                    @endif
                </div>
            </nav>
        </div>
        <div class="col">
            <a href="/" class="px-5">Welcome</a>
            <a href="/article" class="px-5">Articles</a>
            <a href="/backoffice" class="px-5">Backoffice</a>
            <a href="/backoffice" class="px-5">Mon profil</a>
        </div>
        
    </div>
    @yield('content')
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>