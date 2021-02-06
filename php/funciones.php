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
// -----------------------SUMA-----------------------------------------
            if (!empty($_REQUEST['pressed'])){
                $num1pressed = $_REQUEST['pressed'];
                // $resultado = $_REQUEST['resultado'];
            }else {
                $num1pressed = 0;
            }
// ----------------------------------------------------------------

// -----------------------RESTA-----------------------------------------
            if (!empty($_REQUEST['pressedm'])){
                $num2pressed = $_REQUEST['pressedm'];
                // $resultado = $_REQUEST['resultado'];
            }else {
                $num2pressed = 0;
            }
// ----------------------------------------------------------------

// -----------------------MULTIPLICACION-----------------------------------------
            if (!empty($_REQUEST['pressedx'])){
                $num3pressed = $_REQUEST['pressedx'];
                // $resultado = $_REQUEST['resultado'];
            }else {
                $num3pressed = 0;
            }
// ----------------------------------------------------------------


            switch ($_REQUEST['number']) {
                //SUMA
                case 'SUMA':
                    $operacion = "suma";
                    $boton = "suma";
                    $num1pressed ++;
                    $var ++;
                    if($valI>=1){
                        $resultado = $resultado;
                    }elseif($var>1) {

                        if ($num2pressed >=1 AND $num3pressed == 0){
                            $resultado = $resultado - $valor;
                            $num2pressed = 0;
                        }elseif($num3pressed >= 1 AND $num2pressed == 0){
                            $resultado = $resultado * $valor;
                            $num3pressed = 0;
                        }else {
                            $resultado = $resultado + $valor;    
                        }

                    }else {
                        $resultado = $valor;
                    }
                    header("location: index.php?pressed=$num1pressed&&num=$var&&resultado=$resultado&&boton=$boton&&operacion=$operacion");
                    break;

                // RESTA
                case '-':
                    $operacion = "resta";
                    $boton = "-";
                    $var ++;
                    $num2pressed ++;
                    if($valI>=1){
                        $resultado = $resultado;
                    }elseif($var>1) {

                        if ($num1pressed >=1 AND $num3pressed == 0){
                            $resultado = $resultado + $valor;
                            $num1pressed = 0;
                        }elseif($num3pressed >= 1 AND $num1pressed == 0){
                            $resultado = $resultado * $valor;
                            $num3pressed = 0;
                        }else {
                            $resultado = $resultado - $valor;    
                        }
                    
                    }else {
                        $resultado = $valor;
                    }
                    header("location: index.php?pressedm=$num2pressed&&num=$var&&resultado=$resultado&&boton=$boton&&operacion=$operacion");
                    break;

                //MULTIPLICACION
                case 'x':
                    $operacion = "multiplicacion";
                    $boton = "x";
                    $var ++;
                    $num3pressed ++;
                    if($valI>=1){
                        $resultado = $resultado;
                    }elseif($var>1) {

                        if ($num1pressed >=1 AND $num2pressed == 0){
                            $resultado = $resultado + $valor;
                            $num1pressed = 0;
                        }elseif($num2pressed >= 1 AND $num1pressed == 0){
                            $resultado = $resultado * $valor;
                            $num2pressed = 0;
                        }else {
                            $resultado = $resultado - $valor;    
                        }

                    }else {
                        $resultado = $valor;
                    }
                    header("location: index.php?pressedx=$num3pressed&&num=$var&&resultado=$resultado&&boton=$boton&&operacion=$operacion");
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
                    $pressedx = 0;
                    $pressedm = 0;
                    $pressed = 0;
                    $boton = "";
                    $var = 0;
                    $valI = 0;
                    $operacion = "";
                    $resultado = 0;
                    header("location: index.php?num=$var&&resultado=$resultado&&boton=$boton&&operacion=$operacion");
                    break;

                //RESULTADO (=)
                case '=':
                    $pressedx = 0;
                    $pressedm = 0;
                    $pressed = 0;
                    $boton = "=";
                    $valI ++;

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

        if(empty($_REQUEST['pressed'])){
            global $pressed;
            $pressed = 0;
        }else {
            global $pressed;
            $pressed = $_REQUEST['pressed'];
        }

        if(empty($_REQUEST['pressedm'])){
            global $pressedm;
            $pressedm = 0;
        }else {
            global $pressedm;
            $pressedm = $_REQUEST['pressedm'];
        }

        if(empty($_REQUEST['pressedx'])){
            global $pressedx;
            $pressedx = 0;
        }else {
            global $pressedx;
            $pressedx = $_REQUEST['pressedx'];
        }
    }



    function verificar_operaciones(){
        global $boton;
        global $resultado;
        if ($boton == "suma"){
             echo $resultado."+";
            }elseif($boton == "="){
                echo "="; 
            }elseif($boton == "-"){
                echo $resultado."-";
            }elseif($boton == "x"){
                echo $resultado."x";
            }elseif($boton == "÷"){
                echo $resultado."÷";
            }else {
                echo "RES";
            }
    }


?>