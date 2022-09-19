<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preload" href="hobbies.html" as="style">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&family=Roboto:ital,wght@0,400;0,900;1,400&family=Staatliches&display=swap" rel="stylesheet">
    <title>Portfolio - Iván Sáez</title>
</head>

<body>
    <?=require_once("header.inc.php")?>
    <main>
        <div class="skills flex flex-column">
            <h1>Mis Skills en <br> programación web:</h1>
            <div class="skills__404notfound flex flex-column">
                <p class="skills__404notfound--404">404</p>
                <p class="skills__404notfound--notfound">not found</p>
            </div>
            <div class="skills__realidad">
                <p class="skills__realidad--parrafo flex flex-column">No, ahora en serio, estuve cursando este curso de udemy para recordar:<br><a target="_blank" href="https://www.udemy.com/course/desarrollo-web-completo-con-html5-css3-js-php-y-mysql/"><b>https://www.udemy.com/course/desarrollo-web-completo-con-html5-css3-js-php-y-mysql/</b></a><br>Pero
                    actualmente mis conocimientos son: <br></p>
                <ul class="skills__realidad--lista flex flex-column">
                    <li>HTML (lo esencial)</li>
                    <li>CSS (lo esencial pero no me pidas peripécias, también estuve viendo algo de SASS)</li>
                    <li>JavaScript (Algo se)</li>
                </ul>
            </div>
            <p class="skills__realidad--notion"><br><br> Si quieres hacerte una idea de lo que estuve viendo te puedo dar acceso a mis apuntes de Notion.</p>
        </div>

    </main>

    <?=require_once("footer.inc.php")?>

</body>

</html>
