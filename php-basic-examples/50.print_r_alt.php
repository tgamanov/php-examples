<?php
/**
 * @param array $m
 * @param int $pos
 */
function print_arr (array $m)
{echo"Array "."<br>"."("."<br>";
    foreach ($m as $key => $value) {
        if (is_array($value)) {
            echo "[" . $key . "]" . " => ";echo "<div style='margin-left:30px;'>";print_arr($value);echo "</div>";continue;
        }
        echo "[" . $key . "]" . " => ". $value . "<br>";
    }
    echo ")";
}

$mi = array ("a",222,333333,4,5,6,7,array(1,2,3,4,5,array(1,2,3,4,5)),5,6,7,8,9);
echo "my function:"."<br>";
print_arr($mi);
echo"<br>";
echo "orriginal function:"."<br>";
echo"<pre>";
print_r($mi);
echo"</pre>";
?>