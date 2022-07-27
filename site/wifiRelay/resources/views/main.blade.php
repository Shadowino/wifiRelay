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
  @include('header')
  <a href="#">google</a>
  <?php
  echo date('Y-m-d h:i:s');
  ?>
</body>
</html>
