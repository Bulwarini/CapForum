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
    <link rel="stylesheet" href="/mybulma/css/customstyle.css/customstylev2.css" type="text/css">
    <style>
html, body {
  overflow-x: hidden;  
}
</style> 
  </head>
  <body>

    <nav class="navbar is-primary" role="navigation" aria-label="main navigation" >
      <div class="navbar-brand">
          <img src="\obrazki\capforum.svg" height="150" width="150">
        </div>
        <script>
      document.addEventListener('DOMContentLoaded', () => {

// Get all "navbar-burger" elements
const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Add a click event on each of them
$navbarBurgers.forEach( el => {
  el.addEventListener('click', () => {

    // Get the target from the "data-target" attribute
    const target = el.dataset.target;
    const $target = document.getElementById(target);

    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
    el.classList.toggle('is-active');
    $target.classList.toggle('is-active');

  });
});

});
    </script>

      <div class="contrainer is-flex is-hidden-desktop">

      <div class="navbar-end">
        <div class="navbar-item is-flex">

          <div class="buttons is-marginless is-justify-items-center">
            <a class="button is-primary is-marginless" href="/register">
              <strong>Zarejestruj się</strong>
            </a>
            <a class="button is-light is-marginless" href="/login">
              Zaloguj się
            </a>
           </div>
        </div>
      </div>

      <div class="is-flex" style="right:0;position:absolute;">
          <a role="button" class="navbar-burger is-right" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="false"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
          </a>
        </div>  

      </div>
<div id="navbarBasicExample" class="navbar-menu has-background-primary">

<div class="navbar-start">

  <a class="navbar-item" href="/">
    <strong class="is-size-4">Strona Domowa

    </strong>
  </a>
  <div class="navbar-item has-dropdown is-hoverable">

    <a class="navbar-link">
      <strong class="is-size-4">Kategorie</strong>
    </a>

    <div class="navbar-dropdown is-dark">
      <a class="navbar-item" href="/podstrony/kategorie/gry">
        Gry
      </a>

      <a class="navbar-item" href="/podstrony/kategorie/nowinkitechno">
        Nowinki Technologiczne
      </a>

      <a class="navbar-item" href="/podstrony/kategorie/software">
        Software
      </a>

      <a class="navbar-item" href="/podstrony/kategorie/wydswiat">
        Wydarzenia na świecie
      </a>
      
      <a class="navbar-item" href="/podstrony/kategorie/poradniki">
        Poradniki
      </a>
    </div>

  </div>
  <a class="navbar-item" href="/podstrony/kategorie/infoikontakt">
   Informacje i Kontakt
  </a>
</div>
<div class="contrainer is-flex">

<div class="navbar-end">
  <div class="navbar-item is-flex">

    <div class="buttons is-marginless is-justify-items-center">
      <a class="button is-primary is-marginless" href="/register">
        <strong>Zarejestruj się</strong>
      </a>
      <a class="button is-light is-marginless" href="/login">
        Zaloguj się
      </a>
      </div>
  </div>
</div>
</div>

<div class="navbar-end is-hidden-mobile is-hidden-tablet">
        <div class="navbar-item is-flex">

          <div class="buttons is-marginless is-justify-items-center">
            <a class="button is-primary is-marginless" href="/register">
              <strong>Zarejestruj się</strong>
            </a>
            <a class="button is-light is-marginless" href="/login">
              Zaloguj się
            </a>
            </div>
        </div>
      </div>
</div>
    </nav>

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


    <footer class="footer is-primary"  style="position: border-bottom;left: 0;bottom: 0;width: 100%;">
  <div class="content has-text-centered">
    <p class="has-text-white">
      <strong class="has-text-white">CapForum</strong> by CapForumTeam.
      <a href="/podstrony/politykaprywatnosci.php">Polityka Prywatnośći.</a>
    </p>
  </div>
</footer>
  </body>


</html>