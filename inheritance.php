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

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

class Komik extends Produk{
    
}

class Game extends Produk{

}

class Cetak{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} $produk->harga";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

$cetak = new Cetak();
echo $cetak->cetak($produk1);
?>
