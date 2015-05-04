<html>
  <head>
    <meta charset="UTF-8">
    <title>Сайт учителя физики Вязововой Татьяны Михайловны</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="index.css" type="text/css" rel="stylesheet">
  </head>

  <body <!— Yandex.Metrika informer —>
<a href="https://metrika.yandex.ru/stat/?id=28372591&amp;f.."
target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/28372591/2_0_58C5BCFF_38A59CFF_.."
style="width:80px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры)" /></a>
<!— /Yandex.Metrika informer —>

<!— Yandex.Metrika counter —>
<script type="text/javascript">
(function (d, w, c) {
(w[c] = w[c] || []).push(function() {
try {
w.yaCounter28372591 = new Ya.Metrika({id:28372591,
webvisor:true,
clickmap:true,
trackLinks:true,
accurateTrackBounce:true});
} catch(e) { }
});

var n = d.getElementsByTagName("script")[0],
s = d.createElement("script"),
f = function () { n.parentNode.insertBefore(s, n); };
s.type = "text/javascript";
s.async = true;
s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

if (w.opera == "[object Opera]") {
d.addEventListener("DOMContentLoaded", f, false);
} else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/28372591" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!— /Yandex.Metrika counter —>>

  <?php
      $file_name = "counter.txt";
      // существует ли файл в котором хранится значение счётчика
      if (!file_exists($file_name)) {
        $fp = fopen($file_name, "w");
        fwrite($fp, "0");
        fclose($fp);
      }

      // считываем значение счётчика
      $fp = fopen($file_name, "r");
      $counter = fread($fp, 10);
      fclose($fp);

      //опрашиваем значение cookie
      $visitor = $_COOKIE['visitor'];
      if (!isset($visitor)) {
        setcookie("visitor", "yes");
        $counter++;
        $fp = fopen($file_name, "w");
        fwrite($fp, $counter);
        fclose($fp);
      }

      // преобразуем счётчик в графическое изображение
      $number = strlen($counter);
      $counter_graphic = "";
      for ($pos=0; $pos < $number; $pos++) {
        $digit = substr($counter, $pos, 1);
        $counter_graphic .= "<img src=\"$digit.gif\">";
      }
    ?>
    <div class="wrapper">

      <div class="header">
        <div class="apple">
          <img src="images/red-apple.png" alt="red-apple" width="250" height="250">
        </div>
      </div>

      <div class="navigation">

        <ul class="nav-level1-ul">

          <li class="nav-level1">
            <a href="index.php" class="nav-level1-link">
              Главная
            </a>
            <div class="navigation1">
            </div>
          </li>

          <li class="nav-level1">
            <a href="html/about-me.html" class="nav-level1-link">
              Обо мне
            </a>
            <div class="navigation2">
              <ul class="nav-level2-ul" data-count="4">
                <li><a href="html/my-school.html" class="nav-level2-link">Моя школа</a></li>
                <li><a href="" class="nav-level2-link">Мои ученики</a></li>
                <li><a href="" class="nav-level2-link">Воспитательная работа</a></li>
                <li><a href="html/internal-activities.html" class="nav-level2-link">Внутренняя деятельность</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-level1">
            <a href="html/students.html" class="nav-level1-link">
              Подготовка учеников
            </a>
            <div class="navigation3">
              <ul class="nav-level2-ul" data-count="5">
                <li><a href="html/school-program.html" class="nav-level2-link">Школьная программа</a></li>
                <li><a href="" class="nav-level2-link">Подготовка к Олимпиаде</a></li>
                <li><a href="html/gia.html" class="nav-level2-link">Подготовка к ГИА</a></li>
                <li><a href="html/ege.html" class="nav-level2-link">Подготовка к ЕГЭ</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-level1">
            <a href="html/media.html" class="nav-level1-link">
              Медиа
            </a>
            <div class="navigation4">
              <ul class="nav-level2-ul" data-count="3">
                <li class="nav-level2"><a href="html/video.html" class="nav-level2-link">Видео</a></li>
                <li class="nav-level2"><a href="" class="nav-level2-link">Аудио</a></li>
                <li class="nav-level2"><a href="" class="nav-level2-link">Фото</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-level1">
            <a href="html/contacts.php" class="nav-level1-link">
              Контакты
            </a>
            <div class="navigation5">
            </div>
          </li>

        </ul>
      </div>

      <h2 class="salutation">Добро пожаловать на сайт учителя физики<br>
        СОШ с.Бакуры Вязововой Татьяны Михайловны</h2>

      <div class="footer">
        <p class="text-counter">Количество уникальных пользователей посетивших сайт - <?= $counter_graphic; ?></p>
      </div>
    </div>
  </body>
</html>