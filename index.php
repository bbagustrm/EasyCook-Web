<?php 

require_once "product.php";
$Makanan = new Makanan();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>EasyCook</title>
</head>
<body>
    <div class="header">
        <div class="logo">
            <h1>EasyCook</h1>
        </div>
        <div class="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">List</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="welcome"></div>
        <div class="content">
            <?php for($i = 0; $i < count($Makanan->product);$i++) {?>
            <div class="content-box">
                <div class="content-img" style="background-image: url('<?php echo $Makanan->product[$i][0];?>');""></div>
                <div class="content-des">
                    <h1><?php echo $Makanan->product[$i][1]; ?></h1>
                    <p class="rating"><span>★</span><?php echo $Makanan->product[$i][2]; ?></p>
                    <?php if($Makanan->product[$i][3] == "Sulit") {?>
                        <p class="dificulty">Kesulitan : <span style="background-color: #cb2b1e;"><?php echo $Makanan->product[$i][3]; ?></span></p>
                    <?php }elseif($Makanan->product[$i][3] == "Sedang"){?>
                        <p class="dificulty">Kesulitan : <span style="background-color: #ffa700;"><?php echo $Makanan->product[$i][3]; ?></span></p>
                    <?php }elseif($Makanan->product[$i][3] == "Mudah"){?>
                        <p class="dificulty">Kesulitan : <span style="background-color: #008744;"><?php echo $Makanan->product[$i][3]; ?></span></p>
                    <?php }?>
                    <div class="button"><a href="#">Pelajari</a></div>
                </div>
            </div>
            <?php };?>
        </div>
    </div>
    <div class="footer">
        <p>© 2023 EasyCook.com, All rights reserved</p>
    </div>
</body>
</html>