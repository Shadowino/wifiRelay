<!-- временнаая html страница для отображения статистики -->
<!-- при отображении требуеться передавать массив моделей :) -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <style media="screen">
  body{
    margin: 0px;
  }
  table{
    border: 1px solid black;
    background-color: #DDD;
    width: 100%;
  }
  tr{
      height: 30px;
  }
  tr:hover{
    /* font-weight: bold; */
    font-size: 17px;
    background-color: #CCC;
  }
  .stats{
    /* border: 1px solid black; */
    height: 50px;
    width: 100%;
  }
  </style>
  <title>статистика deb</title>
</head>
<body>
  <table>
    <tr>
      <th width=5%>id {{$cnt}}</th>
      <th width=25%>time</th>
      <th width=10%>msg</th>
      <th width=10%>mark</th>
      <th width=10%>relay1</th>
      <th width=10%>relay2</th>
      <th width=10%>temp</th>
      <th width=10%>light</th>
      <th width=10%>sens</th>
    </tr>
    <?php
    foreach ($res as $value) {
      echo "
      <tr>
        <td>$value->id</td>
        <td>$value->date</td>
        <td>$value->msg</td>
        <td>$value->mark</td>
        <td>$value->relay1</td>
        <td>$value->relay1</td>
        <td>$value->temp</td>
        <td>$value->light</td>
        <td>$value->sens</td>
      </tr>
      ";
    }
    ?>
  </table>
  <form class="stats" action="api/log" method="post">
    <table>
      <tr>
        <th width=5%>
          <!-- <input type="number" name="id" value="id" width=70%> -->
        </th><th width=25%>
          <input type="date" name="datetime" value="" placeholder="time">
        </th><th width=10%>
          <input type="number" name="msg" value="" placeholder="msg">
        </th><th width=10%>
          <input type="number" name="mark" value="">
        </th><th width=10%>
          <input type="number" name="relay1" value="">
        </th><th width=10%>
          <input type="number" name="relay2" value="">
        </th><th width=10%>
          <input type="text" name="temp" value="">
        </th><th width=10%>
          <input type="number" name="light" value="">
        </th><th width=10%>
          <input type="number" name="sens" value="">
        </th>
      </tr>
    </table>
    <input type="submit" name="" value="send!">
  </form>

</body>
</html>
