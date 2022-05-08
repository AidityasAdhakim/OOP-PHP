<?php

class Produk{
    public $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->penulis = $penulis;
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

class Komik extends Produk{
    public $jmlHalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 )
    {
        parent::__construct($judul, $penulis , $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }


    public function getInfoProduk(){
        $str = "Komik : ". parent::getInfoProduk() ." {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk{
    public $jamMain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jamMain = 0)
    {
        parent::__construct($judul , $penulis, $penerbit, $harga);

        $this->jamMain = $jamMain;
    }

    public function getInfoProduk(){
        $str = "Game : ". parent::getInfoProduk() ."~ {$this->jamMain} Jam";
        return $str;
    }
}

class Cetak{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} $produk->harga";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

$produk2 = new Game("Uncharted", "Masashi Palakmoto", "Sony", 120, 60);

$cetak = new Cetak();
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
?>

