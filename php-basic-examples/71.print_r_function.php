<?php
function array ($data,$level=""){
    if (is_array($data)){
        foreach($data as $key => $val){
            if (is_array($val)){
                $level2=$level."";
                array2fildes($val,$level2);
            } else {
                echo $level.$key.' => '.$val;
            }

        }

    }
    echo "<br>";
}

$data = array(
    array(
        "title" => "Rear Window",
        "director" => "Alfred Hitchcock",
        "year" => 1954
    ),
    array(
        "title" => "Full Metal Jacket",
        "director" => "Stanley Kubrick",
        "year" => 1987
    ),
);

array2fildes($data);
echo "<br>";
array ($data);
?>