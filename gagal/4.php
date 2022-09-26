<?php

class Buah 
{
    // fields
    private $nama= "Buah";
    public $jumlah = 0;

    // method
    function panggilNama() {
        return $this->nama;

    }
    function setJumlah($jumlah){
        if($jumlah > 0){
            $this-> jumlah = $jumlah;
        } else {
            $this->jumlah = 0;
        }
    }
    function getJumlah() {
        return $this->jumlah;
    }
    
}

$buah_1 = new Buah();

echo $buah_1->panggilNama();
echo "<br>";
$buah_1->setJumlah(-1);
echo $buah_1->getJumlah();

//echo $buah_2->nama;

?>