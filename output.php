?php
$data = fopen("names.txt", 'r') or die("не удалось открыть файл");
while(!feof($data))
{
    $userNames = htmlentities(fgets($data));
    echo $str;
    echo "";
}
echo "<p style='margin-left: .5em;'></p>","<form action=><button><i>Повернутись на головну</i></button></form>";
fclose($fd);
?>