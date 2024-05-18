<head>
<style>
.snowflake {
          color: red;
          font-size: 3em;
          font-family: Arial, sans-serif;
          text-shadow: 0 0 5px #000;
        }
        
        .snowflake,.snowflake .inner{animation-iteration-count:infinite;animation-play-state:running}@keyframes snowflakes-fall{0%{transform:translateY(0)}100%{transform:translateY(110vh)}}@keyframes snowflakes-shake{0%,100%{transform:translateX(0)}50%{transform:translateX(80px)}}.snowflake{position:fixed;top:-10%;z-index:9999;-webkit-user-select:none;user-select:none;cursor:default;animation-name:snowflakes-shake;animation-duration:3s;animation-timing-function:ease-in-out}.snowflake .inner{animation-duration:10s;animation-name:snowflakes-fall;animation-timing-function:linear}.snowflake:nth-of-type(0){left:1%;animation-delay:0s}.snowflake:nth-of-type(0) .inner{animation-delay:0s}.snowflake:first-of-type{left:10%;animation-delay:1s}.snowflake:first-of-type .inner,.snowflake:nth-of-type(8) .inner{animation-delay:1s}.snowflake:nth-of-type(2){left:20%;animation-delay:.5s}.snowflake:nth-of-type(2) .inner,.snowflake:nth-of-type(6) .inner{animation-delay:6s}.snowflake:nth-of-type(3){left:30%;animation-delay:2s}.snowflake:nth-of-type(11) .inner,.snowflake:nth-of-type(3) .inner{animation-delay:4s}.snowflake:nth-of-type(4){left:40%;animation-delay:2s}.snowflake:nth-of-type(10) .inner,.snowflake:nth-of-type(4) .inner{animation-delay:2s}.snowflake:nth-of-type(5){left:50%;animation-delay:3s}.snowflake:nth-of-type(5) .inner{animation-delay:8s}.snowflake:nth-of-type(6){left:60%;animation-delay:2s}.snowflake:nth-of-type(7){left:70%;animation-delay:1s}.snowflake:nth-of-type(7) .inner{animation-delay:2.5s}.snowflake:nth-of-type(8){left:80%;animation-delay:0s}.snowflake:nth-of-type(9){left:90%;animation-delay:1.5s}.snowflake:nth-of-type(9) .inner{animation-delay:3s}.snowflake:nth-of-type(10){left:25%;animation-delay:0s}.snowflake:nth-of-type(11){left:65%;animation-delay:2.5s}.inner{animation-delay:3s}.snowflake:nth-of-type(11){left:25%;animation-delay:0s} .snowflake:nth-of-type(12){left:65%;animation-delay:3.5s}
        </style>
	<div class="snowflakes" aria-hidden="true">
		  <div class="snowflake">
            <div class="inner">♥</div>
          </div>
          <div class="snowflake">
            <div class="inner">♥</div>
          </div>
          <div class="snowflake">
            <div class="inner">♥</div>
          </div>
          <div class="snowflake">
            <div class="inner">♥</div>
          </div>
          <div class="snowflake">
            <div class="inner">♥</div>
          </div>
          <div class="snowflake">
            <div class="inner">♥</div>
          </div>
          <div class="snowflake">
            <div class="inner">♥</div>
          </div>
          <div class="snowflake">
            <div class="inner">♥</div>
          </div>
          <div class="snowflake">
            <div class="inner">♥</div>
          </div>
          <div class="snowflake">
            <div class="inner">♥</div>
          </div>
          <div class="snowflake">
            <div class="inner">♥</div>
          </div>
          <div class="snowflake">
            <div class="inner">♥</div>
          </div>
          <div class="snowflake">
            <div class="inner">♥</div>
          </div>
        </div>
		   <div class="snowflake">
            <div class="inner">♥</div>
          </div>
          <div class="snowflake">
            <div class="inner">♥</div>
          </div>
        </div>
</head>
<nav class="navbar is-primary" role="navigation" aria-label="main navigation" >
      <div class="navbar-brand">
          <img src="\obrazki\capforumswiat.svg" height="200" width="200">
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