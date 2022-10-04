<?php
    $precio=$_POST['precio'];
    $cantidad=$_POST['cantidad'];

    $descuento=$precio*0.05;


    $nuevo_precio=$precio-$descuento;
    $importe_descuento=$nuevo_precio*$cantidad*0.07;
    $importe_compra=$nuevo_precio*$cantidad;
    $importe_pagar=$importe_compra-$importe_descuento;
    $obsequio_caramelos=$cantidad*2;



    echo "El nuevo precio es: " .$nuevo_precio ."<br>";
    echo "El importe del descuento es: " .$importe_descuento ."<br>";
    echo "El importe de compra es: " . $importe_compra ."<br>";
    echo "El importe a pagar es: ". $importe_pagar ."<br>";
    echo "Caramelos obsequidados: ". $obsequio_caramelos ."<br>";
?>