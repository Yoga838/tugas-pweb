<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 07</title>
    <style>
        h1{
            margin-top:30px;
            margin-left:40px
        }
        tr,td,th {
            padding :10px;
        }
        .ratakiri{
            text-align: left;
        }
        .st{
            padding-right:5em;
        }
        .du{   
            padding-right:15em;
        }
        .tg{
            padding-right:20em;
        }
        .ratakanan{
            text-align:right;
            padding-left: 10em;
        }
    </style>
</head>
<body>
    <h1>Praktikum 07 - practical PHP</h1>
    <center><table  border = 1 solid >
        <tr>
            <th class="ratakiri st">No.</th>
            <th class="ratakiri du">Tanggal</th>
            <th class="ratakiri tg">Keterangan</th>
            <th class="ratakanan">Jumlah</th>
        </tr>
        <?php $begin = new DateTime( "2022-01-01" );
              $num = 1000; 
              for ($i=1;$i<=999;$i++){
                $amount = number_format($num,0,"","."); 
                $digit = str_pad($i, 3, '0', STR_PAD_LEFT); ?>
            <tr>
                <td class="ratakiri"><?php echo  $i;?></td>
                <td class="ratakiri"><?php echo $begin->format("j-F-Y"); ?></td>
                <?php $date = $begin->format("Y-m-d"); ?>
                <?php $begin->modify('+1 day'); ?>
                <td class="ratakiri"><?php echo "TRN-$date-$digit"; ?></td>
                <td class="ratakanan"><?php echo "Rp $amount"; ?></td>
                <?php $num += 1000; ?>
            </tr>
        <?php } ?>
    </table></center>
    <center><h3>{212410102031}-{Ahmad Bagus Prayoga}</h3></center>
</body>
</html>