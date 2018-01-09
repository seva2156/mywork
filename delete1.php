<?php
$nomer = $_POST["nomer1"];
$mysqli = new mysqli("localhost", "root", "", "forumbase");// Подключается к базе данных
$mysqli->query("DELETE FROM comments1 WHERE id='$nomer'");
  header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно
  exit;

?>