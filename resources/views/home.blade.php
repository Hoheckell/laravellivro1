<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Home - Contatos</title>
  <meta name="description" content="Lista de contatos">
  <meta name="author" content="Hoheckell">

  <meta property="og:title" content="Lista de contatos">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.gygaweb.com.br/laravel-livro-1">
  <meta property="og:description" content="Livro-1 introdução ao CRUD.">
  <!-- meta property="og:image" content="image.png" -->

  <!-- link rel="icon" href="/favicon.ico">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png" -->

</head>

<body>
    <h1>Lista de contatos</h1>
    <ol>
        @forelse ($contatos as $contato)
            <li>Nome: {{ $contato->nome }} &nbsp; Telefone: {{ $contato->telefone}}</li>
        @empty
            <li>Não há contatos para listar</li>
        @endforelse
    </ol>
  <!-- script src="js/scripts.js"></ -->
</body>
</html>
