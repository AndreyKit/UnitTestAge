<?php


namespace App;


use phpDocumentor\Reflection\Types\Integer;

class Arr
{
    protected $arr;

    public function sumArr(array $arr): int
    {
        return array_sum($arr);
    }

    public function mulArr(array $arr): int
    {
        return array_product($arr);
    }

    public function mulArrNum(array $arr, int $n): array
    {
        $arr1 = [];
        foreach ($arr as $value){
           $arr1[]  = $value * $n;
        }
        return  $arr1;
    }
}