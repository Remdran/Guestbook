<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Guest Book</title>
</head>
<body>   
    <div class="container">

        <?php foreach ($message->getComment() as $comment) { ?>
            <article>
                <?= $comment->user_name; ?>
                <?= $comment->created_at; ?>
                <?= $comment->comment; ?>
            </article>
            <hr>
        <?php } ?>

        <form method="POST" action="/">
            <label for="name">Name:</label>
            <input type="text" name="name">
            <label for="comment">Comment:</label>
            <input type="text" name="comment">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
