<?php
    function operacion(){
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
                    }elseif($var>1) {
                        $resultado = $resultado + $valor;
                    }else {
                        $resultado = $valor;
                    }
                    header("location: index.php?num=$var&&resultado=$resultado&&boton=$boton&&operacion=$operacion");
                    break;

                // RESTA
                case '-':
                    $operacion = "resta";
                    $boton = "-";
                    $var ++;
                    if($valI>=1){
                        $resultado = $resultado;
                    }elseif($var>1) {
                        $resultado = $resultado - $valor;
                    }else {
                        $resultado = $valor;
                    }
                    header("location: index.php?num=$var&&resultado=$resultado&&boton=$boton&&operacion=$operacion");
                    break;

                //MULTIPLICACION
                case 'x':
                    $operacion = "multiplicacion";
                    $boton = "x";
                    $var ++;
                    if($valI>=1){
                        $resultado = $resultado;
                    }elseif($var>1) {
                        $resultado = $resultado * $valor;
                    }else {
                        $resultado = $valor;
                    }
                    header("location: index.php?num=$var&&resultado=$resultado&&boton=$boton&&operacion=$operacion");
                    break;
                
                //DIVISION
                case '÷':
                    $operacion = "division";
                    $boton = "÷";
                    $var ++;
                    if($valI>=1){
                        $resultado = $resultado;
                    }elseif($var>1) {
                        $resultado = $resultado / $valor;
                    }else {
                        $resultado = $valor;
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

                //RESULTADO (=)
                case '=':
                    $boton = "=";
                    $valI ++;
                    echo $operacion;

                    if ($operacion == "suma"){
                        $resultado = $resultado + $valor;
                    }elseif ($operacion == "resta") {
                        $resultado = $resultado - $valor;
                    }elseif ($operacion == "multiplicacion") {
                        $resultado = $resultado * $valor;
                    }elseif ($operacion == "division") {
                        $resultado = $resultado / $valor;
                    }
                    header("location: index.php?num=$var&&resultado=$resultado&&boton=$boton&&valI=$valI&&operacion=$operacion");
                    break;
                default:
                    # code...
                    break;
            }
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
            }elseif($resultado>=1 AND $boton == "x"){
                echo "x";
            }elseif($resultado>=1 AND $boton == "÷"){
                echo "÷";
            }
    }

?>