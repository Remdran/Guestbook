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

        <?php foreach ($message->index() as $index) { ?>
            <article>
                <?= $index['user_name']; ?>
                <?= $index['created_at']; ?>
                <?= $index['comment']; ?>
            </article>
            <hr>
        <?php } ?>

        <form method="POST" action="/routes.php?create=true">
            <label for="name">Name:</label>
            <input type="text" name="name">
            <label for="comment">Comment:</label>
            <input type="text" name="comment">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
