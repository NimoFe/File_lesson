<?php

//$file = fopen(__DIR__ . '/file.txt', 'r');
//for ($i = 0; $i < 4; $i++) {
//    echo fgets($file);
//    echo '<br>';
//}
//fclose($file);

//header('Content-type: text/html; charset=utf-8');
//$file = fopen(__DIR__ . '/file.txt', 'r');
//while (!feof($file)) {
//    echo fgetc($file);
//
//}
//fclose($file);

//$file = fopen(__DIR__ . '/file2.txt', 'w+');
//for ($i = 1; $i < 101; $i++) {
//    fputs($file, $i . PHP_EOL);
//}
//fclose($file);

//$file = fopen(__DIR__ . '/file3.txt', 'a');
//fputs($file, 'abc' . PHP_EOL);
//fclose($file);

$data = file_get_contents(__DIR__ . '/file.txt');
echo '<br>';
echo $data;
