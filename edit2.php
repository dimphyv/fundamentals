<?php
require_once 'models/message.class.php';


//if(isset($_POST['submit'])){
    $naam = $_POST['name'];
    $titel = $_POST['titel'];
    $bericht = $_POST['message'];
    $id = $_GET['message_id'];
    $new = new message();
    $new->updatePostById('messages', $naam, $titel, $bericht, $id);
    header("location: index.php");
   // }
?>

