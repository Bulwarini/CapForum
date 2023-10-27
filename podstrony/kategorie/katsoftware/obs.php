<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-adsense-account" content="ca-pub-1518890929804230">
    <title>CapForum</title>
    <link rel="stylesheet" href="/mybulma/css/customstyle.css/customstylev2.css" type="text/css">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1518890929804230"
     crossorigin="anonymous"></script>
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

        <h1 class="is title has-text-white has-text-centered has-text-weight-bold">OBS Studio</h1><br>
        <p class="has-text-white is-size-4 has-text-weight-bold ">
          OBS studio, czyli (Open Broadcasting Software) jest programem do nagrywania i streamowania naszych poczynań w grach i innych aktywności, które możemy chcieć umieścić w Internecie. 
          Program na sam początek może wydawać się przytłaczający ma dużo opcji, które możemy nie do końca rozumieć.</p><br>
        <div class="has-text-justified has-text-white is-size-4">
        <figure class="image">
        <img src="/obrazki/obs/obs_screen_1.png">
        </figure>
        Na sam początek chcemy aby było widać nasz ekran aby to ustawić w zakładce źródła<sup>1</sup> obrazu klikamy plusika w lewym dolnym rogu i zależnie od 
        potrzeby wybieramy opcję najbardziej zależy nam na przechwytywaniu ekranu lub przechwytywaniu okna przy drugiej opcji nie musimy martwić się o to że pokażemy pulpit przeglądarkę 
        i inne rzeczy wyświetlone będzie tylko wybrane przez nas okno przy pierwszej opcji pokazujemy cały ekran dla ułatwienia kontroli nad programem jest zakładka sceny<sup>2</sup> 
        po lewej od źródła obrazu tam dodając scenę możemy np. dać naszą grafikę z informacją albo przejście z przechwytywania ekranu do przechwytywania okna albo np. 
        ekran pożegnalny jak chcemy zakończyć już nasze nagrywanie.
        Mamy już ogarnięty obraz, ale dalej nas nie słychać jak temu zaradzić? Rozwiązanie jest bardzo proste w środkowej zakładce “Mikser Dźwięku”<sup>3</sup> Widzimy wykresy ukazujące 
        jak głośny jest nasz dźwięk może się zdarzyć, że mikrofon nie będzie odbierał dźwięku a wykres będzie stał w miejscu, aby temu zaradzić klikamy w 3 kropki pod wykresem 
        z Mikrofonu potem właściwości i wybieramy urządzenie, które ma nagrywać nasz dźwięk warto ustawić też bramkę szumów albo/i tłumienie hałasu co na pewno poprawi jakość 
        dźwięku usuwając szumy z tła.Podstawy już za nami, ale jak zacząć stremować albo nagrywać oprócz oczywistego przycisku do rozpoczęcia, 
        które znajduje się w prawym dolnym rogu kilka przycisków niżej są ustawienia<sup>4</sup>.<br>
        <figure class="image">
        <img src="/obrazki/obs/obs_screen_2.png">
        </figure>
          <p class="has-text-justified has-text-white is-size-4"> W zakładce stream<sup>1</sup> wybieramy serwis, na którym chcemy stremować i ewentualne 
            ustawienia które nas interesują (mogą różnić się w zależności od platformy, na której streamujemy lub chcemy streamować). W zakładce wyjście<sup>2</sup> mamy więcej 
            ustawień streamingu tutaj warto testować ustawienia, bo najlepsze dla nas będą takie które pasują do naszego sprzętu Internetu i tego co streamujemy, a poniżej możemy ustawić, 
            gdzie są pobierane pliki ich jakość oraz format. Możemy też zmienić jakość w zakładce obraz<sup>3</sup> i ustawić skróty klawiszowe które są przydatne do zakończenia steama albo zmiany sceny.</p><br>

      </div>

    </div>
    </div>


    <footer class="footer is-primary"  style="position: bottom;left: 0;bottom: 0;width: 100%;">
  <div class="content has-text-centered">
    <p class="has-text-white">
      <strong class="has-text-white">CapForum</strong> by CapForumTeam.
      <a href="/podstrony/politykaprywatnosci.php">Polityka Prywatnośći.</a>
    </p>
  </div>
</footer>
</div>
  </body>


</html>