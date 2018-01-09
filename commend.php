<?php
  $name = $_POST["name"];
  $textcom = $_POST["textcom"];
  $name = htmlspecialchars($name);
  $text_comment = htmlspecialchars($text_comment);
  $mysqli = new mysqli("localhost", "root", "", "forumbase");// Подключается к базе данных
  $mysqli->query("INSERT INTO `comments` (`id`,`name`,`textcom`) VALUES ('', '$name', '$textcom')");// Добавляем комментарий в таблицу
  header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно
?>