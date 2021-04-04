<?php
   $destino = "rico0899fany@gmail.com";
   $nombre = $_POST["nombre"];
   $apellido = $_POST["apellido"];
   $direccion = $_POST["direccion"];
   $telefono = $_POST["telefono"];
   $correo = $_POST["correo"];
   $mensaje = $_POST["mensaje"];
   $contenido = "Nombre" , $nombre , "/nCorreo" , $correo , "/nTelefono" , $telefono , "/nMensaje" , $mensaje;
   mail($destino, "Contacto", $contenido);
   header("Location:index.html")
?>