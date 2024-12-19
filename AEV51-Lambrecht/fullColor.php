<?php 

function fullColor($map) {
    echo "<div style='display: flex; flex-direction: column; align-items: center;'>";

    for ($i = 0; $i < count($map); $i++) {
        $cont = 0;
        echo "<div style='display: flex;'>";

        for ($j = 0; $j < count($map[$i]); $j++) {
            $color = "";
            if ($map[$i][$j] === "0") $color = "#D2B48C";
            if ($map[$i][$j] === "~") $color = "#87CEEB"; 
            if ($map[$i][$j] === "A") $color = "#A9A9A9"; 
            if ($map[$i][$j] === "X") $color = "#FFA07A"; 
            if ($map[$i][$j] === "C") $color = "#FF4500";
            if ($map[$i][$j] === "S") $color = "#4682B4"; 

            echo "<span style='display: inline-block; width: 20px; height: 20px; background-color: $color; text-align: center; line-height: 20px; margin: 1px;'>";
            echo $map[$i][$j];
            echo "</span>";

            $cont++;

            
            if ($cont == 24) {
                echo "</div><div style='display: flex;'>";
                $cont = 0;
            }
        }

        echo "</div>"; 
    }

    echo "</div>"; 
}


?>