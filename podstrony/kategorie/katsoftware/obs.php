<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-adsense-account" content="ca-pub-1518890929804230">
    <title>CapForum</title>
    <link rel="stylesheet" href="/mybulma/css/customstyle.css/customstyle.css?v=4" type="text/css">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1518890929804230"
     crossorigin="anonymous"></script>
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
</div>




  </body>
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/szablon/stopka.php"; ?>

</html>