<?php
include "../vendor/autoload.php";

use App\Arr;

$arr = new Arr();

echo $arr->sumArr([1,2,3]);
echo $arr->mulArr([2,3]);

print_r($arr->mulArrNum([3,7,9],2));