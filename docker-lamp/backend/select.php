<?php
// Соединяемся, выбираем базу данных
$link = mysqli_connect('mariadb', 'test_user', 'test_user!')
    or die('Не удалось соединиться: ' . mysqli_error($link));
mysqli_select_db($link, 'mariadb') or die('Не удалось выбрать базу данных');

// Выполняем SQL-запрос
$query = 'select firstname.firstname, lastname.lastname from mariadb.firstname inner join mariadb.lastname on firstname.id = lastname.id order by rand() limit 1';
$result = mysqli_query($link, $query) or die('Запрос не удался: ' . mysqli_error($link));

$filename = '/tmp/container.txt';

// Формируем строку в текстовой файле
while ($row = mysqli_fetch_row($result)) {
  echo "$row[0] $row[1] from " .$_ENV["HOSTNAME"] . "\n";
  file_put_contents($filename, "$row[0] ", FILE_APPEND);
  file_put_contents($filename, "$row[1] ", FILE_APPEND);
  file_put_contents($filename, "from ", FILE_APPEND);
  file_put_contents($filename, $_ENV["HOSTNAME"], FILE_APPEND);
  file_put_contents($filename, "\n", FILE_APPEND);
}


// Освобождаем память от результата
mysqli_free_result($result);

// Закрываем соединение
mysqli_close($link);
?>


