<?php
$status = true;//will be true only if login and pass correct
$db_data = array(//imitation of data from DB
    'username' => 'taras',
    'password' => '123',
);
if ($_POST) {//check if form were submited
    $username = isset($_POST['username']) ? $_POST['username'] : null;//yes assign it to vars
    $password = isset($_POST['password']) ? $_POST['password'] : null;
} elseif ($_COOKIE) {//form has not submited - check if we have cookie with information about customer
    $username = isset($_COOKIE['username']) ? $_COOKIE['username'] : null;
    $password = isset($_COOKIE['password']) ? $_COOKIE['password'] : null;
} else {
    die("Restricted area!");//no cookie? go away
}
foreach ($db_data as $k => $v) {//check if login and pass match
    $status = $status && ($$k === $v);
}
if ($status) {
    if (isset($_POST['remember'])) {
        setcookie('username', $username, time() + 60*60*24*366);
        setcookie('password', $password, time() + 60*60*24*366);
    }
    echo 'Logged in!';
}
else {
    echo "Fail";
}