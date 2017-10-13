<?php

require("database/Connection.php");
require("database/QueryBuilder.php");
require("MessageController.php");
require("routes.php");

$pdo = Connection::make();
$query = new QueryBuilder($pdo);
$message = new MessageController($query);