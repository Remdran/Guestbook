<?php


if ($_POST) {
    $comment = new Message();
    $comment->setName($_POST['name']);
    $comment->setComment($_POST['comment']);
    $comment->setDate(date('Y-m-d h:i:s'));

    $message->store($comment);
}

require("views/guestbook.view.php");