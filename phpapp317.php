<?php
for($i = 2; $i <= 6; $i = $i + 1){
    
    if($i % 2 === 0 ){
        continue;
        echo $i, "<br />";
    }
echo $i, "<br />";
}