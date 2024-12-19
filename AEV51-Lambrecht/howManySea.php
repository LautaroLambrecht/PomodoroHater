<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    </style>
    <title>Metricas Marinas</title>
</head>
<body>
    
</body>
</html>

<?php

    function howManySea (array $map): array {

        $totalSea = 0;
        $affectedSea = 0;

        
        for ($i = 0; $i < count($map); $i++){
            for ($j = 0; $j < count($map[$i]); $j++){
                if ($map[$i][$j] == "S"){
                    $affectedSea++;
                }
                if($map[$i][$j] == "~" || $map[$i][$j] == "S"){
                    $totalSea++;
            }
        }

        }

        return array ($totalSea,$affectedSea);
    }



?>