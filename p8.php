<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post">
    <p>Значения вводить через запятую.</p> 
    <input name="str1" type="text" placeholder="Первая строка" style="width: 120px;">
    <br>
    <input name="str2" type="text" placeholder="Вторая строка" style="width: 120px;">
    <br>
    <input name="str3" type="text" placeholder="Третья строка" style="width: 120px;">
    <br>
    <input name="str4" type="text" placeholder="Четвёртая строка" style="width: 120px;">
    <br>
    <input name="str5" type="text" placeholder="Пятая строка" style="width: 120px;">
    <br>
    <br>
    <input type="submit" value="Ок" name="Ok" value="Ok" style="margin-left: 45px;">
    <br>
    <br>
    <?php
    if(isset($_POST['Ok']))
    {
	  $arr = array(explode(',', $_POST['str1'])
	  ,explode(',', $_POST['str2'])
	  ,explode(',', $_POST['str3'])
	  ,explode(',', $_POST['str4'])
	  ,explode(',', $_POST['str5']));
	  for($i = 0; $i < count($arr); $i++)
	  {
	   $sum += $arr[$i][$i];
	  }
	  echo "Сумма главной диагонали: ".$sum."";
    }
    ?>
</form>
</body>
</html>
