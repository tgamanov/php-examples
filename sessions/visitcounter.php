<?php
$count = isset($_COOKIE['count']) ? (int)$_COOKIE['count'] : 0;
$count++;
setcookie('count', $count, time() + 60 * 30 * 1 * 1, '/');//+secs*mins*hours*days = seconds from current time
?>
Hello! You visited this page <?=$count; ?> times. <br/>