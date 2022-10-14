<?php
$file = fopen(__DIR__ . '/file.txt', 'r');
for ($i = 0; $i < 4; $i = $i + 1); {
    echo fgetc($file);
    echo '<hr>';
    echo '<hr>';


}
fclose($file);