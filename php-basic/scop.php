<?php

$x = "xxx\n";

const MY_NAME = "Kaung Sike\n";

function run(){
    global $x;

    static $z = 5;

    echo $z."\n";

    $z++;

    $y= "yyy\n";
    // echo $y;
    // echo $x;
    // echo MY_NAME;
}

// echo $y;

run();
run();
run();