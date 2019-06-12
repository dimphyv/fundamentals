<?php
require_once 'models/rss.php';
require_once 'models/message.class.php';

$msg = new message();
$feed = $msg->getAllMessages('messages');

$rss = new rss('mijn blog');
$rss->fetchRss($feed);
header("location:rss.xml");
