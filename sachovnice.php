<table style="margin:auto; border-width:2px;border-style:solid;border-color:black;">
    <?php
        for($row = 1;$row<=8;$row++){
            for($col = 1;$col<=8;$col++){
                $cell = $row + $col;
                if($cell % 2 == 0){
                    echo "<td style='border:0px solid; height:90px; width:90px; background-color:fff; border-width:2px;border-style:solid;border-color:black;'> </td>";
                }else{
                    echo "<td style='border:0px solid; height:90px; width:90px; background-color:000'> </td>";
                }
            }   echo "</tr>";
        }

    ?>
</table>
