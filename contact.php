<?php
require('config.php');
function escape_string($sql){
    global $connection;
    return mysqli_real_escape_string($connection, $sql);
}

function query($sql){
    global $connection;
    return mysqli_query($connection, $sql);
}



if(isset($_POST['submit'])){
    $name = escape_string($_POST['name']);
    $email = escape_string($_POST['email']);
    $subject= escape_string($_POST['subject']);
    $message= escape_string($_POST['message']);
    $sql = "INSERT INTO `contact`(`id`, `name`, `email`, `subject`, `message`) VALUES ('','$name','$email','$subject','$message')";
    if(query($sql)){
        echo '<div class="alert alert-success">Informations envoyés</div>';

    }
    
}
?>