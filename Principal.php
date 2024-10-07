<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="post.php">
    <style>
        .titulo{
            background-color: #433e3e;
            color:white;
            padding: 2rem;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 2rem;
            text-align: center;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 200px;
            height: 100em;
            background-color: #f1f1f1;
            position: fixed;
        }

        li a {
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
            font-family: Arial, Helvetica, sans-serif;
        }

        li a:hover {
            background-color: #555;
            color: white;
        }
    </style>
</head>
<body>

<nav class="titulo">Mi Blog</nav>
<aside>
    <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Sobre mi</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contacto</a></li>
    </ul>
</aside>

<section>
    <?php
    require_once 'post.php';
    $pubicacion=new Publicacion('Mi primer viaje','sdfjsoif',9);
    $pubicacion->crearPost();

    ?>
</section>

</body>
</html>