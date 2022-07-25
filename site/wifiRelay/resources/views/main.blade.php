<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href='css/main.css')>
    <!-- css/main.css находится в public
    как подключить css стили находящиеся в /resources/css ?
   -->
    <title>Главная </title>
  </head>
  <body>
    @section('header')
        This is the master sidebar.
    @show
    <!-- @include('header') -->
  </body>
</html>
