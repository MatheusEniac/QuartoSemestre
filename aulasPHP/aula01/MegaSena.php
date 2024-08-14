<?php
    /*MEGA SENA - GERADOR DE NUMEROS ALEATÓRIOS */

    //Subprograma para sortear número
    function generateNumber($size){
        echo "The drawn numbers are: ";

        for($i = 1; $i <= $size; $i++){
        
        //rand = gerador de números aleatórios entre os valores colocados, neste caso de 1 a 60
            $num  = rand(1,60); 

            echo $num." ";
        }

        

    }

    generateNumber(2);
?>