<?php

include __DIR__ . "/php/database.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ZCOOL+KuaiLe&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Dischi</title>
</head>
<body>

    <div class="container">
    
        <?php foreach ($db as $disk) { ?>

            <div class="disk">

                <div class="img_cont">

                    <img src="<?php echo $disk["poster"]?>" alt="album image">
                    
                </div>    

                <p>
                    <?php echo "TITLE: " . $disk["title"] . " <br/> ";?>
                </p>
                <p>
                    <?php echo "AUTHOR: " . $disk["author"] . " <br/> ";?>
                </p>
                <p>
                    <?php echo "GENRE: " . $disk["genre"] . " <br/> ";?>
                </p>
                <p>
                    <?php echo "YEAR: " . $disk["year"] . " <br/> ";?>
                </p>

            </div>

        <?php } ?>
        
    </div>
 
</body>
</html>