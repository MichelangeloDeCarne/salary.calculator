<html>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/Style.css">
        
    </script>
    <body>
        <form action='<?php echo $_SERVER["PHP_SELF"];?>' method="post">
    <rect></rect>
    
    <h1>Quanto sarai povero?</h1>

    <h2>Giorni</h2>

    <input type="number" class="testo1" name="insgiorni" placeholder="Quanti giorni durera' il lavoro?">
    <hr class="linea1"> 

    <h3>Campo obbligatorio</h3>

    <h4>Ore giornaliere di lavoro</h4>

    <input type="number" class="testo2" name="insore" placeholder="Quanti lavori al giorno?">

    <hr class="linea2"> 

    <h5>Campo obbligatorio</h5>

    <h6>Compenso orario</h6>

    <input type="number" class="testo3" name="inspagato" placeholder="Quanti vieni pagato all'ora?">

    <hr class="linea3">

    <h7>Campo obbligatorio</h7>

    <input type="submit" class="bottone" name="bottone" value="CALCOLA">

   </form>


    </body>
    </html>
    <?php
    if(isset($_POST["bottone"])){
      $giorni= $_POST["insgiorni"];
      $ore=$_POST["insore"];
      $paga=$_POST["inspagato"];
      $tot= $giorni * $ore * $paga;
      echo"<p class='par'>Guadagnerai $tot euro lavorando $giorni al compenso di $paga/h</p>";
  }
  ?>