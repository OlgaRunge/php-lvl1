<?php
//ДЗ к 1-му уроку
//Операции сравнения
 $a = 5; //тип integer
 $b = '05'; //тип строка
var_dump($a==$b);
/*мы сравниваем переменные a и b. равны ли они друг другу после преобразования типов, т.е. b теперь имеет значение число 5 и тип integer, 5=5 что истинно (true), с помошью функции var_dump выводим true, a не 1*/

var_dump((int)'012345');
//12345 так как мы привели тип string (cтрока) к типу integer(целое число)

var_dump((float)123.0 === (int)123.0);
/* === оператор сравнения без приведения типов, тип float - числа с плавающей точкой, тип 
integer - целое число, типы не равны поэтому false */

var_dump((int)0 === (int)'hello, world');
/* типы равны и обе переменные не содержат числового значения, следовательно true.. Но если мы напишем в строке '1 hello, world' будет false (появилось число 1). Вопрос: почему если мы напишем 1 в конце строки
'hello, world 1' она уже в число не преобразуется?*/

?>

<br>
<br>
<?php
$a = 1;
$b = 2;

echo "a: $a" . '<br>';
echo "b: $b" . '<br>';


$b = $a--;//теперь b равно 1
echo "теперь b: $b" . '<br>'; 
$a = ++$b; //а равно 2 )
echo "теперь a : $a" . '<br>';

//а если погуглить, то..
?>
<br>

<?php
$a=20; 
$b=25; 

echo "если a: $a" . '<br>';
echo "если b: $b" . '<br>';
echo "то номер с инкрементом не прокатит" . '<br>';
 
$a=$a+$b; 
$b=$a-$b; 
$a=$a-$b; 
 
 
echo "теперь а: $a" . '<br>';
echo "теперь b: $b";
?>