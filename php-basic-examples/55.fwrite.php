<?php
//Создать текстовый файл, в котором будет 10 строк. В первой строке записать 1, во второй 22, в третьей 33, ..., в десятой - десять десяток
$f = fopen('test.txt', 'w');
fwrite($f, "1". PHP_EOL);
for ($i=2;$i<=9;$i++) {
fwrite($f, $i.$i.PHP_EOL);
}
fwrite($f, "десять десяток". PHP_EOL);
fclose($f);
echo file_get_contents("test.txt");
// check the file!