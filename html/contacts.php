  <head>
    <meta charset="UTF-8">
    <title>Контакты</title>
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link href="../index.css" type="text/css" rel="stylesheet">
    <link href="../css/contacts.css" type="text/css" rel="stylesheet">
  </head>
  <?php
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
    $theme = "Сообщение с контактной формы";
    $from = "От: <sender@$site>";
    $date = "Дата: ".date("j.n.Y").$nl;
    $time = "Время: ".date("H:i").$nl;
    $author = "Автор: ".$name." <".$address.">".$nl;
    $line = "--------------------------".$nl;
    $text = $date.$time.$author.$line.$message;
    $text = convert_cyr_string($text, "w", "k");
    $title = "Ваше сообщение отправлено";
    mail($where, $theme, $text, $from);
  }
?>

  <body>
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


    <div class="wrapper">

      <div class="header">
        <div class="apple">
          <img src="../images/red-apple.png" alt="red-apple" width="250" height="250">
        </div>
      </div>

      <div class="navigation">

        <ul class="nav-level1-ul">

          <li class="nav-level1">
            <a href="../index.php" class="nav-level1-link">
              Главная
            </a>
          </li>

           <li class="nav-level1">
            <a href="about-me.html" class="nav-level1-link">
              Обо мне
            </a>
            <div class="navigation2">
              <ul class="nav-level2-ul" data-count="4">
                <li><a href="my-school.html" class="nav-level2-link">Моя школа</a></li>
                <li><a href="" class="nav-level2-link">Мои ученики</a></li>
                <li><a href="" class="nav-level2-link">Воспитательная работа</a></li>
                <li><a href="internal-activities.html" class="nav-level2-link">Внутренняя деятельность</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-level1">
            <a href="students.html" class="nav-level1-link">
               Подготовка учеников
            </a>
            <div class="navigation3">
              <ul class="nav-level2-ul" data-count="5">
                <li><a href="school-program.html" class="nav-level2-link">Школьная программа</a></li>
                <li><a href="" class="nav-level2-link">Подготовка к Олимпиаде</a></li>
                <li><a href="gia.html" class="nav-level2-link">Подготовка к ГИА</a></li>
                <li><a href="ege.html" class="nav-level2-link">Подготовка к ЕГЭ</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-level1">
            <a href="media.html" class="nav-level1-link">
              Медиа
            </a>
            <div class="navigation4">
              <ul class="nav-level2-ul" data-count="3">
                <li class="nav-level2"><a href="video.html" class="nav-level2-link">Видео</a></li>
                <li class="nav-level2"><a href="" class="nav-level2-link">Аудио</a></li>
                <li class="nav-level2"><a href="" class="nav-level2-link">Фото</a></li>
              </ul>
            </div>
        </li>

        <li class="nav-level1">
          <a href="contacts.php" class="nav-level1-link">
            Контакты
          </a>
          <div class="navigation5">
          </div>
        </li>

        </ul>
      </div>

      <div class="content">
        <h1 class="write-me">Связаться со мной</h1>

        <div class="box">

          <div class="feedback-form">
            <form method="POST" class="feedback-form" action="contacts.php">

              <div class="row">
                <label for="name">Ваше Имя <span class="req">*</span></label>
                <input type="text" name="name" id="name" class="txt" tabindex="1" placeholder="" required>
              </div>

              <div class="row">
                <label for="e-mail"> Ваш e-mail <span class="req">*</span></label>
                <input type="email" name="email" id="email" class="txt" tabindex="2" placeholder="" required>
              </div>

              <div class="row">
                <label for="theme">Тема <span class="req">*</span></label>
                <input type="text" name="theme" id="subject" class="txt" tabindex="3" placeholder="" required>
              </div>

              <div class="row">
                <label for="message">Сообщение <span class="req">*</span></label>
                <textarea name="message" class="textarea" cols="50" rows="7"required></textarea>
              </div>

              <p class="note"><span class="req">*</span> Поля со звёздочкой<br> обязательны для заполнения</p>

              <div class="center">
                <input  class="buttom" type="submit" id="submitbtn" name="submitbtn" tabindex="5" value="Отправить сообщение">
              </div>

            </form>
          </div>


          <div class="contacts">
            <p class="contacts-note">
              email: tasya-vyasva@mail.ru
            </p>

          </div>

        </div>
      </div>
    </div>
  <body>

<html>