<?php
include("DatabaseConfig.php");
$link = new DatabaseConfig("localhost", "guestbook", "root", "");
$link->connect();
include("MessageController.php");
$message = new MessageController($link);
include("public/Guestbook.php");
include("routes.php");

