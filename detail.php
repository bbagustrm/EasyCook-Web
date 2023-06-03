<?php 

if(!isset($_GET["product"]) || !isset($_GET["kategori"])){
    header("Location: index.php");
    exit;
}

require_once "product.php";
$Makanan = new Makanan();
$Minuman = new Minuman();

$nama_product = $_GET["product"];
$kategori = $_GET["kategori"];

$arr = array_merge($Makanan->getProduct(), $Minuman->getProduct());

$i = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="detail.css">
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
        <div class="content">
            <?php if($kategori == "makanan") : ?>
            <div class="content-img" style="background-image: url('<?php echo $Makanan->getProduct()[$nama_product][1];?>');"></div>
            <div class="content-box">
                <h1>Resep <?php echo $nama_product?></h1><br><hr><br>
                <p><?php echo $Makanan->getProduct()[$nama_product][3];?></p><br><br><hr><br>
                <div class="step">
                <p><b>Cara Membuat:</b></p><br>
                    <?php foreach($Makanan->getProduct()[$nama_product][4] as $step) :?>
                        <div class="step-box">
                            <h5><?= $i?></h5>
                            <p><?= $step ?></p>
                        </div>
                    <?php $i++; endforeach;?>
                </div><br>
            </div>
            <?php elseif($kategori == "minuman") :?>
            <div class="content-img" style="background-image: url('<?php echo $Minuman->getProduct()[$nama_product][1];?>');"></div>
            <div class="content-box">
                <h1>Resep <?php echo $nama_product?></h1><br><hr><br>
                <p><?php echo $Minuman->getProduct()[$nama_product][3];?></p><br><br><hr><br>
                <div class="step">
                <p><b>Cara Membuat:</b></p><br>
                    <?php foreach($Minuman->getProduct()[$nama_product][4] as $step) :?>
                        <div class="step-box">
                            <h5><?= $i?></h5>
                            <p><?= $step ?></p>
                        </div>
                    <?php $i++; endforeach;?>
                </div><br>
            </div>
            <?php endif;?>
        </div>
        <div class="navbar">
            <h3>Populer</h3><hr>
            <?php arsort($arr); ?>
            <ul>
                <?php foreach($arr as $x => $x_value): ?>
                    <?php if(in_array($x, array_keys($Makanan->getProduct()))):?>
                        <li><a href="detail.php?product=<?=$x?>&kategori=makanan"><?= $x ?> <span style="float: right;"><?= $x_value[0] ?></span></a></li>
                    <?php elseif(in_array($x, array_keys($Minuman->getProduct()))):?>
                        <li><a href="detail.php?product=<?=$x?>&kategori=minuman"><?= $x ?> <span style="float: right;"><?= $x_value[0] ?></span></a></li>
                    <?php endif?>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
    <div class="footer">
        <p>© 2023 EasyCook.com, All rights reserved</p>
    </div>
</body>
</html>