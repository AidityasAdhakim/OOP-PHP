<?php

use Komik as GlobalKomik;

class Produk{
    public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $jamMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->penulis = $penulis;
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

class Komik extends Produk{

    public function getInfoKomik(){
        $str = "Komik : {$this->getInfo()} {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk{

    public function getInfoGame(){
        $str = "Game : {$this->getInfo()} ~ {$this->jamMain} Jam";
        return $str;
    }
}

class Cetak{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} $produk->harga";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

$produk2 = new Game("Uncharted", "Masashi Palakmoto", "Sony", 120);

$cetak = new Cetak();
echo $produk1->getInfoKomik();
echo "<br>";
echo $produk2->getInfoGame();
?>
