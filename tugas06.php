<?php
$data = array('peserta 1','peserta 2','peserta 3','peserta 4','peserta 5','peserta 6','peserta 7','peserta 8','peserta 9','peserta 10');
$tmp = $data;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 06</title>
    <style>
        .container{
            display :flex;
            gap:15px
        }
    </style>
</head>
<body>
    <h1>Praktikum 06 - PHP Array</h1>
    <div class="container">
        <div class="container1">
            <p>Daftar Peserta :</p>
            <table border=1px>
                <tr>
                    <th><p style='font-weight:bolder;'>No.</p></th>
                    <th><p style='font-weight:bolder;'>Nama Peserta</p></th>
                </tr>
                <?php
                $num = 0;
                foreach($data as $x){
                    $num++;
                    echo "<tr>";
                    echo "<td>";
                    echo $num;
                    echo "</td>";
                    echo "<td>";
                    echo $x;
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
        <div class="container2">
            <p>Kelompok 1 :</p>
            <table border=1px>
                <tr>
                    <th><p style='font-weight:bolder;'>No.</p></th>
                    <th><p style='font-weight:bolder;'>Nama Peserta</p></th>
                </tr>
                <?php
                for($i=0;$i<3;$i++){
                    $num = $i + 1;
                    shuffle($tmp);
                    echo "<tr>";
                    echo "<td>";
                    echo $num;
                    echo "</td>";
                    echo "<td>";
                    echo $tmp[$i];
                    echo "</td>";
                    echo "</tr>";
                    unset($tmp[$i]);
                }
                ?>
            </table>
        </div>
        <div class="container3">
            <p>Kelompok 2 :</p>
            <table border=1px>
                <tr>
                    <th><p style='font-weight:bolder;'>No.</p></th>
                    <th><p style='font-weight:bolder;'>Nama Peserta</p></th>
                </tr>
                <?php
                for($i=0;$i<3;$i++){
                    $num = $i + 1;
                    shuffle($tmp);
                    echo "<tr>";
                    echo "<td>";
                    echo $num;
                    echo "</td>";
                    echo "<td>";
                    echo $tmp[$i];
                    echo "</td>";
                    echo "</tr>";
                    unset($tmp[$i]);
                }
                ?>
            </table>
        </div>
        <div class="container4">
            <p>Kelompok 3 :</p>
            <table border=1px>
                <tr>
                    <th><p style='font-weight:bolder;'>No.</p></th>
                    <th><p style='font-weight:bolder;'>Nama Peserta</p></th>
                </tr>
                <?php
                $num = 0;
                for($i=3;$i>=0;$i--){
                    $num += 1;
                    shuffle($tmp);
                    echo "<tr>";
                    echo "<td>";
                    echo $num;
                    echo "</td>";
                    echo "<td>";
                    echo $tmp[$i];
                    echo "</td>";
                    echo "</tr>";
                    unset($tmp[$i]);
                }
                ?>
            </table>
        </div>
    </div>
    <center><h1>{212410102031}-{Ahmad Bagus Prayoga}</h1></center>
</body>
</html>