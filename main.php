<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Визитка на php</title>
</head>
<body>
    <div class='header'>
        <?php include 'menu.inc.php'?>
    </div>
   
    <div class="mainInfo">
        
        <div class=logo>
            <?php include 'logo.inc.php'?>
        </div>

        <div class="data">
            <p> 
                <?php echo $hello_text?>
            </p>
            <p> Меня зовут
                <?php echo $name, ' ', $surname ?>
            </p>
            <p>
                Мне <?php echo $age, " лет ", 'и я из города ', $city ?>
            </p>
        </div>
    </div>

    <div class="knowelege">
        <?php include "knowelege.inc.php"?>
    </div>

    <div class="footer">
        <?php include "footer.inc.php"?>
    </div>

    </div>
</body>
</html>