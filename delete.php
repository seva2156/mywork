<?php
$nomer = $_POST["nomer"];
$mysqli = new mysqli("localhost", "root", "", "forumbase");// Подключается к базе данных
$mysqli->query("DELETE FROM comments WHERE id='$nomer'");
  header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно
  exit;

?>