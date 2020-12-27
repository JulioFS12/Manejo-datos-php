<?php
    // $data = 'I am learning php';
    // //echo $data{0};

    // $post = 'El texto en este elemento típicamente se muestra en una fuente fija, no proporcional, exactamente como es mostrado en el archivo. Los espacios dentro de este elemento también son mostrados como están escritos.';
    // $extract = substr($post, 0, 25);
    // echo "$extract... [view more]";

    // $data = 'nodejs, php, python';
    // $tag = explode(',', $data);
    // echo "<pre>";
    // var_dump($tag);

    // $array = ['julio','flores','salcedo'];
    // echo implode($array);

    $courses = '   php nodejs javascript csharp     ';
    $courses = rtrim($courses); 
    $courses = ltrim($courses); 
    $courses = trim($courses); 
    echo "<pre>";
    echo "I enjoy learning $courses, and more..";

?>