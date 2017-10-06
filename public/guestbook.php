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
       
                
        <?php
            $sql = $link->query("*", "messages");
            
            foreach ($sql as $row) { 
        ?>
                <article>
                    <h4>
                        <?= $row['user_name'] . " " . $row['created_at'] . " Posted: " ?>
                    </h4>
                    <div class="body"><?=  $row['comment'] . "<hr>" ?></div>
                </article>
            <?php
                }
            ?>    

    </div>
</body>
</html>
