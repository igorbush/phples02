<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="get">
	<input type="text" placeholder="Введите Число" name="value">
	<input type="submit" value="...">
	</form>
	<?php 
		$chisl = $_GET['value'];
		$per1 = 1;
		$per2 = 1;
		$per3 = 0;
		for ($i = 0; $i <= $per1; $i++){
			if ($per1 > $chisl) {
				echo $chisl . $per1 . "задуманное число НЕ входит в числовой ряд <br>";
			}
			else {
				if ($per1 == $chisl) {
				echo $chisl . $per1 . "задуманное число ВХОДИТ в числовой ряд <br>";
				}
				else {
					$per3 = $per1;
					$per1 = $per1 + $per2;
					$per2 = $per3;
					echo "<br>" . "переменная  №1--- " . $per1 . "<br>";
					echo "переменная  №2--- " . $per2 . "<br>";
					echo "переменная  №3--- " . $per3 . "<br>";
					echo "вводимое число--- " . $chisl . "<br><br><br>";
				}
			}
		}
	?>
</body>
</html>