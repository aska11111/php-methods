<pre>
<?php 
//Прокошева самостоятельная 1 вариант

// 1.	Создайте массив arrRandom и заполните его на 10 элементов случайными числами в промежутке [35; 42].

$arrRandom = [];
// $arrRandom = range(35,42);
for($i=0;$i<10;$i++){
$arrRandom[] = rand(35,42);
}

print_r($arrRandom);

// 2.	Выведите элементы этого массива в строку через «; ».

echo(implode(';', $arrRandom));
echo("<br>");

// 3.	Оставьте в массиве только уникальные значения, определите их количество

$arrUnique = array_unique($arrRandom);
print_r($arrUnique);
echo("Кол-во = ".count($arrUnique));
echo("<br>");

// 4.	Увеличьте каждый элемент массива в 3 раза

$arrRandom4 = [];

for($i=0; $i<count($arrRandom); $i++){
    $arrRandom4[$i] = $arrRandom[$i]*3;
}
    
print_r($arrRandom4);


// 5.	Создайте новый массив arrRange и заполните его числами в промежутке [-50; 50] с шагом=8.

$arrRange = range(-50,50,8);

// Перемешайте элементы этого массива	

shuffle(($arrRange));


// 6.	Определите сумму положительных четных элементов массива arrRange

$res6 = array_filter($arrRange, fn($item) => $item%2==0 && $item > 0);

print_r(array_sum($res6));


// 7.	Определите произведение элементов массива arrRange, кратных 3 или 5

$res3and5 = array_filter($arrRange, fn($item) => $item%3==0 || $item %5== 0);

echo(array_product($res3and5));
echo("<br>");



// 8.	Объедините массивы arrRange и arrRandom двумя способами

$arr1 = array_merge($arrRandom,$arrRange);
$arr2 = $arrRandom+$arrRange;

// 9.	Выведите минимальные элементы массива, полученного в задании №9 

echo(min($arrRandom));

foreach($arrRandom as $item){
    if($item == min($arrRandom)) echo ($item."<br>");
};

echo("<br>");

// 10.	В массиве arrRandom вместо 5 и 6 элементов разместите элементы: 1000, 2000, 3000

array_splice($arrRandom, 5, 2, [1000, 2000, 3000]);

print_r($arrRandom);


// 11.	Имеется строка вида: «А роза упала на лапу Азора». Сформируйте массив, элементами которого станут слова этой строки

$str = "А роза упала на лапу Азора";
$arr = explode(' ',$str);
print_r($arr);

// 12.	Удалите последний элемент массива arrRandom

array_pop($arr);
print_r($arr);


//14
$arr14 = [
"white" => "белый",
"yellow" => "желтый",
"red" => "красный",
"green" => "зеленей",
];

 ['white' => $white, 'yellow' => $yellow, 'red' => $red, 'green' => $green]=$arr14;

extract($arr14);

//15
$arr15 = [
    [
        "berry" => "виноград", 
        "color" => "зеленый", 
        "weight" => 1.5
    ],
    [
        "berry" => "земляника",
        "color" => "красный", 
        "weight" => 0.7
    ],
    [
        "berry" => "blueberry", 
        "color" => "фиолетовый", 
        "weight" => 0.3
    ],
];



uasort($arr15,function($a, $b){
    if($a["weight"] == $b["weight"]) return 0;
    if($a["weight"] < $b["weight"]) return 1;
    if($a["weight"] > $b["weight"]) return -1;
});

print_r($arr15);

?>
</pre>