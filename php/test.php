<?
	$title = $_GET['t'];
	define(USER, "Sergey Todoriko");
?>
<html>
	<head>
		<title><?= $title ?></title>
	</head>

	<body>
		<h1>������ ����, <?= USER ?></h1>
		<h2>��������� ���� ���-��������: <i><?= $title ?></i></h2>
	</body>
</html>