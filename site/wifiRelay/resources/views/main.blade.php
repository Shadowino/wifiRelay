<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href='css/main.css')>
  <link rel="stylesheet" href='css/work.css')>
  <!-- css/main.css находится в public
  как подключить css стили находящиеся в /resources/css ?
-->
<title>Главная </title>
</head>
<body>
  @include('header')
  <div class="Main">
    <form class="" action="#" method="post">
      <input type="button" name="histore" value="История событий"class="size">
      <table>
        <tr>
          <th width = 5%>
            #Пакет
          </th >
          <th width = 15%>
            Время
          </th>
          <th width = 20%>
            Имя модуля
          </th>
          <th width = 15%>
            Реле1
          </th>
          <th width = 15%>
            Реле2
          </th>
          <th width = 10%>
            Температура
          </th>
          <th width = 10%>
            Свет
          </th>
          <th width = 10%>
            Датчик
          </th>
        </tr>
        <!-- это тоже через for -->
        <?php
        foreach ($res as $value) {
          $rl1 = ($value->relay1 == '1') ? 'ВКЛ' : 'ВЫКЛ' ;
          $rl2 = ($value->relay2 == '1') ? 'ВКЛ' : 'ВЫКЛ' ;
          echo "
          <tr>
            <td>$value->msg</td>
            <td>$value->date</td>
            <td>$value->mark</td>
            <td>$rl1</td>
            <td>$rl2</td>
            <td>$value->temp C°</td>
            <td>$value->light</td>
            <td>$value->sens</td>
          </tr>
          ";
        }
        ?>
        <!-- <tr>
          <td>
            #1
          </td>
          <td>
            2022.12.30 23:59:59
          </td>
          <td>
            модуль
          </td>
          <td>
            <input type="radio" name="relay1" value="ON"> ВКЛ </input>
            <input type="radio" name="relay1" value="OFF"> ВЫКЛ
          </td>
          <td>
            <input type="radio" name="relay2" value="ON"> ВКЛ
            <input type="radio" name="relay2" value="OFF"> ВЫКЛ
          </td>
          я хз как добавить С  температура
          <td>
            40.2
          </td>
          <td>
            512
          </td>
          <td>
            1024
          </td>
        </tr> -->

      </table>
      <input type="button" name="histore" value="Модули"class="size">
      <table>
        <tr>
          <th width = 25%>
            Имя
          </th>
          <th width = 25%>
            Режим работы
          </th>
          <th width = 25%>
            Реле1
          </th>
          <th width = 25%>
            Реле2
          </th>
        </tr>
        <!-- это нужно выводить через for -->
        <!-- for ($i=0; $i < ; $i++) {
        code... -->
        <tr>
          <td>
            Модуль№1
          </td><td>
            <select size="1" name="mode[]">
              <option disabled="disabled">Режим работы</option>
              <option value = "Авто">Авто</option>
              <option value = "Авто2">Авто2</option>
              <option value = "Ручной">Ручной</option>
              <option value = "Настроить" >Настроить</option>
            </select>
          </td><td>
            <input type="button" id="relay1on" value="ВКЛ"><input type="button" id="relay1off" value="ВЫКЛ">
          </td><td>
            <input type="button" id="relay2on" value="ВКЛ"><input type="button" id="relay2off" value="ВЫКЛ">
          </td>
        </tr>
      </table>
    </form>
  </div>
</body>
</html>
