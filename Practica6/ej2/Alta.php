<html> 
    <head> 
        <title>Alta Capitales</title> 
    </head> 
    <body> 
        <?php   
        include("conexion.inc"); 
        $ciudad = $_POST['ciudad']; 
        $pais = $_POST['pais']; 
        $habitantes = $_POST['habitantes']; 
        $superficie = $_POST['superficie'];
        $tieneMetro = $_POST['tieneMetro'];
        $vSql = "SELECT Count(pais) as canti FROM ciudades WHERE pais='$pais'"; 
        $vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));; 
        $cantCapitales = mysqli_fetch_assoc($vResultado);  
        if ($cantCapitales ['canti']!=0){        
            echo ("La capital ya existe<br>");        
            echo ("<A href='Menu.html'>VOLVER AL  ABM</A>"); } 
        else { 
            $vSql = "INSERT INTO ciudades (ciudad, pais,superficie, tieneMetro, habitantes)  
            values ('$ciudad','$pais', '$superficie', '$tieneMetro', '$habitantes')";        
                mysqli_query($link, $vSql) or die (mysqli_error($link));       
                echo("La capital fue Registrada, Pronto recibirás un email, confirmandote la actualizaciòn a nuestra pagina<br>");        
                echo ("<A href='Menu.html'>VOLVER AL MENU</A>");  // Liberar conjunto de resultados  
                mysqli_free_result($vResultado); } // Cerrar la conexion 
                mysqli_close($link);  
        ?>
    </body>
</html> 