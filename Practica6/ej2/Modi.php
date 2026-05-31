<html>
<head> 
    <title>Modificacion</title> 
</head> 
<body> 
    <?php include ("conexion.inc");
    $ciudad = $_POST['ciudad']; 
    $pais = $_POST['pais']; 
    $superficie   = $_POST['superficie']; 
    $habitantes = $_POST['habitantes']; 
    $tieneMetro = $_POST['tieneMetro'];
    $vSql = "UPDATE ciudades SET ciudad='$ciudad', pais='$pais', superficie='$superficie', habitantes='$habitantes', tieneMetro='$tieneMetro' WHERE pais='$pais'"; 
    mysqli_query($link,$vSql) or die (mysqli_error($link)); 
    echo("La ciudad fue modificada<br>"); echo("<A href= 'Menu.html'>Volver al Menu del ABM</A>");
    mysqli_close($link); ?> 
</body> 
</html> 