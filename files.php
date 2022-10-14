<?php
//$file = fopen(__DIR__ . '/file.txt', 'r');
//for ($i = 0; $i < 4; $i = $i + 1) ;
//{
//    echo fgetc($file);
//    echo '<hr>';
//}
//fclose($file);

$file = fopen(__DIR__ . '/file.txt', 'r');
while (!feof($file)) {
    echo fgetc($file);
    echo '<hr>';
}
fclose($file);