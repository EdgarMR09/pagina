<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de Bienvenida</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>

    <div class="contenedor">
        
        <img src="img/logo.jpg" alt="logfo" class="logo">

        <h1>¡Bienvenido al sitio web!</h1>

        <p><strong>Nombre del alumno:</strong> Edgar Miranda Reyes</p>
        <p><strong>Nombre de la tarea:</strong> Tarea 2.5: (individual)
          Página con varias ramas
        </p>
        <p><strong>Escuela:</strong> CBTis 217</p>
        <p><strong>Fecha:</strong> 
            <?php 
                echo date("d/m/Y"); 
            ?>
        </p>

        <div class="menu">
            <a href="saludos.php">Ir a la página de Saludos</a>
        </div>
    </div>

</body>
</html>