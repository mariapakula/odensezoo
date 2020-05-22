<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/odensezoo.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="icon" href="images/favicon.png">
    <title>Odense ZOO</title>
  </head>
  <body>

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
        <a href="kortoverzoo.html">Kort over Odense ZOO</a>
        <a href="spisning.html">Restauranter og menukort</a>
        <a href="qrscanner.html">Scan dig til viden</a>
        <a href="stempeljagt.html">Stempeljagt</a>
        <hr class="hr1">
        <a href="logind.php">Log ind</a>
        <a href="aarskortoversigt.html">Mit årskort</a>
      </div>
    </div>
    <span class="open" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
</header>

<img class="lovebaggrund" src="images/løve.jpg" alt="">

<!-- container med logind formular -->
<span class="logindkasse">
</span>

<form method="post" action="aarskortoversigt.html">

<div class="containerprofil">
  <label for="id"><b>Årskort ID (stregkode)</b></label>
  <input type="text" placeholder="Årskort ID" name="id" required>

  <label for="adgangskode"><b>Adgangskode</b></label>
  <input type="password" placeholder="Adgangskode" name="adgangskode" required>
  </div>

<!-- log ind knap -->
  <form method="post" action="">
      <a href="aarskortoversigt.html" style="text-decoration: none;">
      <input type="submit" name="submitknap" value="Log ind" class="logindknap">
    </a>
  </form>

  <p class="ingenbruger">Har du ikke allered et login? Opret bruger <a href="opretbruger.php" style="text-decoration: none;">her</a>.</p>

  <span>
  <form action="">
  <input type="checkbox" class="vehicle10" name="vehicle10" value="loggetind">
<label class="vehicletekst10" for="vehicle10">Forbliv logget ind</label><br>
  </form>
</span>

  </div>
  </form>


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
