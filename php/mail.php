<?
	$error = " ";
	$name = $_POST['name'];
	$email = $_POST['email'];
	$theme = $_POST['theme'];
	$message = $_POST['message'];
	if(empty($name)) $error .= "<li> Не указано имя </li>";
	if(empty($email)) $error .= "<li> Не указан e-mail </li>";
	if(empty($theme)) $error .= "<li> Не указана тема </li>";
	if(empty($message)) $error .= "<li> Не введён текст сообщения </li>";
	if(empty($error)) {
		$nl = chr(13).chr(10);
		$site = $_SERVER['SERVER_NAME'];
		$where = "s.todorikos@gmail.com";
		$theme = "сообщение с контактной формы";
		$from = "От: <sender@$site>";
		$date = "Дата: ".date("j.n.Y").$nl;
		$time = "Время: ".date("H:i").$nl;
		$author = "Автор: ".$name." <".$address.">".$nl;
		$line = "--------------------------".$nl;
		$text = $date.$time.$author.$line.$message;
		$title = "Ваше сообщение отправлено";
		mail($where, $theme, $text, $from);
	} else $title = "Имеются ошибки"
?>
