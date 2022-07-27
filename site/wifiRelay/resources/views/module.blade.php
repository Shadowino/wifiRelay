<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href='css/main.css')>
  <title>Модули</title>
</head>
<body>
  @include('header')
  <style media="screen">
  body{
    background-color: blue;
  }
  .inp{
    width: 80px;
    height: 20px;
    display: inline-block;
    border: 2px solid black;
    border-radius: 0px;
  }
  .sel{
    height: 20px;
  }
  </style>
  <form class="" action="#" method="">
    <input class="inp" required type="text" name="name" value="" placeholder="имя модуля">
    <select class="input sel" name="mode">
      <option value=""></option>
      <option value="manual">manual</option>
      <option value="auto1">auto1</option>
      <option value="auto2">auto2</option>
    </select>
    <input class="inp" type="submit" name="" value="sub">
  </form>
</body>
</html>
