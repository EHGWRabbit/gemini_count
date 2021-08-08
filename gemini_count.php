

<?php
//функция подсчета близнецов числе в массиве
function gemini_count($argument_number, $number){
    $some_count = 0;
    
    //воспользуемся циклом for 
    for ($i = 0; $i < $number - 1; $i ++){
        //если последующие елементы массива одинаковы то есть:
        if($argument_number[$i] == $argument_number[$i + 1])
            $some_count++;
    }
    //возвращаем это число
    return $some_count;
}

//примеры
$argument_number = array(1, 3, 3, 4, 5, 6, 6, 6, 6, 7, 8, 88, 88, 66, 66);
$number = sizeof($argument_number);
echo gemini_count($argument_number, $number);
?>