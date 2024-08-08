<html>
    <head>
        <title> Yala Sip</title>
    </head>
    <style>
        .isi{
            background-color: yellow;
            color : red;
            font-size: 20px; 
            font-stretch: normal;
            letter-spacing: normal; 
            font-family: calibri; 
            font-weight: bold;
        }

        .kolom1{
            width: 200px;
            height: 30px;
            border-radius: 5px;
            font-family: calibri;
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
        }

        button {
            margin: 15px 0;
            width: 80px;
            height: 30px;
            border-radius: 10px;
            border: 2px solid goldenrod;
            background-color: goldenrod;
            color: black;
            cursor: pointer;
            margin-left: 220px;
        }

        .font2{
            font-family: calibri;
            font-size: 20px;
            font-weight: bold;
            color: #FFFFFF;
        }

        </style>
        <body class="isi">
            <h1 align="center">Aplikasi Menghitung Nilai Mean, Modus, Max, dan Min</h1>
            <form method="post" align="center">
                <center>
                <table class="font2" style="padding: 10px; border-radius: 10px;" bgcolor="goldenroad">
                 <tr>
                    <td>Angka Pertama</td>
                    <td><input class="kolom1" type="number" name="1" style="text- align: center" required></td>
                </tr>
                <tr>
                    <td>Angka Kedua</td>
                    <td><input class="kolom1" type="number" name="2" style="text- align: center" required></td>
                </tr>
                <tr>
                    <td>Angka Ketiga</td>
                    <td><input class="kolom1" type="number" name="3" style="text- align: center" required></td>
                </tr>
                <tr>
                    <td>Angka Keempat</td>
                    <td><input class="kolom1" type="number" name="4" style="text- align: center" required></td>
                </tr>
                 <tr>
                    <td>Angka Kelima</td>
                    <td><input class="kolom1" type="number" name="5" style="text- align: center" required></td>
                </tr>
            </table>
            </center>
            <button type="submit"> Eksekusi </button>
            </form>
    </body>
</html>

<?php 
echo "<center>"; if(!isset($_POST['1']))
die();

$a= array(
$_POST["1"],
$_POST["2"],
$_POST["3"],
$_POST["4"],
$_POST["5"],
);

function mmmr($array, $output = 'mean'){ 
    if(!is_array($array)){
    return FALSE;
    }else{
        switch($output){ case 'mean':
            $count = count($array);
            $sum = array_sum($array);$total = $sum / $count; 
            break;
            case 'mode':
                $v = array_count_values($array); arsort($v);
                foreach($v as $k => $v){$total = $k; break;} 
                break;
        }
        return $total;
    }
} 


echo "<h3>Hasil Mean: ".mmmr($a, 'mean')."</h3>";
echo "<h3>Hasil Modus: ".mmmr($a, 'mode')."</h3>";
echo "<h3>Hasil Min : ".min($a)."</h3>";
echo "<h3>Hasil Max : ".max($a)."</h3>";
?>