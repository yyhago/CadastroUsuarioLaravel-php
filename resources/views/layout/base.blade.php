<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>{{config('app.name')}} :: @yield('titulo')</title>
</head>
<body>

  <div class="logo">
    <img src="{{ asset('img/logolaravel.png') }}" alt="Laravel" />
    <h2>Cadastro de Usuários</h2>
  </div>
  <h3>Olá, que tal se cadastrar?</h3>
  <div class="container">
    @yield('conteudo')
  </div>
  
  <footer>
    <p>Laravel - 2024</p>
  </footer>

</body>
</html>