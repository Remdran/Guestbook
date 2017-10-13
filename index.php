<?php
require("database/Connection.php");
require("MessageController.php");
require("routes.php");

$pdo = Connection::make();
$message = new MessageController($pdo);

require("public/guestbook.view.php");
