<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 06/01/2018
 * Time: 14:54
 */
require 'DataBase.php';
$servername = "localhost";
$db='funread';
$username = "root";
$password = "";
 $data=new DataBase($servername,$db,$username,$password);
 $conn=$data->connect();

$email = isset($_POST['email_input']) ? $_POST['email_input'] : '';
if (empty($email))
    $errors = 'email is empty';

if(empty($errors)){
    //$email=$data->dataVerification($email);
    $query='insert into subscribers (emails) values (?)';
    $statement=$conn->prepare($query);
    $statement->execute(array($email));
}

else{
    echo $errors;
}





