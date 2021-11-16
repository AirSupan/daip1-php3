<?php
$total = 0;

    for($i =1; $i <=4; $i=$i+1):
        echo $i;
        $total = $total + $i;
        echo "<br/>",$total;
    endfor;
?>