<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Страничка моего форума</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
	<ul>
		<li><a href="#" class="current">Главная</a></li>
		<li><a href="#">О нас</a></li>
		<li><a href="#">Еще что нибудь</a></li>
		<li><a href="#">Ну и тут</a></li>
		<li><a href="#">И сюда тоже</a></li>								
	</ul>
</div>
<div class="main1">
<div class="main">
<?php
  $mysqli = new mysqli("localhost", "root", "", "forumbase");// Подключается к базе данных
  $result_set = $mysqli->query("SELECT * FROM `comments`"); //Вытаскиваем все комментарии для данной страницы
while ($row = $result_set->fetch_assoc()) {
    echo "<div class='par'>Имя - ".$row['name']."<br>Комментарий : ".$row['textcom']."<br>";
	echo "<form name='delete' action='delete.php' method='post'> <input type='hidden' name='nomer' value=".$row['id']."><input type='submit' value='Удалить' /></form><br></div>";
	echo "<form name='comment1' action='commend1.php' method='post'><input type='text' name='name1' placeholder='Введите имя' /><input type='text' name='name2' placeholder='Введите короткий комментарий' size='50'/>
		<input type='hidden' name='nomer1' value=".$row['id']."><input type='submit' value='Комментировать'></form><br><br>";
	$res = ("SELECT * FROM `comments1` WHERE `id_c` = ".$row['id']);
	$result=mysqli_query($mysqli, $res );
	while ($ron=mysqli_fetch_array($result))
	{
		   echo "<div class='kom'>Имя - ".$ron['name']."<br>Комментарий : ".$ron['coment']."</div>";
		   echo "<form name='delete1' action='delete1.php' method='post'> <input type='hidden' name='nomer1' value=".$ron['id']."><input type='submit' value='Удалить' /></form><br>";
	}
	//echo "<BR><BR><form name='comment1' action='commend1.php' method='post'><label>Имя:</label><input type='text' name='name' /> <label>Комментарий:</label>
    //<textarea name='textcom' cols='25' rows='1' class='texta'></textarea><BR><input type='submit'></form>";
    echo "<br />";
  }
?>
<br><br>
<form name="comment" action="commend.php" method="post" class="okno">
  <p>
    <label>Имя:</label>
    <input type="text" name="name" />
  </p>
  <p>
    <label>Комментарий:</label><br>
    <textarea name="textcom" cols="100" rows="10" class="texta"></textarea>
  </p>
  <p>
    <input type="submit" value="Отправить" />
  </p>
</form>


</div>

</div>
<div class="end">

</div>
</body>
</html>