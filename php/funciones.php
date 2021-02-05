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
            

            if (!empty($_REQUEST['val']) OR !empty($_REQUEST['valI'])){
                $valI = $_REQUEST['valI'];
                $var = $_REQUEST['val'];
                $resultado = $_REQUEST['resultado'];
            }
            

            if ($_REQUEST['number'] == "SUMA"){
                $boton = "suma";
                $var ++;
                if($valI>=1){
                    $resultado = $resultado;
                }else {
                    $resultado = $resultado + $valor;   
                }
                header("location: index.php?num=$var&&resultado=$resultado&&boton=$boton");
            }

            if($_REQUEST['number'] == "="){
                $boton = "=";
                $valI ++;
                $resultado = $resultado + $valor;
                header("location: index.php?num=$var&&resultado=$resultado&&boton=$boton&&valI=$valI");
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

    function verificar_valores(){
        if(empty($_REQUEST['boton'])){
            global $boton;
            $boton = "";
        }else {
            global $boton;
            $boton = $_REQUEST['boton'];
        }
    
        if (empty($_REQUEST['num']) AND empty($_REQUEST['resultado'])){
            global $resultado;
            $val = 0;
            $resultado = 0;
        }else {
            global $resultado;
            $val = $_GET['num'];
            $resultado =$_REQUEST['resultado'];
        }
    
        if(empty($_REQUEST['valI'])){
            $valI = 0;
        }else {
            $valI = $_GET['num'];
        }
    }

    function verificar_operaciones(){
        global $resultado;
        global $boton;
        if ($resultado>=1 AND $boton == "suma"){
                echo "+"; 
            }elseif($boton == "="){
                echo $resultado; 
            }
    }
    

?>