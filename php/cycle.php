<?
/*  $start = $_GET['a']; $end = $_GET['b'];
  while ($start <= $end) {
    echo $start, "";
    $start++;
  }*/
?>

<?
/*for ($x = 1; $x <= 20; $x++) echo $x;*/
?>

<?
/*  $start = $_GET['a']; $end = $_GET['b'];
  for ($value = $start; $value <= $end ; $value++) { 
    echo $value. "";
  }*/
?>

<?
/*  for ($r = 1; $r <= 10; $r++) { 
    for ($c = 1; $c <= 10 ; $c++) echo ($r * $c);
      echo "<br>";
  }*/
?>

<!--   <table cellpadding ="5" border="1">
  <?
    for ($r = 1; $r <= 10 ; $r++) { 
        echo "<tr>";
        for ($c = 1; $c <= 10 ; $c++) { 
          echo "<td>";
          echo ($r * $c);
          echo "</td>";
        }
        echo "</tr>";
      } 
  ?> -->

<?
  $file_name = "counter.txt";
  if (!file_exists($file_name)) {
    $fp = fopen($file_name, "w");
    fwrite($fp, "1");
    fclose($fp);
  }
  $fp = fopen($file_name, "r");
  $counter = fread($fp, 10);
  fclose($fp);
  $counter++;
  $fp = fopen($file_name, "w");
  fwrite($fp, $counter);
  fclose($fp);

  $number = strlen($counter);
  $counter_graphic = " ";
  for ($pos=0; $pos < $number; $pos++) { 
    $digit = substr($counter, $pos, 1);
    $counter_graphic .= "<img src=\"$digit.gif\">";
  }
?>
<body>
<p>Страница была просмотрена <?= $counter_graphic; ?> раз. </p>
</body>