<?php

$config = require 'config.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'controllers/MessageController.php';

$pdo = Connection::make($config['database']);
$query = new QueryBuilder($pdo);
$message = new MessageController($query);

require 'controllers/index.php';
