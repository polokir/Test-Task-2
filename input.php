<?php
$dfile='names.txt';
$data=fopen("names.txt", 'a+') or die("ERROR");
$name= htmlentities($_POST["userName"]);
$surname=htmlentities($_POST["userSurname"]);
if(is_file($dfile)){
	if(preg_match('/^[A-zА-я\s]+$/uis', $_POST['userName'])){
		$datatext=file($data);
		$IsSearched=true;
		foreach ($datatext as $nametext) {
					
			if(preg_match('/^'.$name. '/ius', $nametext)){
				$IsSearched=false;
				break;
			}
		}
		if($IsSearched){
			 echo 'Привіт, '. $name;
            echo ' '. $surname;
            fseek($data, 0, SEEK_END);
            fwrite($data, $name);
            fwrite($data, " ");
            fwrite($data, $surname);
            fwrite($data, "\n");
            fseek($data, 0, SEEK_END);
            fclose($data);
            echo "<p style='margin-left: .5em;'></p>","<form action=http://kiril-polozhenets.42web.io/ ><button><i>Повернутись на головну</i></button></form>";
		}
	    else{
	 	echo 'Вже бачилися, '. $name;
        echo "<p style='margin-left: .5em;'></p>","<form action=http://kiril-polozhenets.42web.io/ ><button><i>Повернутись на головну</i></button></form>";
        }
    }

    else{
    	echo"Перевірте введені символи";
        echo "<p style='margin-left: .5em;'></p>","<form action=http://kiril-polozhenets.42web.io/ ><button><i>Повернутись на головну</i></button></form>";
 	}
}

?>
