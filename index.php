<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Таблица умножения</title>
</head>
<body>
	<?php
		echo '<table border=1px>';
		for ($i = 0; $i <= 10; $i++) {
			echo '<tr>';
			for ($j = 0; $j <= 10; $j++) {
        if ($i == 0 && $j == 0) {
					echo '<td width=25 height=25 align=center bgcolor=800000</td>';
        }
        else if ($i == 0) {
          echo '<td width=25 height=25 align=center bgcolor=FFCB9C>'.$j.'</td>';
        }
        else if ($j == 0) {
          echo '<td width=25 height=25 align=center bgcolor=FFCB9C>'.$i.'</td>';
        }
        else if ($i == $j) {
          echo '<td width=25 height=25 align=center bgcolor=F6FC92>'.$i * $j.'</td>';
        }
        else {
          echo '<td width=25 height=25 align=center>'.$i * $j.'</td>';
        }
			}
			echo '</tr>';
		}
		echo '</table>';
	?>
</body>
</html>