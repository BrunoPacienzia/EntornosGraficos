<html> 
    <head> 
        <title>Baja</title> 
    </head> 
    <body> 
        <?php include ("conexion.inc"); 
        $capitalID = $_POST ['capital']; 
        $vSql = "SELECT * FROM ciudades WHERE id='$capitalID' "; 
        $vResultado = mysqli_query($link, $vSql);  
        if(mysqli_num_rows($vResultado) == 0){         
            echo ("Capital Inexistente...!!! <br>");        
            echo ("<A href='FormBajaIni.html'>Continuar</A>"); } 
        else{  
            $vSql= "DELETE FROM ciudades WHERE id='$capitalID' "; 
            mysqli_query($link, $vSql);         
            echo("La capital fue Borrada<br>");         
            echo("<A href='Menu.html'>Volver al Menu del ABM</A>");}
            mysqli_free_result($vResultado); 
            mysqli_close($link); ?> 
    </body> 
</html> 