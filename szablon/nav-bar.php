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