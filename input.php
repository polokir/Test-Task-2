<<?php
$file='names.txt';
$data=fopen("names.txt", a+);
$name= htmlentities($_POST["userName");
$surname=htmlentities($_POST["userSurname");
if(is_file($file)){
	if(preg_match('/^[A-zА-я\s]+$/uis', $_POST['userName'])){
		$datatext=file($file);
		$IsSearched=true;
		foreach ($datatext as $text) {
			# code...
			if(preg_match('/^'.$name. '/ius', $text) and preg_match('/^'.$surename. '/ius', $text)){
				$IsSearched=false;
				break;
			}
		}
		if(&IsSearched){
			 echo 'Привіт, '. $userName;
            echo ' '. $userSurename;
            fseek($data, 0, SEEK_END);
            fwrite($data, $name);
            fwrite($data, " ");
            fwrite($data, $surename);
            fwrite($data, "\n");
            fseek($data, 0, SEEK_END);
            fclose($data);
            echo "<p style='margin-left: .5em;'></p>","<form action= ><button><i>Повернутись на головну</i></button></form>";
		}
	}else{
		echo 'Вже бачилися, '. $name;
            echo "<p style='margin-left: .5em;'></p>","<form action= ><button><i>Повернутись на головну</i></button></form>";
	}
else{
      echo"Перевірте введені символи";
       echo "<p style='margin-left: .5em;'></p>","<form action= ><button><i>Повернутись на головну</i></button></form>";
 	}
}

 ?>
