<?php

    $nombre = 'Sergio Cano';

    print('Hola ' . $nombre.'<br>');
    print("Hola $nombre");    

    $archivo = 'cadena.txt';

    $fp = fopen($archivo, 'a'); //w -> write  a-> concatena con lo que ya hay
    fputs($fp, "\nNuevo texto");
    fclose($fp);

    if(is_writable($archivo)){
        if(!$fp = fopen($archivo, 'a')){
            echo "No se puede abrir el archivo";
            exit;
        } 
        if(fwrite($fp, "\nOtro texto") === FALSE){
            echo "No se puede escribir en el archivo";
            exit;
        }

        fclose($fp);
    } else {
        echo "El archivo no es escribible";
    }

    $fp = fopen($archivo, 'r');
    echo fgets($fp);
    fclose($fp);

    //o

    $fp = fopen($archivo, 'r');
    while(($bufer = fgets($fp, 4096))!== FALSE){
        echo $bufer.'<br>';
    }
    fclose($fp);
?>