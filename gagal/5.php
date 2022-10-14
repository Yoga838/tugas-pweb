<?php
class segitiga {
    public $alas ;
    public $tinggi ;

    function luas(){
        return ($this->$alas*$this->$tinggi)/2;
    }
    function SetAlas($alas){
        return $this->alas = $alas;
    }
    function SetTinggi($tinggi){
        return $this->alas = $tinggi;
    }
}

$rumus_segitiga = new segitiga();
$rumus_segitiga->SetAlas(3);
$rumus_segitiga->SetTinggi(5);
echo "luasnya adalah ". $rumus_segitiga->luas();
// echo "luasnya adalah" . $rumus_segitiga->luas();