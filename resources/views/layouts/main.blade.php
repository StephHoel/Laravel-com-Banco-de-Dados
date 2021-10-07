<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
         <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>
    </head>
    <body>
      <header>
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
              <img src="/img/Steph_Hoel_c.png" alt="Steph Hoel">
              Steph Hoel
            </a>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="/videos" class="nav-link">Vídeos</a>
              </li>
              <li class="nav-item">
                <a href="/web" class="nav-link">Web</a>
              </li>
              <li class="nav-item">
                <a href="/jogos" class="nav-link">Jogos</a>
              </li>
              <li class="nav-item">
                <a href="/blog" class="nav-link">Blog</a>
              </li>
              <li class="nav-item">
                <a href="/textos" class="nav-link">Textos</a>
              </li>
              <li class="nav-item">
                <a href="/algiz" class="nav-link">Algiz</a>
              </li>
              <li class="nav-item">
                <a href="/sobre" class="nav-link">Sobre</a>
              </li>
              <li class="nav-item">
                <a href="/contato" class="nav-link">Contato</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <main>
        <div class="container-fluid">
          <div class="row">
            @if(session('msg'))
              <p class="msg">{{ session('msg') }}</p>
            @endif
            @yield('content')
          </div>
        </div>
      </main>
      <footer>
         <p>Steph Hoel &copy; 2021</p>
      </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
