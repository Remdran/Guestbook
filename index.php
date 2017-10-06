<?php       
include("DatabaseConfig.php");
$link = new DatabaseConfig("localhost", "guestbook", "root", "");
$link->connect();
include("Message.php");
include("public/guestbook.php");

