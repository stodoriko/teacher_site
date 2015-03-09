  <html>
  <head>
    <title></title>
  </head> 
    <?
      $file_name = "counter.txt";
      //существует ли файл, в котором хранится значение счётчика
      if (!file_exists($file_name)) {
        $fp = fopen($file_name, "w");
        fwrite($fp, "1");
        fclose($fp);
      }

      //считаес значение счётчика
      $fp = fopen($file_name, "r");
      $counter = fread($fp, 10);
      fclose($fp);
      $counter++;
      $fp = fopen($file_name, "w");
      fwrite($fp, $counter);
      fclose($fp);

      //преобразуем счётчик в графическое изображение
      $number = strlen($counter);
      $counter_graphic = "";
      for ($pos=0; $pos < $number; $pos++) { 
        $digit = substr($counter, $pos, 1);
        $counter_graphic .= "<img src=\"$digit.gif\">";
      }
    ?>
  <body>  
    <p>Страница была просмотрена <?= $counter_graphic; ?> раз. </p>
  </body>
</html>    

