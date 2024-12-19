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
        div{
            display: flex;
            justify-content: center;
        }
        button{
            margin: 5px;
        }
    </style>
    <title>Personas Afectadas</title>
</head>
<body>
    <?php 

        require_once "data.php";
        require_once "fullColor.php";
        function analyzeImpact (array $map, array $impact): array{
            for ($i = 0; $i < count($impact); $i++){
                $impactX = null;
                $impactY = null;
                for ($j = 0; $j < count($impact[$i]); $j++){
                if (!is_numeric($impactX)){
                    $impactX = $impact[$i][$j];
                }   
                else {$impactY = $impact[$i][$j];
                }
                if (is_numeric($impactX) && is_numeric($impactY)){
                    if ($map[$impactX][$impactY] == "A"){
                        $map[$impactX][$impactY] = "C";
                    }
                }
            }
        }
            return $map;
        }

        function fullImpacts (array $map, array $impact){

            for ($i = 0; $i < count($impact); $i++){
                $impactX = null;
                $impactY = null;
                for ($j = 0; $j < count($impact[$i]); $j++){
                if (!is_numeric($impactX)){
                    $impactX = $impact[$i][$j];
                }   
                else {$impactY = $impact[$i][$j];
                }
                if (is_numeric($impactX) && is_numeric($impactY)){
                    if ($map[$impactX][$impactY] == "0"){
                        $map[$impactX][$impactY] = "X";
                    }
                    if ($map[$impactX][$impactY] == "~"){
                        $map[$impactX][$impactY] = "S";
                    }
                }
            }
        }

            return $map;
        }

        echo "<p>Este mapa muestra los impactos en zonas urbanas de la isla: </p><br>";
        fullColor(analyzeImpact($pomodoroHaters,$impacts));
        echo "<p>Mapa con impactos en mar y territorio NO habitado</p>";
        fullColor(analyzeImpact(fullImpacts($pomodoroHaters,$impacts),$impacts));
        echo '<div>';
        echo '<button onclick="window.location.href=\'maps.php\'">Volver a metricas publicas</button>';
        echo '</div>';
        echo '<div>';
        echo '<button onclick="window.location.href=\'index.php\'">Volver a inicio</button>';
        echo '</div>';

    ?>
</body>
</html>