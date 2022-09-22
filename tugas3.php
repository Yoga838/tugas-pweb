<!-- rumus L  = phi x r^2 -->
<!-- rumus k = 2 x phi x r -->
<?php
function Luas_Lingkaran($jari_jari){
    return 3.14 * ($jari_jari)**2;
}
function Keliling_Lingkaran($jari){
    return 2 * 3.14 * $jari;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 04</title>
    <style>
        body{
            margin: 0 40px;
        }
    </style>
</head>
<body>
    <h1>Praktikum 04 - PHP Function</h1>
    <?php
    $number = array(13,15,17,19,21);
    for ($i=0;$i<5 ;$i++){
        if($i<3){
            $total = Luas_Lingkaran($number[$i]);
            $no = $i+1;
            echo "<p>$no jika ada lingkaran dengan nilai jari - jari " . $number[$i] . " maka luas lingkaran tersebut adalah <font color='red'>" . $total ."</font></p>";
        }
        else {
            $total = Keliling_Lingkaran($number[$i]);
            $no = $i+1;
            echo "<p>$no jika ada lingkaran dengan nilai jari - jari " . $number[$i] . " maka keliling lingkaran tersebut adalah <font color='red'>" . $total . "</font></p>";            
        }
    }
    ?>
    <center><h1>{212410102031}{Ahmad Bagus Prayoga}</h1></center>
</body>
</html>