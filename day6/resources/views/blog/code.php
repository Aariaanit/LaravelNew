<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Welcome PHP</h1>
    <?php
        for($x=0;$x<=10;$x++){
            
    ?>
    <p><?php echo $x ?></p>
    <?php
            echo "<br>";
        }
    ?>
</body>
</html>