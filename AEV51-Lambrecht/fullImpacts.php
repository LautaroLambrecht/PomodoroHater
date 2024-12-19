<?php 

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

?>