<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        div{
            display: flex;
            justify-content: center;
        }
        button{
            height: 20px;
            margin: 5px;
            margin-top: 180px;
        }
    </style>
    <title>Metricas Publicas</title>
</head>
<body>
    
    <?php 

        echo '<div>';
        echo '<button onclick="window.location.href=\'impacts.php\'">Mapas</button>';
        echo '<div>';
        echo '<button onclick="window.location.href=\'affectedPeople.php\'">Personas Afectadas</button>';
        echo '<div>';
        echo '<button onclick="window.location.href=\'impactPrize.php\'">Daños economicos</button>';
        echo '<div>';
        echo '<button onclick="window.location.href=\'index.php\'">Volver a inicio</button>';
        echo '</div>';

    ?>
</body>
</html>