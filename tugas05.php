<?php
class lingkaran {
    public $jari_jari;
    function show($jari_jari){
        $this->$jari_jari=$jari_jari;
        $luas = 3.14 * ($this->$jari_jari)**2; 
        $keliling = 2 * 3.14 * $this->$jari_jari;
        echo "jika ada lingkaran dengan nilai jari-jari " . $this->$jari_jari . " maka luas-nya adalah<font color='red'> " . $luas . "</font> dan kelilingnya adalah <font color='red'>" . $keliling . "</font>"; 
    }
};
class segitiga {
    public $alas;
    public $tinggi;
    function show($alas,$tinggi){
        $this->$alas = $alas;
        $this->$tinggi = $tinggi;
        $luas = ($this->$alas*$this->$tinggi)*0.5;
        $samping = $alas**2 + $tinggi**2;
        $samping = sqrt($samping);
        $keliling = $alas + $samping + $samping;
        $keliling = number_format((float)$keliling,2,'.',''); 
        echo "jika ada segitiga dengan nilai alas " . $this->$alas . " dan tinggi " . $this->$tinggi . ",maka luasnya adalah <font color='red'>" . $luas . "</font> dan kelilingnya adalah <font color='red'>" . $keliling . "</font>";
    }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 05</title>
</head>
<body style='padding-left:40px'>
    <h1 style='margin-bottom:40px;'>Tugas 05 - PHP Objects</h1>
    <ol style="padding-left:15px">
    <?php
    $data = array(13,15,17,13,17,15,19);
    for($i=0;$i<6;$i++){
        if ($i<3){
            echo "<li>";
            $lingkaran = new lingkaran();
            $lingkaran->show($data[$i]);
            echo "<br>";
            echo "</li>";
        }
        else{
            echo "<li>";
            $segitiga = new segitiga();
            $segitiga->show($data[$i],$data[$i+=1]);
            echo "<br>";
            echo "</li>";
        }
    };
    ?>
    </ol>
    <center><h1 style='margin-top:60px;'>{212410102031}{Ahmad Bagus Prayoga}</h1></center>

</body>
</html>