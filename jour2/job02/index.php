<?php

//boucle de 0 a 1337
for ($i = 0; $i <= 1337; $i++) {
    //condition pour ignorer certains nombres
    if ($i == 26 || $i == 37 || $i == 88 || $i == 1111 || $i == 3233) {
        echo "<br>";
        continue;
    }else {
        echo "<br>" . $i;
    }
}

?>
