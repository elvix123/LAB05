<?php
    $hijos=$_POST['hijos'];
    $ventas=$_POST['ventas'];


    $bonficacion=$hijos*50;

  
    $comision=$ventas*0.075;

    $sueldo_basico=600;

    $sueldo_bruto=$bonficacion+$sueldo_basico+$comision;

    $descuento=$sueldo_bruto*0.11;

    $sueldo_neto=$sueldo_bruto-$descuento;

    echo "Su bonificacion es : " .$bonficacion ."<br>";
    echo "Su comision es :" .$comision ."<br>";
    echo "Su sueldo bruto es :" .$sueldo_bruto ."<br>";
    echo "Su descuento es :" .$descuento ."<br>";
    echo "Su sueldo neto es :" .$sueldo_neto ."<br>";

?>