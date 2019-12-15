<?php
    echo "<table style='border : 1px solid black'>";
    echo "<thead>";
    echo "<th style='border : 1px solid black'></th>";
    for ($i_head = 0; $i_head <= 12; $i_head++)
    {
        echo "<th style='border : 1px solid black'>$i_head</th>";
    }
    echo "</thead>";
    echo "<tbody>";
    for ($i_12 = 0; $i_12 <= 12; $i_12++)
    {   
        echo "<tr>";
        echo "<th style='border : 1px solid black'>$i_12</th>";
        for ($td = 0; $td <= 12; $td++)
        {
            $resultat = $td * $i_12;
            echo "<td style='border : 1px solid black'>$resultat</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
  