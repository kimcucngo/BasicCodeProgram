<?php
// Draw art
?>
<table width = "100%" border = "1" cellpadding = "0">
    <tr>
        <td></td>
        <?php
        for ($row = 'a'; $row <= 'h';$row++){
            echo '<td>'.$row.'</td>';
        } ?>
    </tr>
    <?php
    $index = 8;
    for ($row = 1; $row <= 8; $row++){?>
    <tr>
        <td>
            <?php
            echo $index; ?>
        </td>
        <?php
            for ($col = 1; $col <= 8; $col++){
                if ($row %2 != 0){
                    if ($col %2 != 0){
                        echo '<td style = "background:#fff; width: 12%; height: 100px;"></td>';
                    }else{
                        echo '<td style = "background:#000; width:12%; height:100px;"></td>';
                    }
                }else{
                    if ($col %2 == 0){
                        echo '<td style = "background:#fff; width: 12%; height: 100px;"></td>';
                    }else{
                        echo '<td style = "background:#000; width:12%; height:100px;"></td>';
                    }
                }
                
             } ?>
        </tr>
        <?php 
        echo $index--;
        } ?>
</table>
