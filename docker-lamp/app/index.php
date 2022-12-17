<?php $textfile = "container.txt"; //путь к файлу

echo "-------------------------------<br/>";
if ($quotes = @file("$textfile")) {$quote = rand(0, sizeof($quotes)-1);
echo "$quotes[$quote] <br/>"; //вывод рандомного текста
}

if ($quotes = @file("$textfile")) {$quote = rand(0, sizeof($quotes)-1);
echo "$quotes[$quote] <br/>"; //вывод рандомного текста
}

if ($quotes = @file("$textfile")) {$quote = rand(0, sizeof($quotes)-1);
echo "$quotes[$quote] <br/>"; //вывод рандомного текста
}
echo "-------------------------------";
?>