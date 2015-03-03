<?
	$title = $_GET['t'];
	define(USER, "Sergey Todoriko");
?>
<html>
	<head>
		<title><?= $title ?></title>
	</head>

	<body>
		<h1>Добрый день, <?= USER ?></h1>
		<h2>Заголовок этой веб-страницы: <i><?= $title ?></i></h2>
	</body>
</html>