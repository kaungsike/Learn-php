<?php

// touch("myName.txt");

// mkdir("myTest",0777,true);

// var_dump(is_file("myName.txt"));
// var_dump(is_dir("myTest"));

// var_dump(file_exists("mysfName.txt"));

// print_r(scandir("."));

// unlink("myName.txt");

// rmdir("myTest");

// pathinfo(1);

// pathinfo(".","PATHINFO_ALL");

$fileName = "my.txt";

$fileStream = fopen($fileName,"r");

// echo fgets($fileStream);
// echo fgets($fileStream);
// echo fgets($fileStream);
// echo fgets($fileStream);

// var_dump(feof($fileStream));

while(!feof($fileStream)){
    echo fgets($fileStream);
}



// if(file_exists($fileName)){
//     touch($fileName);
// }

// $fileStream = fopen($fileName,"a");


// fwrite($fileStream,"Kaung Sike");
// fwrite($fileStream," Par");
// fwrite($fileStream," Byar");

fclose($fileStream);