<html>
	<head>
	</head>	
	<body>
		<b>�� ��</b>�� �� </i> �� HTML
		<? 
			echo "������ ������. <br>";
			echo "������ ������. <br>";
			echo "��� \"������������\" �����. <br>";
		?>
		<b>�� ��</b>�� �� </i> �� HTML<br>
		<? 
			echo htmlspecialchars("��� \"������������\" �����");
		?><br>

		<?
			$Number_of_cats = 42;
			$userName = "Peter";
			$valueOfPi = 3.14159665;
		?>

		<?
			define(USER, "Sergey Todoriko");
			echo "���: ";
			echo USER;
			echo "<br>";
		?>
	</body>	
</html>