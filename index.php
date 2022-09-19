<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preload" href="trabajos.html" as="style">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&family=Roboto:ital,wght@0,400;0,900;1,400&family=Staatliches&display=swap" rel="stylesheet">
    <title>Portfolio - Iván Sáez</title>
</head>

<body>
    <?=require_once("header.inc.php")?>
    <main>
        <div class="presentacion flex">
            <div class="presentacion__texto flex">
                <h2>Mi nombre es</h1>
                    <h1>Iván Sáez</h1>
                    <h1>Rodrigo</h1>
                    <div class="presentacion__parrafo">
                        <p>actualmente estoy cursando (por suerte) <br>segundo de DAW, supongo que mis titulos oficiales son; <br>Tecnico en Sistemas Microinformáticos y Redes, <br>Administrador de sistemas microinformáticos y Redes y <br>medio Técnico Desarrollador
                            de Aplicaciones Web.</p>
                    </div>
            </div>
            <div class="presentacion__imagen"><img src="img/yo.jpeg" alt="imagen mia"></div>
        </div>

    </main>

    <?=require_once("footer.inc.php")?>

</body>

</html>
