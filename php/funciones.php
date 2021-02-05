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
    //                   }
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

            if (empty($_REQUEST['operacion'])){
                global $operacion;
                $operacion = "";

            }else{
                    global $operacion;
                    $operacion = $_REQUEST['operacion'];
        
            }
            

            if (!empty($_REQUEST['val']) OR !empty($_REQUEST['valI'])){
                $valI = $_REQUEST['valI'];
                $var = $_REQUEST['val'];
                $resultado = $_REQUEST['resultado'];
            }else {
                $valI = 0;
                $var = 0;
            }
            

            switch ($_REQUEST['number']) {
                //SUMA
                case 'SUMA':
                    $operacion = "suma";
                    $boton = "suma";
                    $var ++;
                    if($valI>=1){
                        $resultado = $resultado;
                    }else {
                        $resultado = $resultado + $valor;   
                    }
                    header("location: index.php?num=$var&&resultado=$resultado&&boton=$boton&&operacion=$operacion");
                    break;
                
                //RESULTADO (=)
                case '=':
                    $boton = "=";
                    $valI ++;
                    echo $operacion;

                    if ($operacion == "suma"){
                        $resultado = $resultado + $valor;
                    }elseif ($operacion == "resta") {
                        $resultado = $resultado - $valor;
                    }
                    header("location: index.php?num=$var&&resultado=$resultado&&boton=$boton&&valI=$valI&&operacion=$operacion");
                    break;

                // RESTA
                case '-':
                    $operacion = "resta";
                    $boton = "-";
                    $var ++;
                    if($valI>=1){
                        $resultado = $resultado;
                    }else {
                        $resultado = $resultado - $valor;   
                    }
                    header("location: index.php?num=$var&&resultado=$resultado&&boton=$boton&&operacion=$operacion");
                    break;

                //LIMLPIAR
                case 'C/AC':
                    $boton = "";
                    $var = 0;
                    $valI = 0;
                    $operacion = "";
                    $resultado = 0;
                    header("location: index.php?num=$var&&resultado=$resultado&&boton=$boton&&operacion=$operacion");
                    break;

                //LIMLPIAR
                case 'C/AC':
                    $boton = "";
                    $var = 0;
                    $valI = 0;
                    $operacion = "";
                    $resultado = 0;
                    header("location: index.php?num=$var&&resultado=$resultado&&boton=$boton&&operacion=$operacion");
                    break;

                
                default:
                    # code...
                    break;
            }

            
            // if ($_REQUEST['number'] == "-") {
            //     header("location: index.php?num=$var&&resultado=$resultado&&boton=$boton");
            // }


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
            global $val;
            $val = 0;
            global $resultado;
            $resultado = 0;
        }else {
            global $val;
            $val = $_GET['num'];
            global $resultado;
            $resultado =$_REQUEST['resultado'];
        }

        if(empty($_REQUEST['valI'])){
            global $valI;
            $valI = 0;
        }else {
            global $valI;
            $valI = $_GET['num'];
        }

        if(empty($_REQUEST['operacion'])){
            global $operacion;
            $operacion = 0;
        }else {
            global $operacion;
            $operacion = $_REQUEST['operacion'];
        }
    }



    function verificar_operaciones(){
        global $boton;
        global $resultado;
        if ($resultado>=1 AND $boton == "suma"){
             echo "+"; 
            }elseif($boton == "="){
                echo $resultado; 
            }elseif($resultado>=1 AND $boton == "-"){
                echo "-";
            }
    }

?>