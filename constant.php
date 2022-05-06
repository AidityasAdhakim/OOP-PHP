<?php 

// define('NAMA', 'Aidityas');
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;

// class Coba{
//     const NAMA = 'Aidityas';

//     function display(){
//         return self::NAMA;
//     }
// }

// $coba1 = 

// echo __FILE__;

function coba(){
    return __FUNCTION__;
}

echo coba();
echo "<br>";
class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba();
echo $obj->kelas;
?>
