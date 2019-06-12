
<?php
require_once 'models/message.class.php';

if (isset($_GET['message_id'])){
    $id = $_GET['message_id'];
    $message = new message();
    $message->deletePostById('messages', $id );
    header("location: index.php");
    }




