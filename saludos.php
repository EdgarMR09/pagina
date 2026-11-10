<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de Saludos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <div class="contenedor">
        <h1>Selecciona un Idioma</h1>
        <p>Elige tu idioma preferido para ver un saludo típico.</p>

        <form method="POST" action="">
            <select name="idioma" required>
                <option value="">-- Selecciona --</option>
                <option value="es">Español</option>
                <option value="en">Inglés</option>
                <option value="fr">Francés</option>
                <option value="it">Italiano</option>
                <option value="jp">Japonés</option>
            </select>
            <br>
            <input type="submit" value="Mostrar Saludo">
        </form>

        <?php
        if (isset($_POST['idioma'])) {
            $idiomaSeleccionado = $_POST['idioma'];
            $saludo = "";

            switch ($idiomaSeleccionado) {
                case 'es':
                    $saludo = "¡Hola! ¿Cómo estás?";
                    break;
                case 'en':
                    $saludo = "Hello! How are you?";
                    break;
                case 'fr':
                    $saludo = "Bonjour ! Comment ça va ?";
                    break;
                case 'it':
                    $saludo = "¡Ciao! Come stai?";
                    break;
                case 'jp':
                    $saludo = "Konnichiwa! Ogenki desu ka?";
                    break;
                default:
                    $saludo = "Idioma no reconocido.";
                    break;
            }

            echo "<div class='resultado-saludo'>" . $saludo . "</div>";
        }
        ?>

        <div class="menu" style="margin-top: 30px;">
            <a href="bienvenido.php">Regresar a Bienvenida</a>
        </div>

    </div>

</body>
</html>