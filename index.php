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
		$per1 = 0;
		$per2 = 1;
		$per3 = 0;
		while ($per1 != $chisl || $per1 <= $chisl) {
			if ($per1 > $chisl) {
				echo "<br>задуманное число НЕ входит в числовой ряд";
				break;
			}
			elseif ($per1 == $chisl) {
				echo "<br>задуманное число ВХОДИТ в числовой ряд";
				break;
				}
				else {
					$per3 = $per1;
					$per1 = $per1 + $per2;
					$per2 = $per3;
				}
		}
	?>
</body>
</html>