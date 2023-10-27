<?php
header('Content-type: text/html; charset=utf-8');
session_start();

        include('connections.php');
        include('functions.php');
      
        $user_data = check_login($con);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-adsense-account" content="ca-pub-1518890929804230">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1518890929804230"
     crossorigin="anonymous"></script>
    <title>CapForum</title>
    <link rel="icon" type="image/x-icon" href="/obrazki/capforum.ico">
    <link rel="stylesheet" href="/mybulma/css/customstyle.css/customstyle.css?v=5" type="text/css">
    <style>
html, body {
  overflow-x: hidden;  
}
</style> 
  </head>
  <body>

  <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/szablon/nav-bar.php"; ?>

    <div class="container" style="align-items: center;">
      <div class="is section is-large">
        <div class="box has-background-black-ter is-rounded is-outlined">
        <h1 class="is title has-text-white has-text-centered has-text-weight-bold">Strona Główna</h1>
        <p class="has-text-white is-size-4 ">Witaj na naszej stronie!!<br><br>
          Nie ma może tutaj za wiele, ale życzymy miłego zwiedzania.<br><br>
          Zapraszamy do zgłaszania wszelkich błędów w zakładce kontakt.</p>
          <p class="has-text-white is-size-1 has-text-weight-bold">Pozdrawia administracja strony!</p>
          <p class="is is-size-1"><br></p>
        </div>
      </div>

    </div>





  </body>

  <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/szablon/stopka.php"; ?>
</html>