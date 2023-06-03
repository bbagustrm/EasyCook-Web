<?php 

require_once "product.php";
$Makanan = new Makanan();
$Minuman = new Minuman();

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
            <h1><a href="index.php">EasyCook</a></h1>
        </div>
        <div class="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="welcome"></div>
        <div class="filter">
            <a class="filter-makanan">Makanan</a>
            <a class="filter-minuman">Minuman</a>
        </div>
        <div class="content makanan">
            <?php foreach($Makanan->getProduct() as $key => $value) {?>
            <div class="content-box">
                <div class="content-img" style="background-image: url('<?php echo $value[1];?>');""></div>
                <div class="content-des">
                    <h1><?php echo $key; ?></h1>
                    <p class="rating"><span>★</span><?php echo $value[0]; ?></p>
                    <?php if($value[2] == "Sulit") {?>
                        <p class="dificulty">Kesulitan : <span style="background-color: #cb2b1e;"><?php echo $value[2]; ?></span></p>
                    <?php }elseif($value[2] == "Sedang"){?>
                        <p class="dificulty">Kesulitan : <span style="background-color: #ffa700;"><?php echo $value[2]; ?></span></p>
                    <?php }elseif($value[2] == "Mudah"){?>
                        <p class="dificulty">Kesulitan : <span style="background-color: #008744;"><?php echo $value[2]; ?></span></p>
                    <?php }?>
                    <div class="button"><a href="detail.php?product=<?= $key?>&kategori=makanan">Pelajari</a></div>
                </div>
            </div>
            <?php };?>
        </div>
        <div class="content minuman">
            <?php foreach($Minuman->getProduct() as $key => $value) {?>
            <div class="content-box">
                <div class="content-img" style="background-image: url('<?php echo $value[1];?>');""></div>
                <div class="content-des">
                    <h1><?php echo $key; ?></h1>
                    <p class="rating"><span>★</span><?php echo $value[0]; ?></p>
                    <?php if($value[2] == "Sulit") {?>
                        <p class="dificulty">Kesulitan : <span style="background-color: #cb2b1e;"><?php echo $value[2]; ?></span></p>
                    <?php }elseif($value[2] == "Sedang"){?>
                        <p class="dificulty">Kesulitan : <span style="background-color: #ffa700;"><?php echo $value[2]; ?></span></p>
                    <?php }elseif($value[2] == "Mudah"){?>
                        <p class="dificulty">Kesulitan : <span style="background-color: #008744;"><?php echo $value[2]; ?></span></p>
                    <?php }?>
                    <div class="button"><a href="detail.php?product=<?=$key?>&kategori=minuman">Pelajari</a></div>
                </div>
            </div>
            <?php };?>
        </div>
    </div>
    <div class="footer">
        <p>© 2023 EasyCook.com, All rights reserved</p>
    </div>


    <script src="script.js"></script>
</body>
</html>