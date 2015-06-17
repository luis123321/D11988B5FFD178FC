<?php 
    mysqli_set_charset($dbconnect,'utf8');
    $a = mysqli_query($dbconnect,"SELECT * FROM frontpagecontent WHERE id='1'");
    $b = mysqli_query($dbconnect,"SELECT * FROM frontpagecontent WHERE id='2'");
    $c = mysqli_query($dbconnect,"SELECT * FROM frontpagecontent WHERE id='3'");
    //Datos 1 por 1 de la primera fila
    $rowa = mysqli_fetch_array($a);
    $titlea = $rowa['title'];
    $contenta = $rowa['content'];
    //Datos 1 por 1 de la segunda fila
    $rowb = mysqli_fetch_array($b);
    $titleb = $rowb['title'];
    $contentb = $rowb['content'];
    //Datos 1 por 1 de la tercera fila
    $rowc = mysqli_fetch_array($c);
    $titlec = $rowc['title'];
    $contentc = $rowc['content'];


 ?>