<?php

$config = require("config.php");
require("database/Connection.php");
require("database/QueryBuilder.php");
require("MessageController.php");
require("routes.php");

$pdo = Connection::make($config['database']);
$query = new QueryBuilder($pdo);
$message = new MessageController($query);