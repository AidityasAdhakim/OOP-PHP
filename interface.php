<?php

interface InfoProduk{
    public function getInfoProduk();
}

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

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

class Komik extends Produk implements InfoProduk{
    public $jmlHalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 )
    {
        parent::__construct($judul, $penulis , $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }


    public function getInfoProduk(){
        $str = "Komik : ". $this->getInfo() ." {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk implements InfoProduk{
    public $jamMain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jamMain = 0)
    {
        parent::__construct($judul , $penulis, $penerbit, $harga);

        $this->jamMain = $jamMain;
    }

    public function getInfoProduk(){
        $str = "Game : ". $this->getInfo() ."~ {$this->jamMain} Jam";
        return $str;
    }
}

class Cetak{
    public $daftarProduk = [];

    public function tambahProduk( Produk $produk ){
        $this->daftarProduk[] = $produk;
    }


    public function cetak(){
       $str = "DAFTAR PRODUK : <br>";

        foreach( $this->daftarProduk as $p ){
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;

    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

$produk2 = new Game("Uncharted", "Masashi Palakmoto", "Sony", 120, 60);

$cetakProduk = new Cetak();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );

echo $cetakProduk->cetak();
?>
