<?php

    ////alterar
    $data = "hi IT'S a TEXT with ALL FORMATS";
    echo "<pre>";
    // echo strtoupper($data);
    // echo strtolower($data);
    // echo ucfirst($data);
    // echo lcfirst($data);

    ////replace
    $alter = str_replace(' ','-', $data);
    // echo $alter;

    $modification = 20;
    $tag = "<h1>Hi it is working</h1>";
    // echo str_pad($modification, 8, "#", STR_PAD_LEFT);
    // echo str_pad($modification, 8, "#", STR_PAD_RIGHT);
    // echo str_pad($modification, 8, "#", STR_PAD_BOTH);
    // echo strip_tags($tag);

    $text_uno = "PHP es UN LENGUAJE, año 2020, programación";
    // echo mb_strtolower($text_uno);
?>