<!DOCTYPE html>
<html>
<body>
<?php
if ($_POST) {

    $string = serialize($_POST);
    $f = fopen('car_users.txt', 'a');
    fwrite($f, $string . PHP_EOL);
    fclose($f);//receive data from form and write it to the file
}
//Создать класс ContactForm со свойствами, значения которых совпадают с названиями полей формы.
class ContactForm {
    public $firstname="firstname";
    public $email="email";
    public $phone="phone";
    public $message="message";
    public $gender="gender";
    public $country="country";
    public $date="date";
}
$arr = file('car_users.txt');
echo "List of participants: <br> --------------- <br>";
foreach ($arr as $v) {
    $v = unserialize($v);
    $a= new ContactForm();//Создать экземпляр класса ContactForm по массиву $_POST при отправке формы.
    $a->firstname=$v['firstname'];
    $a->email=$v['email'];
    $a->phone=$v['phone'];
    $a->message=$v['message'];
    $a->gender=$v['gender'];
    $a->country=$v['country'];
    $a->date=$v['date'];
    echo "<pre>";
    var_dump($a);
    echo "<pre/>";
}
//read data from the file and show it on the screen


//+В класс Car из предыдущих заданий добавить конструктор, который выводит сообщение Car created при создании нового экземпляра класса.
// +Создать скрипт обработчик контактной формы.
//+ Создать класс ContactForm со свойствами, значения которых совпадают с названиями полей формы.
// Создать экземпляр класса ContactForm по массиву $_POST при отправке формы.
?>
<a href="17. form_class_construct_destruct.php">"Register one more person"</a>
</body>
</html>
