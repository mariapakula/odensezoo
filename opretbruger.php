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


<!-- container med opret bruger formular -->

<span class="opretbrugerkasse">
</span>

<form method="post" action="databaseconnection.php">

<div class="containerprofil">
  <label for="email"><b>Årskort ID (stregkode)</b></label>
  <input type="text" placeholder="Årskort ID" name="email" required>

  <label for="firstname"><b>Fornavn</b></label>
  <input type="text" placeholder="Fornavn" name="firstname" required>

	<label for="lastname"><b>Efternavn</b></label>
	<input type="text" placeholder="Efternavn" name="lastname" required>

	<label for="password"><b>Adgangskode</b></label>
	<input type="password" placeholder="Adgangskode" name="password" required>

  <input type="submit" class="slutknap">

  </form>



  <span>
  	<form>
  		<input type="checkbox" class="gdpr" name="gdpr" value="loggetind">
  	</form>
	</span>

<label class="gdprtekst" for="gdpr">
  <p>Jeg accepterer <a class="betingelserlink" href="betingelser.php" style="text-decoration: none;">cookie- og privatlivspolitik</a>.
  <br>Jeg giver hermed samtykke til, at Odense ZOO
  <br>må indhente, anvende og opbevare mine
  <br>personlige oplysninger, som er nødvendige
  <br>for at oprette en profil.</p>
</label>

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
