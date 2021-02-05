<?php
    // function validarDatos(){
    //     if (empty($_GET['number']) OR $_GET['number'] == 'C/AC') {
    //         $number = 0;
    //         echo $number;
    //         return $number;
    //     }
    //     else {
    //         $number = $_GET['number'];
    //         if ($number == "SUMA"){
    //             echo "+";
    //             return $number;
    //         }else{
    //         echo $number;
    //         return $number;
    //         }
    //     }
    // }


    // function escribir_datos(){
    //     echo "hola";
    //         $var = array();

    //         if (count($var) == 0){
    //             for ($i = 0; $i <= count($var)+1; $i++){
    //                 if (empty($var[$i])){
    //                     $var[$i] = 1;
    //                     echo $var[$i];
    //                     break;
    //                 }
    //                 }
    //         }else{
    //             for ($i = 0; $i < count($var)+1; $i++){
    //                 if (empty($var[$i])){
    //                     $var[$i] = 1;
    //                     echo $var[$i];
    //                     break;
    //                 }
    //                 }
    //         }
            
    //         print_r ($var);
    // }


    function suma(){
            $valor = $_REQUEST['valor'];
            

            if (!empty($_REQUEST['val'])){
                $var = $_REQUEST['val'];
                $resultado = $_REQUEST['resultado'];
            }
            

            if ($_REQUEST['number'] == "SUMA"){
                $boton = "suma";
                $var ++;
                $resultado = $resultado + $valor;
                header("location: index.php?num=$var&&resultado=$resultado&&boton=$boton");
            }

            if($_REQUEST['number'] == "="){
                $boton = "=";
                $var ++;
                $resultado = $resultado + $valor;
                header("location: index.php?num=$var&&resultado=$resultado&&boton=$boton");
            }

            if ($_REQUEST['number'] == "C/AC"){
                    $var = 0;
                    $resultado = 0;      
                    header("location: index.php?num=$var&&resultado=$resultado&&boton=$boton");
            }


            // if (empty($var)){
            //     $resultado = $valor;
            //     header("location: index.php?num=$var&&resultado=$resultado");
            // }else {
            //     $resultado = $resultado + $valor;
            //     header("location: index.php?num=$var&&resultado=$resultado");
            // }
    }

    

?>