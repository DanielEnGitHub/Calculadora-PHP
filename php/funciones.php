<?php
    function validarDatos(){
        if (empty($_GET['number']) OR $_GET['number'] == 'C/AC') {
            $number = 0;
            echo $number;
            return $number;
        }
        else {
            $number = $_GET['number'];
            if ($number == "SUMA"){
                echo "+";
                return $number;
            }else{
            echo $number;
            return $number;
            }
        }
    }


    function escribir_datos(){
        echo "hola";
            $var = array();

            if (count($var) == 0){
                for ($i = 0; $i <= count($var)+1; $i++){
                    if (empty($var[$i])){
                        $var[$i] = 1;
                        echo $var[$i];
                        break;
                    }
                    }
            }else{
                for ($i = 0; $i < count($var)+1; $i++){
                    if (empty($var[$i])){
                        $var[$i] = 1;
                        echo $var[$i];
                        break;
                    }
                    }
            }
            
            print_r ($var);
    }

?>