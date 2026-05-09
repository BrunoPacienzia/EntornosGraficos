<?php 
$url = 'https://misitio.com';
$destino=$_POST['email_amigo'];  
$asunto="Recomendación de un sitio web"; 
$desde='From:' .$_POST['email']; 
$comentario= "
Hola $_POST[nombre_amigo],
\n Te escribo para recomendarte el sitio web $url que me ha parecido muy interesante.
\n \n Espero que te guste tanto como a mí.
\n Saludos,"; 
mail($destino,$asunto,$comentario,$desde); 
echo "La recomendación ha sido enviada a $destino.";  
?> 