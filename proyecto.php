<?php
    
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "proyecto";

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);

?>

<?php

    if(isset($_POST['enviar'])){

        $nombre= $_POST ['nombre'];
        $correo= $_POST ['correo'];
        $edad= $_POST ['edad'];
        $genero= $_POST ['genero'];
        $pregunta1= $_POST ['pregunta1'];
        $pregunta2= $_POST ['pregunta2'];
        $pregunta3= $_POST ['pregunta3'];
        $pregunta4= $_POST ['pregunta4'];
        $pregunta5= $_POST ['pregunta5'];
        $pregunta6= $_POST ['pregunta6'];
        $calificacion= $_POST ['calificacion'];
        $comentario= $_POST ['comentario'];

        



        $insertarDatos = "INSERT INTO datos VALUES('$nombre','$correo','$edad','$genero','$pregunta1','$pregunta2','$pregunta3','$pregunta4','$pregunta5','$pregunta6','$calificacion','$comentario','')";

        $ejecutarInsertar = mysqli_query($enlace,$insertarDatos);

        header("Location: {$_SERVER['REQUEST_URI']}");exit;
   }
?>