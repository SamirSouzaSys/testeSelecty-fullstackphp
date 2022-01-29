<!DOCTYPE html>
<html lang="lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="csrf-token" value="{{ csrf_token() }}"/>
    <meta name="author" content="Samir Souza">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Teste Selecty - Fullstack-PHP</title>

    {{-- <link rel="canonical" href="/public/css/bootstrap.min.css">   --}}

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    {{-- <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>

    <meta name="theme-color" content="#7952b3">

    {{-- <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }      
    </style> --}}

    <!-- Custom styles for this template -->
    {{-- <link href="navbar-top-fixed.css" rel="stylesheet"> --}}
  </head>
  <body cz-shortcut-listen="true">
    
    {{-- <main class="container"> --}}
      <div id="app">
        
      </div>
    {{-- </main> --}}
    
    {{-- <main class="container">
      <div class="bg-light p-5 rounded">
        <h1>Navbar example</h1>
        <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser’s viewport.</p>
        <a class="btn btn-lg btn-primary" href="/docs/5.1/components/navbar/" role="button">View navbar docs »</a>
      </div>
    </main> --}}


    {{-- <script src="{{ mix('js/app.js') }}" type="text/javascript"></script> --}}
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    {{-- <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
  </body>
</html>