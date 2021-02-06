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

    <form action='proceso.php?pressed=<?php echo $pressed; ?>&&val=<?php echo $val; ?>&&resultado=<?php echo $resultado; ?>&&valI=<?php echo $valI; ?>&&operacion=<?php echo $operacion; ?>' method='POST'>
    <center> 
            <!-- pantalla -->
        <div class="container">
            <h4 class="text">DANIEL GALLINA</h4><h4 class="txt">V1.0</h4>
            <input placeholder="0" type="text" name="valor" class="pantalla" autocomplete="off" value="<?php verificar_operaciones(); ?>">
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
            <input type="submit" value="7" class="btn2_Black" name="number">
            <input type="submit" value="8" class="btn2_Black" name="number">
            <input type="submit" value="9" class="btn2_Black" name="number">
            <input type="submit" value="x" class="btn2" name="number">

            <!-- linea 4 -->
            <br> <input type="submit" value="►" class="btn2" name="number">
            <input type="submit" value="4" class="btn2_Black" name="number">
            <input type="submit" value="5" class="btn2_Black" name="number">
            <input type="submit" value="6" class="btn2_Black" name="number">
            <input type="submit" value="-" class="btn2" name="number">

            <!-- linea 5 -->
            <br> <input type="submit" value="C/AC" class="btn2_Orange" name="number">
            <input type="submit" value="1" class="btn2_Black" name="number">
            <input type="submit" value="2" class="btn2_Black" name="number">
            <input type="submit" value="3" class="btn2_Black_1" name="number">
            <input type="submit" value='SUMA' class="btn2_Suma" name="number">

            <!-- linea 6 -->
            <br> <input type="submit" value="0" class="btn2_Black" name="number">
            <input type="submit" value="00" class="btn2_Black" name="number">
            <input type="submit" value="." class="btn2_Black" name="number">
            <input type="submit" value="=" class="btn2_space" name="number">

        </div>
    </center>

    </form>
<!-- FIN CALCULADORA -->
</body>
</html>