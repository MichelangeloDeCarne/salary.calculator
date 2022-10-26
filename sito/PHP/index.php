<?php
  if(isset($_POST["bottone"])){
    $giorni= $_POST["insgiorni"];
    $ore=$_POST["insore"];
    $paga=$_POST["inspagato"];
    $tot= $giorni * $ore * $paga;
    echo "Guadagnerai $tot € lavorando $giorni al compenso di $paga/h";
}
?>