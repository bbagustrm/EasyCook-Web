<?php 

abstract class Product{

    public $product = [];

}


class Makanan extends Product{
    public $product = [
        "Soto " => ["assets/img-soto.jpg", 4.7, "Sulit"],
        "Sate" => ["assets/img-sate.jpg", 4.9, "Sedang"],
        "Ayam Goreng" => ["assets/img-ayamgoreng.jpg", 4.8, "Mudah"],
        "Ayam Bakar" => ["assets/img-ayambakar.jpg", 4.5, "Mudah"],
    ];
}


class Minuman extends Product{
    public $product = [
        "Lemon Tea " => ["assets/img-lemontea.jpg", 4.5, "Mudah"],
        "Es Doger" => ["assets/img-esdoger.jpg", 4.7, "Mudah"],
        "Es Buah" => ["assets/img-esbuah.jpg", 4.9, "Sulit"],
        "Es Degan" => ["assets/img-esdegan.jpg", 4.7, "Sedang"],
    ];
}

?>