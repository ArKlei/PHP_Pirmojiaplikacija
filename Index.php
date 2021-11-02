<?php

//echo 'Hello World!';
//$kintamasis = '5';
//$b = '000';
//echo $kintamasis.$b;
 //$x = 5;
 //$y = 6;
 
 //$x ='5';
 //$y = '10';
 //echo ($x * $y);
 
 //$z = "test $x";
 //echo $z;
 // atsakymas test 5
 // $z = "test $x";
 //echo $z;
 // atsakymas test $z

//echo date('Y-m-d');
// atsakymas 2021-11-02, yra labai įvairių php.net

echo 'Skaičiavimams, įvesk du skačius. ';

if (isset($_POST['skaicius']) && isset($_POST['skaicius2'])) {
			$a = $_POST['skaicius'];
			$b = $_POST['skaicius2'];
			$c = rand(0,10);
			echo 'Įvestas pirmas skaičius:' . $_POST['skaicius'];
			echo ', antras skaičius:' . $_POST['skaicius2'];
			echo ', random skaičius:' . $c;
			echo ', daugybos rezultatas lygus: '.($a * $b * $c);
			echo ', dalybos rezultatas lygus: '.($a / $b / $c);
			echo ', atimties rezultatas lygus: '.($a - $b - $c);
			echo ', pridėties rezultatas lygus: '.($a + $b + $c);
		}
?>

<form method="POST">
<input type="text" name="skaicius" value="0"/>
<input type="text" name="skaicius2" value="0"/>
<button type="submit">Submit</button>


<?php
/*echo 'Atimti, įvesk du skačius: ';

if(isset($_POST['skaicius'])&&($_POST['skaicius2'])) {
			$a = $_POST['skaicius'];
			$b = $_POST['skaicius2'];
			echo 'Įvestas antras skaičius: ' . $_POST['skaicius'];
			echo 'Įvestas pirmas skaičius: ' . $_POST['skaicius2'];
			echo 'Rezultatas lygus: '.($a - $b);
		}
?>

<form method="POST">
<input type="text" name="skaicius" value="0"/>
<input type="text" name="skaicius2" value="0"/>
<button type="submit">Submit</button>

<?php
echo 'Pridėti, įvesk du skačius: ';

if(isset($_POST['skaicius'])&&($_POST['skaicius2'])) {
			$a = $_POST['skaicius'];
			$b = $_POST['skaicius2'];
			echo 'Įvestas antras skaičius: ' . $_POST['skaicius'];
			echo 'Įvestas pirmas skaičius: ' . $_POST['skaicius2'];
			echo 'Rezultatas lygus: '.($a + $b);
		}
?>

<form method="POST">
<input type="text" name="skaicius" value="0"/>
<input type="text" name="skaicius2" value="0"/>
<button type="submit">Submit</button>


<?php
echo 'Padalinti, įvesk du skačius: ';

if(isset($_POST['skaicius'])&&($_POST['skaicius2'])) {
			$a = $_POST['skaicius'];
			$b = $_POST['skaicius2'];
			echo 'Įvestas antras skaičius: ' . $_POST['skaicius'];
			echo 'Įvestas pirmas skaičius: ' . $_POST['skaicius2'];
			echo 'Rezultatas lygus: '.($a / $b);
		}
?>

<form method="POST">
<input type="text" name="skaicius" value="0"/>
<input type="text" name="skaicius2" value="0"/>
<button type="submit">Submit</button>*/