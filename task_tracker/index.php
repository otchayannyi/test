<?php

require_once 'connection.php'; // подключаем скрипт сервера 
	
$link = mysqli_connect($host, $user, $password, $database) // подключаемся к серверу
    or die("Ошибка " . mysqli_error($link));	

    $tasks = array(                                                   //переводим таблицу в массив
  array('id' => '1','Задача' => 'Завершить разработку приложения')
);
  
/* `tasks_mng`.`user` */
$user = array(
  array('id' => '1','Фамилия' => 'Иванов','Имя' => 'Иван','Отчество' => 'Иванович'),
  array('id' => '2','Фамилия' => 'Петров','Имя' => 'Пётр','Отчество' => 'Петрович')
);

echo json_encode($tasks, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
echo json_encode($user, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);    //выводим таблицы через JSON
?>