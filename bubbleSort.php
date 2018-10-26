<?php
/**
 * Creator: xie
 * Time: 2018/10/26 13:56
 */

/**
 * 冒泡排序
 * @param $array array 待排序数组
 * @return array 排序后数组
 */
function bubbleSort($array){
    $len = count($array);
    $times = 0;
    for($i = 0; $i<$len-1;$i++){
        for ($j=0;$j<$len-$i-1;$j++){
            if ($array[$j] > $array[$j + 1]){
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j+1] = $temp;
                $times++;
            }
        }
    }
    echo "after sort:" . json_encode($array) . ',changed ' . $times . ' times';
    return $array;
}


$array = [1,3,5,7,9,2,4,6,8,10];

bubbleSort($array);


