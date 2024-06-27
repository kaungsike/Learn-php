<?php

// $weight =(string) 158.98;

// var_dump($weight);


// $car = (object) [
//     "id" => 11123,
//     "model" => "Formula 1",
//     "brand" => "Ferrari",
//     "price" => 14.6."M"
// ];


// var_dump($car);

// print($car->model);

// $x =(float) 2;

// var_dump($x);


// print($car["model"]);


// function area(int $w,int $h) {
//     return $w*$h." m sqr";
// }
// echo area(55,5);

function sun(array $arr):int {
   return array_sum($arr);
};

print_r(sun(["a","b","c"]));