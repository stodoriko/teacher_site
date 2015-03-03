<html>
	<head>
	</head>	
	<body>
		<b>ку ку</b>ку ку </i> ку HTML
		<? 
			echo "первая строка. <br>";
			echo "вторая строка. <br>";
			echo "Это \"цитированный\" текст. <br>";
		?>
		<b>ку ку</b>ку ку </i> ку HTML<br>
		<? 
			echo htmlspecialchars("Это \"цитированный\" текст");
		?><br>

		<?
			$Number_of_cats = 42;
			$userName = "Peter";
			$valueOfPi = 3.14159665;
		?>

		<?
			define(USER, "Sergey Todoriko");
			echo "Имя: ";
			echo USER;
			echo "<br>";
		?>
	</body>	
</html>