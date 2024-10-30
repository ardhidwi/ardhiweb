<?php
$rows = 5;
for ($i = 1; $i <= $rows; $i++) {
    // Print spaces
    for ($j = $i; $j < $rows; $j++) {
        echo " ";
    }
    // Print stars
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "\n";
}
?>
