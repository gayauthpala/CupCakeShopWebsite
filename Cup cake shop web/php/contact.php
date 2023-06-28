<?php
$connection = mysqli_connect('localhost','root','','loopydp1');

if(isset($_POST['send'])){
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    $sql = "insert into contactinfo(`Name`, `Email`, `Message`) values ('$name','$email','$message')";
    $result = mysqli_query($connection,$sql);

    header('location:../contact.html');
}else{
    echo 'something went wrong please try again!';
}
?>