<?php
// Соединяемся, выбираем базу данных
$link = mysqli_connect('mariadb', 'test_user', 'test_user!')
    or die('Не удалось соединиться: ' . mysqli_error($link));
mysqli_select_db($link, 'mariadb') or die('Не удалось выбрать базу данных');

// Выполняем SQL-запрос
$query = 'select firstname.firstname, lastname.lastname from mariadb.firstname inner join mariadb.lastname on firstname.id = lastname.id order by rand() limit 3';
$result = mysqli_query($link, $query) or die('Запрос не удался: ' . mysqli_error($link));

// Выводим результаты в html
echo "<table>\n";
while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
	echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t\t<td>from " .$_ENV["HOSTNAME"] . "</td>\n";
    echo "\t</tr>\n";
}
echo "</table>\n";

// Освобождаем память от результата
mysqli_free_result($result);

// Закрываем соединение
mysqli_close($link);
?>
