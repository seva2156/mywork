<?php
  $name = $_POST["name1"];
  $textcom = $_POST["name2"];
  $nomer = $_POST["nomer1"];
  $name = htmlspecialchars($name);
  $text_comment = htmlspecialchars($text_comment);
  $mysqli = new mysqli("localhost", "root", "", "forumbase");// Подключается к базе данных
  $mysqli->query("INSERT INTO `comments1` (`id`,`name`,`coment`,`id_c`) VALUES ('', '$name', '$textcom', '$nomer')");// Добавляем комментарий в таблицу
  header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно
?>