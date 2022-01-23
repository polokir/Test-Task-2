<?php
$data = fopen("names.txt", 'r') or die("не удалось открыть файл");
while(!feof($data))
{
    $string = htmlentities(fgets($data));
    echo $string;
    echo "<br>";
}
echo "<p style='margin-left: .5em;'></p>","<form action=http://kiril-polozhenets.42web.io/><button><i>Повернутись на головну</i></button></form>";
fclose($data);
?>