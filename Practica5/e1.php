<?php
$destinatario = "xx@xx.com ";  
$asunto = "Prueba";  
$cuerpo = "
<html>
<head>
    <title>Prueba</title>
</head>
<body>
    <h1>Prueba</h1>
    <p>Este es un mensaje de prueba.</p>
</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: ejemplo@gmail.com" . "\r\n";

mail($destinatario, $asunto, $cuerpo, $headers);

?>