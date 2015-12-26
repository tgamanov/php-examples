<?php
/*Логическое умножение - это бинарный оператор, который возвращает true, только если оба значения, к которым он применен, равны true. Для лучшего понимания, можно ассоциировать эту операцию с обычным умножением*/
$a = true && false; // 1 * 0 = 0 (false)
$a = false && true; // 0 * 1 = 0 (false)
$a = false && false; // 0 * 0 = 0 (false)
$a = true && true; // 1 * 1 = 1 (true)
/*Логическое сложение - это бинарный оператор, который возвращает false, только если оба значения, к которым он применен, равны false. Для лучшего понимания, можно ассоциировать эту операцию с обычным сложением. Тогда*/
$a = true || false; // 1 + 0 = 1 (true)
$a = false || true; // 0 + 1 = 1 (true)
$a = false || false; // 0 + 0 = 0 (false)
$a = true || true; // 1 + 1 = 2 (true)
/*Строгое логическое сложение - это бинарный оператор, который возвращает true, только примененный к разным значениям. Для лучшего понимания, можно ассоциировать эту операцию с взятием остатка от деления сумы значений на 2.*/
$a = true xor false; // (1 + 0) % 2 = 1 (true)
$a = false xor true; // (0 + 1) % 2 = 1 (true)
$a = true xor true; // (1 + 1) % 2 = 0 (false)
$a = false xor false; // (0 + 0) % 2 = 0 (false)

$a = true;
$b = !$a; // $b is false now
$c = $a && $b; // false
$d = $a || $b; // true
$e = $a xor $b; // true
$f = true xor true; // false

//var_dump($a, $b, $c, $d, $e, $f);

//echo '<br>';

$a = true;
$b = false;
$c = $a && ($b || true); // same as true && true and we got true

//var_dump($c);

//Вычислить значение выражения: false && true || false && true || !false && true
//Вывести на экран true/false в зависимости о того, делится переменная $x на 2 или нет.
//echo "false && true || false && true || !false && true =".false && true || false && true || !false && true;
//echo "<br>";
$x = 100;
echo "x = {$x} ";
echo "<br>";
$y  = $x % 2;
if ($y = 1) {
	echo "norm devision on 2 is TRUE";
} else {
	echo "norm devision on 2 is FALSE";
};