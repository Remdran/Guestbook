<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guest Book</title>
</head>
<body>   
    <?php 
        $sql = $link->query("*", "messages");

        foreach($sql as $row) {
            echo $row['user_name'] . $row['created_at'] . "Posted: " . $row['comment'] . "<br>";
        }
    ?>    

    </body>
</html>
