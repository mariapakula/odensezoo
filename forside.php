<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/odensezoo.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
    <title>Odense Zoo</title>
    <link rel="icon" href="images/favicon.png">
  </head>
  <body>

<div class="gridforside">
<header>

  <a href="http://mariapakula.dk/odensezoo/forside.html">
  <img class="logoheader" src="images/zoosort.png" alt="">
  </a>
  
    <div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="overlay-content">
        <a href="forside.html">Forside</a>
        <a href="dagensprogram.html">Dagens program</a>
        <a href="tiderogpriser.html">Åbningstider og priser</a>
        <a href="kortoverzoo.html">Kort over Odense Zoo</a>
        <a href="spisning.html">Restauranter og menukort</a>
        <a href="qrscanner.html">Scan dig til viden</a>
        <a href="stempeljagt.html">Stempeljagt</a>
        <hr class="hr1">
        <a href="logind.html">Log ind</a>
        <a href="aarskortoversigt.html">Mit årskort</a>
      </div>
    </div>

    <span class="open" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

</header>


<div class="billede1">
  <img src="images/rødpanda1.png" alt="">
  <a href="dagensprogram.html" style="text-decoration:none;">
  <p class="forsidetekst1">DAGENS PROGRAM</p>
  </a>
</div>

<div class="billede2">
  <img src="images/zoofacade1.png" alt="">
  <a href="tiderogpriser.html" style="text-decoration:none;">
  <p class="forsidetekst2">ÅBNINGSTIDER OG PRISER</p>
  </a>
</div>

<div class="billede3">
  <img src="images/forsidekort1.png" alt="">
  <a href="kortoverzoo.html" style="text-decoration:none;">
  <p class="forsidetekst3">KORT OVER ODENSE ZOO</p>
  </a>
</div>

<div class="billede4">
  <img src="images/restaurant1.png" alt="">
  <a href="spisning.html" style="text-decoration:none;">
  <p class="forsidetekst4">RESTAURANTER OG MENUKORT</p>
  </a>
</div>

<div class="billede5">
  <img src="images/scanforside1.png" alt="">
  <a href="qrscanner.html" style="text-decoration:none;">
  <p class="forsidetekst5">SCAN DIG TIL VIDEN <br> OM HAVENS DYR</p>
  </a>
</div>

<div class="billede6">
  <img src="images/stempeljagtbillede.png" alt="">
  <a href="stempeljagt.html" style="text-decoration:none;">
  <p class="forsidetekst6">STEMPELJAGT</p>
  </a>
</div>


<footer class="footer">

<a href="https://www.facebook.com/OdenseZOO/" target='_blank'>
<img class="fblogo" src="images/fblogo.png" alt="Facebook logo">
</a>
<a href="https://www.instagram.com/odensezoo/?hl=da" target='_blank'>
<img class="instalogo" src="images/iglogo.png" alt="Instagram logo">
</a>

<p class="footertekst">
  Søndre Boulevard 306, 5000 Odense C
  <br>
  +45 66 11 13 60
  <br>
  odensezoo@odensezoo.dk
  <br>
  CVR: 12 61 05 72</p>

</footer>
</div>

<script>
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
</script>

</body>
</html>
