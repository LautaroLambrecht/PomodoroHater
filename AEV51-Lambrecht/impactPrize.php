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
    <title>Daños economicos</title>
</head>
<body>
<?php 

require_once "data.php";
require_once "analyzeImpact.php";
require_once "fullImpacts.php";
require_once "fullColor.php";

function impactPrize (array $map): int {

    $daños = 0;

    for ($i = 0; $i < count($map); $i++){
        for ($j = 0; $j < count($map[$i]); $j++){
            if($map[$i][$j] == "C"){
                $daños += 200000;
            }
            if($map[$i][$j] == "X"){
                $daños += 50000;
            }
        }
    }
    
    return $daños;
}

echo '<p>Daños economicos: '.impactPrize(fullImpacts(analyzeImpact($pomodoroHaters, $impacts),$impacts)).'€</p>';
fullColor(fullImpacts(analyzeImpact($pomodoroHaters, $impacts),$impacts));
echo '<div>';
echo '<button onclick="window.location.href=\'maps.php\'">Volver a metricas publicas</button>';
echo '</div>';
echo '<div>';
echo '<button onclick="window.location.href=\'index.php\'">Volver a inicio</button>';
echo '</div>';

?>
</body>
</html>