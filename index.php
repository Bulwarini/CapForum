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
body {
  background-image: url('/obrazki/czapkas.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style> 
  </head>
  <body>

  <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/szablon/nav-bar.php"; ?>

  <div class="container" style="align-items: center;">
      <div class="is section is-large">
	  <div class="is-flex is-flex-direction-column is-justify-content-center is-align-items-center">
        <div class="box is-rounded is-outlined" style="background: rgba(20, 19, 19, 0.75)">
        <h1 class="is-size-1 has-text-white has-text-centered has-text-weight-bold">Strona Główna</h1>
        <p class="has-text-white is-size-4 ">CapForum, czyli newsy od czapy. Zapraszamy!<br><br><p>
		<p class="is-size-3 has-text-white has-text-centered">Aktualnie popularne artykuły:</p>
		
		<a href="/podstrony/kategorie/katpor/Terraria"><img src="/obrazki/Terraria/TERRARIA.jpg" height="800vh" width="800"></a>
		<br>
        <a href="/podstrony/kategorie/katpor/Terraria"><p class="is-size-3 has-text-white has-text-centered">Poradnik do gry Terraria</p></a>
		<p class="is-size-1"><br><br></p>
		<a href="/podstrony/kategorie/katwyd/JWST_Jowisz"><img src="/obrazki/jwst/prad_strumieniowy.webp"></a>
		<a href="/podstrony/kategorie/katwyd/JWST_Jowisz"><p class="is-size-3 has-text-white has-text-centered">Kosmiczny Teleskop Jamesa Webba bada Jowisza</p></a>
		</div>
		</div>
      </div>

    </div>






  </body>

  <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/szablon/stopka.php"; ?>
</html>