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
        <div class="presentacion flex">
            <div class="presentacion__imagen"><img src="img/trabajos.jpg" alt="imagen presentacion"></div>
            <div class="presentacion__texto flex">
                <h1>Trabajos</h1>
                <h1>realizados</h1>
                <div class="presentacion__parrafo">
                    <p>Trabajos web realizados la verdad es que bien pocos, como mucho puedo mostrar esto <br> que hice mientras hacía el curso de Udemy que comento en <a href="skills.html"><b>Skills</b></a></p>
                    <ul>
                        <li><a target="_blank" href="https://ivanseccion7.netlify.app/">https://ivanseccion7.netlify.app/</a></li>
                        <li><a target="_blank" href="https://ivanseccion5.netlify.app/">https://ivanseccion5.netlify.app/</a></li>
                    </ul>
                </div>
            </div>

        </div>

    </main>

    <?=require_once("footer.inc.php")?>


</body>

</html>
