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
        div {
            display: flex;
            flex-direction: row;
            justify-self: center;
        }
        button{
            display: flex;
            margin: 5px;
        }
    </style>
    <title>Personas afectadas</title>
</head>
<body>
    <?php
    
    require_once "data.php";
    require_once "fullImpacts.php";
    require_once "analyzeImpact.php";

        function howManyCOl (array $map): array {

            $needAssistance = 0;
            $medicineLitres = 0;

            for($i = 0; $i < count($map); $i++){
                for ($j = 0; $j < count($map[$i]); $j++){
                    if ($map[$i][$j] == "C"){
                        $needAssistance += 5000;
                    }
                }
            
            }
            
            $medicineLitres = $needAssistance * 0.025;

            return array ($needAssistance, $medicineLitres);
        }
        
        list($needAssistance, $medicineLitres) = howManyCOl(analyzeImpact($pomodoroHaters,$impacts));
        echo '<p>Se necesitan ' . $medicineLitres . ' litros de colirio para ' . $needAssistance . ' personas.</p>';
        echo '<div>';
        echo '<button onclick="window.location.href=\'maps.php\'">Volver a metricas publicas</button>';
        echo '</div>';
        echo '<div>';
        echo '<button onclick="window.location.href=\'index.php\'">Volver a inicio</button>';
        echo '</div>';
        ?>


</body>
</html>