<?php
trait kendaraan{
    public function spesification($cc,$transmisi,$tenaga,$bahan_bakar,$jenis_kendaraan){
        echo "spesifikasi $jenis_kendaraan anda adalah mempunyai mesin berkapasitas $cc cc  berbahan bakar $bahan_bakar dengan tenaga $tenaga bertransmisi $transmisi";
    }
}

class mobil{
    use kendaraan;
}
class motor{
    use kendaraan;
}
$obj = new mobil();
echo $obj->spesification(1000,"manual","300HP","bensin","Mobil");
echo "\n";
$obj2 = new motor();
echo $obj->spesification(300,"manual","50P","bensin","Motor");
?>