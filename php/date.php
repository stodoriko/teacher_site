<? 
	$day_of_the_week = date("l");
	switch ($day_of_the_week) {
		case 'Monday': $day_of_the_week = '�����������'; break;
		case 'Tuesday': $day_of_the_week = '�������'; break;
		case 'Wednesday': $day_of_the_week = '�����'; break;
		case 'Thursday': $day_of_the_week = '�������'; break;
		case 'Friday': $day_of_the_week = '�������'; break;
		case 'Saturday': $day_of_the_week = '�������'; break;
		case 'Sunday': $day_of_the_week = '�����������'; break;
	}

	$month = date("F");
	switch ($month) {
		case 'January': $month = '������'; break;
		case 'February': $month = '�������'; break;
		case 'March': $month = '�����'; break;
		case 'April': $month = '������'; break;
		case 'May': $month = '���'; break;
		case 'June': $month = '����'; break;
		case 'July': $month = '����'; break;
		case 'August': $month = '�������'; break;
		case 'September': $month = '��������'; break;
		case 'October': $month = '�������'; break;
		case 'November': $month = '������'; break;
		case 'December': $month = '�������'; break;		
	}

	$date = date("d").". $month ".date("Y");
	$time = date("H:i");
	echo "������� $day_of_the_week, $date. <br>";
	echo "������� ����� $time. <br>";
?>