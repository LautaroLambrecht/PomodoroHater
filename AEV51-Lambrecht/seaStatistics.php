<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        p{
            display: flex;
            justify-content: center;
        }
        .button{
            display: flex;
            justify-content: center;
            margin-left: 10px;
        }
        button{
            margin: 5px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php 

    require_once "data.php";
    require_once "fullImpacts.php";
    require_once "analyzeImpact.php";
    require_once "howManySea.php";
    require_once "fullColor.php";

    echo '<p>Mapa con impactos maritimos: </p>';
    fullColor(analyzeImpact(fullImpacts($pomodoroHaters, $impacts), $impacts));
    echo '<div class="button">';

    echo '<form action="homeONG.php" method="post">';
    echo '<input type="hidden" id="user" name="user" value="Admin">';
    echo '<input type="hidden" id="pass" name="pass" value="1234">';
    echo '<button type="submit">Volver a home</button>';
    echo '</form>';


    echo '</div>';
    echo '<div class="button">';
    echo '<button onclick="window.location.href=\'index.php\'">Volver a inicio</button>';
    echo '</div>';

    ?>
</body>
</html>