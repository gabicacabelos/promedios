<?php
    //escribir un programa que lea valores enteros hasta que se introduzca un 0 y calcule la media de los positivos y la media de los negativos.

//generar un boton que nos muestre los valores aleatorios y los guarde en los inputs del html con el metodo get.
$el_array = array ($_GET['num'] , $_GET['num1'], $_GET['num2'] , $_GET['num3'] , $_GET['num4']);
if(isset($_GET['valores'])){
    $numero = mt_rand(-4,5);
    $numero1 = mt_rand(-4,5);
    $numero2 = mt_rand(-4,5);
    $numero3 = mt_rand(-4,5);
    $numero4 = mt_rand(-4,5);
    
}



//mostrar la media solo de los numeros que sean negativos.

if (isset($_GET['boton']) && $_GET['num'] <0 or $_GET['num1'] <0 or $_GET['num2'] <0 or $_GET['num3'] <0 or $_GET['num4'] <0){
    
   $arr_negativos=array_filter($el_array, 'get_negativosfiltro');
   if (count($arr_negativos)>0){
       $media_negativos=array_sum($arr_negativos)/count($arr_negativos);
    }else{
        $media_negativos=0;
    }
    echo "La media de los numeros negativos es: $media_negativos" . "<br>";


print_r($arr_negativos);




    

if (isset($_GET['boton']) && $_GET['num'] >0 or $_GET['num1'] >0 or $_GET['num2'] >0 or $_GET['num3'] >0 or $_GET['num4'] >0){
    
    $arr_positivos=array_filter($el_array, 'get_positivosfiltro');
    if (count($arr_positivos)>0){
        $media_positivos=array_sum($arr_positivos)/count($arr_positivos);
     }else{
         $media_positivos=0;
     }
     
     echo "<br>"."La media de los numeros positivos es: $media_positivos" . "<br>";
 
 
 print_r($arr_positivos);
 
 
    }}
    if (isset($_GET['boton']) && $_GET['num'] >0 && $_GET['num1'] >0 && $_GET['num2'] >0 && $_GET['num3'] >0 && $_GET['num4'] >0){
        $media_total=array_sum($el_array)/count($el_array);
        echo "<br>"."Los numeros son todos positivos y la media total es: $media_total" . "<br>";
    }else{
        echo "Los numeros varian entre positivos y negativos";
    }
 
 
 
    

function get_negativosfiltro($array){
    if ($array < 0){
        return $array;
    }}
    function get_positivosfiltro($array){
        if ($array > 0){
            return $array;
        }}











   
    

    
    ?>














<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numeros enteros</title>
</head>
<body>
    <h1>Numeros enteros</h1>
    <form action="ejer.php" method="GET">
        <label for="numero">Introduce un numero:</label>
        <input type="number" name="num" value="<?php echo $numero; ?>">
        <input type="number" name="num1" value="<?php echo $numero1; ?>" >
        <input type="number" name="num2" value="<?php echo $numero2; ?>">
        <input type="number" name="num3" value="<?php echo $numero3; ?>" >
        <input type="number" name="num4" value="<?php echo $numero4; ?>">

        <input type="submit" name="boton" value="Enviar">
        <input type="submit" name="valores" value=" dar valores aleatorios">

    </form>
    
    
</body>
</html>
