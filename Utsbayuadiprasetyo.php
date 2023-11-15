<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS ANGKA GANJIL GENAP</title>
</head>

<body>

<?php
//Membuat array untuk menyimpan angka ganjil dan genap

$ganjil2=array();
$genap2=array();

//Mengisi array dengan angka 1 sampai 10

for($i=1; $i<8;$i++){
    //jika angka habis dibagi 2, maka masukkan ke array genap
    if($i%2==0){
        $genap2[]=$i;
    }
}
?>

<!--Membuat tabel dengan dua kolom-->
<table class="Table1">
    <tr>
        <th>Ganjil</th>
        <th>Genap</th>
    </tr>

    <!--Menampilkan isi array di setiap baris tabel-->
    <?php

    for($i=1;$i<=5;$i++){
        if($i%2==1){
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td></td>";
            echo "</tr>";
        }else{
            echo "<tr>";
            echo "<td></td>";
            echo "<td>$i</td>";
            echo "</tr>";
        }
    }

?>
</table>

<table class="Table2">
    <tr>
        <th>Ganjil</th>
        <th>Genap</th>
    </tr>

    <!--Menampilkan isi array di setiap baris tabel-->
    <?php
    $count = max(count($ganjil2), count($genap2));
    for($j=0;$j<$count;$j++){
        echo"<tr>";
        if($j<count($ganjil2)){
            echo"<td>".$ganjil2[$j]."</td>";
    }else{
        echo"<td>".""."</td>";
    }
    if($j<count($genap2)){
        echo"<td>".$genap2[$j]."</td>";
    }else{
        echo"<td>".""."</td>";
    }
}
    ?>
    </table>
    <style>
.Table1{
    font-family:Verdana;
    font-Size: 14;
    color:black;
    border-collapse:collapse;
    text-align: center;
    margin-top:30px;
}
.Table2{
    font-family: Verdana;
    font-size: 14;
    color: black;
    border-collapse:collapse;
    text-align: center;
    margin-top:30px;
}
.Table1,.Table2,th,td{
    border:1px solid black;
    padding: 6px;
    width: 500px;
}
</style>

</body>
</html>