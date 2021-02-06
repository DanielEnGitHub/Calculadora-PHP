<?php include("php/funciones.php"); 
        verificar_valores();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@900&family=Source+Code+Pro:wght@700&display=swap" rel="stylesheet">
</head>
<body background="img/fondo.png">

    <img src="img/regla.png" width="950px" class="regla">
    <img src="img/notebook.png" width="950px" class="notebok">
    <img src="img/apple.png" width="450px" class="apple">
    <img src="img/1_wfREjDBpYeKWMUQ97mPd6w.png" width="450px" class="pencil">

    <form action='proceso.php?pressedd=<?php echo $pressedd; ?>&&pressedx=<?php echo $pressedx; ?>&&pressedm=<?php echo $pressedm; ?>&&pressed=<?php echo $pressed; ?>&&val=<?php echo $val; ?>&&resultado=<?php echo $resultado; ?>&&valI=<?php echo $valI; ?>&&operacion=<?php echo $operacion; ?>' method='POST'>
    <center> 
            <!-- pantalla -->
        <div class="container">
            <h4 class="text">DANIEL GALLINA</h4><h4 class="txt">V1.0</h4>
           
            <input placeholder="0" id="resultado" type="text" name="valor" class="pantalla" autocomplete="off" value="<?php if($boton == "="){
                echo $resultado; 
            } ?>" readonly>
            <div class="pantalla_num"><?php verificar_operaciones(); ?></div>
        </div>
        <div class="keys">
            <!-- linea 1-->
            <input type="submit" value="%" class="btn1" name="number">
            <input type="submit" value="MU" class="btn1" name="number">

            <!-- linea 2 -->
            <br> <input type="submit" value="MC" class="btn2" name="number">
            <input type="submit" value="MR" class="btn2" name="number">
            <input type="submit" value="M-" class="btn2" name="number">
            <input type="submit" value="M+" class="btn2" name="number">
            <input type="submit" value="÷" class="btn2" name="number">

            <!-- linea 3 -->
            <br> <input type="submit" value="+/-" class="btn2" name="number">
            <input type="button" value="7" class="btn2_Black" name="number" 
            onClick="var str1=document.getElementById('resultado').value; if(str1 == '0'){document.getElementById('resultado').value=7}else{ var str2='7'; var res = str1.concat(str2);document.getElementById('resultado').value=res;}"
            > 
            <input type="button" value="8" class="btn2_Black" name="number"
            onClick="var str1=document.getElementById('resultado').value; if(str1 == '0'){document.getElementById('resultado').value=8}else{ var str2='8'; var res = str1.concat(str2);document.getElementById('resultado').value=res;}"
            >
            <input type="button" value="9" class="btn2_Black" name="number"
            onClick="var str1=document.getElementById('resultado').value; if(str1 == '0'){document.getElementById('resultado').value=9}else{ var str2='9'; var res = str1.concat(str2);document.getElementById('resultado').value=res;}"
            >
            <input type="submit" value="x" class="btn2" name="number">

            <!-- linea 4 -->
            <br> <input type="button" value="►" class="btn2" name="number"
            onClick="var str1=document.getElementById('resultado').value; if(str1 == '0'){document.getElementById('resultado').value=4}else{ var str2='►'; var res = str1.substr(0,str1.length-1);document.getElementById('resultado').value=res;}"
            >
            <input type="button" value="4" class="btn2_Black" name="number"
            onClick="var str1=document.getElementById('resultado').value; if(str1 == '0'){document.getElementById('resultado').value=4}else{ var str2='4'; var res = str1.concat(str2);document.getElementById('resultado').value=res;}"
            >
            <input type="button" value="5" class="btn2_Black" name="number"
            onClick="var str1=document.getElementById('resultado').value; if(str1 == '0'){document.getElementById('resultado').value=5}else{ var str2='5'; var res = str1.concat(str2);document.getElementById('resultado').value=res;}"
            >
            <input type="button" value="6" class="btn2_Black" name="number"
            onClick="var str1=document.getElementById('resultado').value; if(str1 == '0'){document.getElementById('resultado').value=6}else{ var str2='6'; var res = str1.concat(str2);document.getElementById('resultado').value=res;}"
            >
            <input type="submit" value="-" class="btn2" name="number">

            <!-- linea 5 -->
            <br> <input type="submit" value="C/AC" class="btn2_Orange" name="number">
            <input type="button" value="1" class="btn2_Black" name="number"
            onClick="var str1=document.getElementById('resultado').value; if(str1 == '0'){document.getElementById('resultado').value=1}else{ var str2='1'; var res = str1.concat(str2);document.getElementById('resultado').value=res;}"
            >
            <input type="button" value="2" class="btn2_Black" name="number"
            onClick="var str1=document.getElementById('resultado').value; if(str1 == '0'){document.getElementById('resultado').value=2}else{ var str2='2'; var res = str1.concat(str2);document.getElementById('resultado').value=res;}"
            >
            <input type="button" value="3" class="btn2_Black_1" name="number"
            onClick="var str1=document.getElementById('resultado').value; if(str1 == '0'){document.getElementById('resultado').value=3}else{ var str2='3'; var res = str1.concat(str2);document.getElementById('resultado').value=res;}"
            >
            <input type="submit" value='SUMA' class="btn2_Suma" name="number">

            <!-- linea 6 -->
            <br> <input type="button" value="0" class="btn2_Black" name="number"
            onClick="var str1=document.getElementById('resultado').value; if(str1 == '0'){document.getElementById('resultado').value=0}else{ var str2='0'; var res = str1.concat(str2);document.getElementById('resultado').value=res;}"
            >
            <input type="button" value="00" class="btn2_Black" name="number"
            onClick="var str1=document.getElementById('resultado').value; if(str1 == '00'){document.getElementById('resultado').value=0}else{ var str2='00'; var res = str1.concat(str2);document.getElementById('resultado').value=res;}"
            >
            <input type="button" value="." class="btn2_Black" name="number"
            onClick="var str1=document.getElementById('resultado').value; if(str1 == '.'){document.getElementById('resultado').value=7}else{ var str2='.'; var res = str1.concat(str2);document.getElementById('resultado').value=res;}"
            >
            <input type="submit" value="=" class="btn2_space" name="number">

        </div>
    </center>
    </form>

    <!-- <script>
        function retro(){ //Borrar sólo el último número escrito.
         cifras=x.length; //hayar número de caracteres en pantalla
         br=x.substr(cifras-1,cifras) //describir último caracter
         x=x.substr(0,cifras-1) //quitar el ultimo caracter
         if (x=="") {x="0";} //si ya no quedan caracteres, pondremos el 0
         if (br==".") {coma=0;} //Si el caracter quitado es la coma, se permite escribirla de nuevo.
         pantalla.innerHTML=x; //mostrar resultado en pantalla	 
         }
    </script> -->
<!-- FIN CALCULADORA -->
</body>
</html>