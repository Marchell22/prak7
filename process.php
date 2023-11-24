<?php
include_once 'Person.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    $person = new Person();
    $person->addPerson($name, $age, $address);
}

header('Location: index.php');
exit();
?>
