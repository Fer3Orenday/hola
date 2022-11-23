<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <link rel="stylesheet" href=""> -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100&display=swap" rel="stylesheet">
    <style>
        div {
            width: 25%;
            border: 8px dotted orange;
            margin: 0 auto;
            margin-top: 50px;
            padding: 15px;
            background-color: darkcyan;
            /* font-family;  */
            font-family: 'Archivo:wght@100', cursive;
            text-align: center;
            line-height: 25px;
        }

        p {
            font-size: 1.5em;
        }
    </style>
</head>

<h2>Hermosillo Orenday María Fernanda</h2>

<body>

    <?php

    echo "<div>";
    echo "<h1> Tabla del " . $_GET['num'] . "</h1>";
    $n = $_GET['num'];
    for ($x = 1; $x <= $_GET['hasta']; $x++) {
        echo "<p>" . $n . "x" . $x . "=" . $x * $n . "</p>";
    }

    echo "</div>"

    ?>



</body>

</html>