<?php 
    $arrays = [200, 204, 173, 98, 171, 404, 459];
    foreach ($arrays as $value) {
        // You can process $value here, for example:
        
        if ($value % 2 == 0) {
            echo $value . "=>est paire <br/>";
        }else {
            echo $value . "=>est impaire <br/>";
        }

    }
?>