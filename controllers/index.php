<?php


if ($_POST) {
    $message->store();
}

require("views/guestbook.view.php");