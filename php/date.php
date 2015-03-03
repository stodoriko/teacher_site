<? 
	$day_of_the_week = date("l");
	switch ($day_of_the_week) {
		case 'Monday': $day_of_the_week = 'Понедельник'; break;
		case 'Tuesday': $day_of_the_week = 'Вторник'; break;
		case 'Wednesday': $day_of_the_week = 'Среда'; break;
		case 'Thursday': $day_of_the_week = 'Четверг'; break;
		case 'Friday': $day_of_the_week = 'Пятница'; break;
		case 'Saturday': $day_of_the_week = 'Суббота'; break;
		case 'Sunday': $day_of_the_week = 'Воскресенье'; break;
	}

	$month = date("F");
	switch ($month) {
		case 'January': $month = 'Января'; break;
		case 'February': $month = 'Февраля'; break;
		case 'March': $month = 'Марта'; break;
		case 'April': $month = 'Апреля'; break;
		case 'May': $month = 'Мая'; break;
		case 'June': $month = 'Июня'; break;
		case 'July': $month = 'Июля'; break;
		case 'August': $month = 'Августа'; break;
		case 'September': $month = 'Сентября'; break;
		case 'October': $month = 'Октября'; break;
		case 'November': $month = 'Ноября'; break;
		case 'December': $month = 'Декабря'; break;		
	}

	$date = date("d").". $month ".date("Y");
	$time = date("H:i");
	echo "Сегодня $day_of_the_week, $date. <br>";
	echo "Текущее время $time. <br>";
?>