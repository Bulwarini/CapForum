<?php
session_start();

include("connections.php");
include("functions.php");



if($_SERVER['REQUEST_METHOD'] == "POST")
{

  //coś zostało zapostowane
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];

  if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
  {

    //zapisz do bazy danych
    $user_id = random_num(20);
    $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";


    mysqli_query($con, $query);

  //header("Location: login.php");
  //die;
    echo "Wprowadź prawidłowe dane";
}else
  {
    echo "Wprowadź prawidłowe dane";
  }


}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-adsense-account" content="ca-pub-1518890929804230">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1518890929804230"
     crossorigin="anonymous"></script>
    <title>Wydarzenia na Świecie - CapForum</title>
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

    <form method="post" class="box box-background-color gray">
    <div class="field is-centered">
  <label class="label" >Nazwa Użytkownika</label>
  <div class="control is-centered">
    <input class="input" type="text" name="user_name">
  </div>
</div>

<div class="field">
  <label class="label">Hasło</label>
  <div class="control">
    <input class="input" type="password" name="password">
  </div>
</div>

<div class="field is-grouped">
  <div class="control">
    <input id="button" type="submit" href="/" value="Zaloguj się" ></input>
    <button href="/register">Zarejestruj się</button>
  </div>
</div>
  </form>
  
  <footer class="footer is-primary"  style="position: bottom;left: 0;bottom: 0;width: 100%;">
  <div class="content has-text-centered">
    <p class="has-text-white">
      <strong class="has-text-white">CapForum</strong> by CapForumTeam.
      <a href="/podstrony/politykaprywatnosci.php">Polityka Prywatnośći.</a>
    </p>
  </div>
</footer>
</body>
</html>