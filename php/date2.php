<? 
	$day_of_the_week = date("1");
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
		case 'January': $month = 'Январь'; break;
		case 'February': $month = 'Февраль'; break;
		case 'March': $month = 'Март'; break;
		case 'April': $month = 'Апрель'; break;
		case 'May': $month = 'Май'; break;
		case 'June': $month = 'Июню'; break;
		case 'July': $month = 'Июль'; break;
		case 'August': $month = 'Август'; break;
		case 'September': $month = 'Сентябрь'; break;
		case 'October': $month = 'Октябрь'; break;
		case 'November': $month = 'Ноябрь'; break;
		case 'December': $month = 'Декабрь'; break;		
	}

	$date = date("d").". $month ".date("Y");
	$time = date("H:i");
	echo "Сегодня $day_of_the_week, $date. <br>";
	echo "Текущее время $time. <br>";
?>