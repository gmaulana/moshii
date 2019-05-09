<?php
function lcg($m,$c,$a,$z)
{
	return  ($a*$z+$c) % $m;
}

function ziplus($a,$z,$c,$m)
{
    for ($i=0; $i<=1 ; $i++) { 
       $z=  (($a*$z)+$c)% $m;
    }
  //  $z=(($a*$z)+$c)% $m;
   // $zi = (($a*$z)+$c)% $m;
    return $z;
}

function ziplusmnrg($a,$z,$m)
{
    for ($i=0; $i <=1 ; $i++) { 
        $z=($a*$z)% $m;
    }
    return $z;
}

function ui($z,$m)
{
    return $z/$m;
}

function uiplus($z1,$m1)
{
    for ($i=0; $i <= 1 ; $i++) { 
        $z=$z1/$m1;
    }
    return $z;
}

function minuslogn($z)
{
    return pow((-2*log($z)),0.5);
}

function funsin($z)
{
    return sin(2*3.14*$z);
}

function funz($ln,$sin)
{
    return $ln*$sin;
}

function funx($rata2,$deviasi,$z)
{
    return $rata2+($deviasi*$z);
}
function mnrg($a,$z,$m)
{
    return ($a*$z) % $m;
}

function waktuselesai($a,$b,$c,$d)
{
    return $a+$b+$c+$d;
}

function kumulatif($hasilawal,$hasilbaru)
{

    //$first = "adaa";
    //if ($first=="ada") {
     //   $result = $hasil;
      //  $first=true;
    //} else {
     //   $result=$hasil+$hasil;
   // }
    
   

    //  $z=(($a*$z)+$c)% $m;
   // $zi = (($a*$z)+$c)% $m;
   //$z1=$rata2+($deviasi*$z);
  // $zi=$rata2+($deviasi*$z); 
   //for ($i=0; $i <=1 ; $i++) { 
    //    $z1=$rata2+($deviasi*$z);
   // }

    return $hasilawal+$hasilbaru;
}

$akedatangan=34;
$ckedatangan=43;
$mkedatangan= 105;
$zkedatangan=45;
$rata2kedatangan =76.571; $deviasikedatangan=21.815;


$apesanan=10;
$mpesanan=23;
$zpesanan=45;
$rata2pesanan =84.857; $deviasipesanan=22.261;


$apacking=14;
$cpacking=15;
$mpacking= 33;
$zpacking=55;
$rata2packing =88; $deviasipacking=40.306;

echo"<h1>DATA ANTAR KEDATANGAN PELANGGAN</h1>";
echo"<table border=1>";
echo"<thead>
    <th>NO</th>
    <th>Zi</th>
    <th>Zi+1</th>
    <th>Ui</th>
    <th>Ui+1</th>
    <th>(-2lnUi)^1/2</th>
    <th>sin(2 phi Ui+1)</th>
    <th>Z</th>
    <th>X</th>
    <th>HASIL</th>
    </thead>";

for ($i=0; $i < 10; $i++) { 
    $no = $i+1;
    echo"<tr>";
    echo"<td>".$no."</td>";
    echo"<td>" ."($akedatangan * $zkedatangan + $ckedatangan) % $mkedatangan =".lcg($mkedatangan,$ckedatangan,$akedatangan,$zkedatangan)."</td>";
    echo"<td>".ziplus($akedatangan,$zkedatangan,$ckedatangan,$mkedatangan)."</td>";
    echo"<td>".lcg($mkedatangan,$ckedatangan,$akedatangan,$zkedatangan)."/$mkedatangan=".round(ui(lcg($mkedatangan,$ckedatangan,$akedatangan,$zkedatangan),$mkedatangan),3)."</td>";
    echo"<td>".ziplus($akedatangan,$zkedatangan,$ckedatangan,$mkedatangan)."/$mkedatangan=".round(uiplus(ziplus($akedatangan,$zkedatangan,$ckedatangan,$mkedatangan),$mkedatangan),3)."</td>";
    echo"<td>".round(minuslogn(round(ui(lcg($mkedatangan,$ckedatangan,$akedatangan,$zkedatangan),$mkedatangan),3)),3)."</td>";
    echo"<td>".round(funsin(round(uiplus(ziplus($akedatangan,$zkedatangan,$ckedatangan,$mkedatangan),$mkedatangan),3)),3)."</td>";
    echo"<td>".round(funz(round(minuslogn(round(ui(lcg($mkedatangan,$ckedatangan,$akedatangan,$zkedatangan),$mkedatangan),3)),3),round(funsin(round(uiplus(ziplus($akedatangan,$zkedatangan,$ckedatangan,$mkedatangan),$mkedatangan),3)),3)),3)."</td>";

    echo"<td>".round(funx($rata2kedatangan,$deviasikedatangan,round(funz(round(minuslogn(round(ui(lcg($mkedatangan,$ckedatangan,$akedatangan,$zkedatangan),$mkedatangan),3)),3),round(funsin(round(uiplus(ziplus($akedatangan,$zkedatangan,$ckedatangan,$mkedatangan),$mkedatangan),3)),3)),3)),3)."</td>";
    echo"<td>".round(funx($rata2kedatangan,$deviasikedatangan,round(funz(round(minuslogn(round(ui(lcg($mkedatangan,$ckedatangan,$akedatangan,$zkedatangan),$mkedatangan),3)),3),round(funsin(round(uiplus(ziplus($akedatangan,$zkedatangan,$ckedatangan,$mkedatangan),$mkedatangan),3)),3)),3)),0)."</td>";
   
    echo"</tr>";
    $zkedatangan= lcg($mkedatangan,$ckedatangan,$akedatangan,$zkedatangan);
}
echo"</table>";

echo"<h1>DATA LAMA PESANAN</h1>";
echo"<table border=1>";
echo"<thead>
    <th>NO</th>
    <th>Zi</th>
    <th>Zi+1</th>
    <th>Ui</th>
    <th>Ui+1</th>
    <th>(-2lnUi)^1/2</th>
    <th>sin(2 phi Ui+1)</th>
    <th>Z</th>
    <th>X</th>
    <th>HASIL</th>
    </thead>";

for ($i=0; $i < 10; $i++) { 
    $no = $i+1;
    echo"<tr>";
    echo"<td>".$no."</td>";
    echo"<td>" ."($apesanan * $zpesanan) % $mpesanan =".mnrg($apesanan,$zpesanan,$mpesanan)."</td>";
    echo"<td>".ziplusmnrg($apesanan,$zpesanan,$mpesanan)."</td>";
    echo"<td>".ziplusmnrg($apesanan,$zpesanan,$mpesanan)."/$mpesanan=".round(ui(mnrg($apesanan,$zpesanan,$mpesanan),$mpesanan),3)."</td>";
    echo"<td>".ziplusmnrg($apesanan,$zpesanan,$mpesanan)."/$mpesanan=".round(uiplus(ziplusmnrg($apesanan,$zpesanan,$mpesanan),$mpesanan),3)."</td>";
    echo"<td>".round(minuslogn(round(ui(mnrg($apesanan,$zpesanan,$mpesanan),$mpesanan),3)),3)."</td>";
    echo"<td>".round(funsin(round(uiplus(ziplusmnrg($apesanan,$zpesanan,$mpesanan),$mpesanan),3)),3)."</td>";
    echo"<td>".round(funz(round(minuslogn(round(ui(mnrg($apesanan,$zpesanan,$mpesanan),$mpesanan),3)),3),round(funsin(round(uiplus(ziplusmnrg($apesanan,$zpesanan,$mpesanan),$mpesanan),3)),3)),3)."</td>";
    echo"<td>".round(funx($rata2pesanan,$deviasipesanan,round(funz(round(minuslogn(round(ui(mnrg($apesanan,$zpesanan,$mpesanan),$mpesanan),3)),3),round(funsin(round(uiplus(ziplusmnrg($apesanan,$zpesanan,$mpesanan),$mpesanan),3)),3)),3)),3)."</td>";
    echo"<td>".round(funx($rata2pesanan,$deviasipesanan,round(funz(round(minuslogn(round(ui(mnrg($apesanan,$zpesanan,$mpesanan),$mpesanan),3)),3),round(funsin(round(uiplus(ziplusmnrg($apesanan,$zpesanan,$mpesanan),$mpesanan),3)),3)),3)),0)."</td>";
    echo"</tr>";
    $zpesanan=mnrg($apesanan,$zpesanan,$mpesanan) ;
}
echo"</table>";

echo"<h1>DATA LAMA PACKING</h1>";
echo"<table border=1>";
echo"<thead>
    <th>NO</th>
    <th>Zi</th>
    <th>Zi+1</th>
    <th>Ui</th>
    <th>Ui+1</th>
    <th>(-2lnUi)^1/2</th>
    <th>sin(2 phi Ui+1)</th>
    <th>Z</th>
    <th>X</th>
    <th>HASIL</th>
    </thead>";

for ($i=0; $i < 10; $i++) { 
    $no = $i+1;
    echo"<tr>";
    echo"<td>".$no."</td>";
    echo"<td>" ."($apacking * $zpacking + $cpacking % $mpacking =".lcg($mpacking,$cpacking,$apacking,$zpacking)."</td>";
    echo"<td>".ziplus($apacking,$zpacking,$cpacking,$mpacking)."</td>";
    echo"<td>".lcg($mpacking,$cpacking,$apacking,$zpacking)."/$mpacking=".round(ui(lcg($mpacking,$cpacking,$apacking,$zpacking),$mpacking),3)."</td>";
    echo"<td>".ziplus($apacking,$zpacking,$cpacking,$mpacking)."/$mpacking=".round(uiplus(ziplus($apacking,$zpacking,$cpacking,$mpacking),$mpacking),3)."</td>";
    echo"<td>".round(minuslogn(round(ui(lcg($mpacking,$cpacking,$apacking,$zpacking),$mpacking),3)),3)."</td>";
    echo"<td>".round(funsin(round(uiplus(ziplus($apacking,$zpacking,$cpacking,$mpacking),$mpacking),3)),3)."</td>";
    echo"<td>".round(funz(round(minuslogn(round(ui(lcg($mpacking,$cpacking,$apacking,$zpacking),$mpacking),3)),3),round(funsin(round(uiplus(ziplus($apacking,$zpacking,$cpacking,$mpacking),$mpacking),3)),3)),3)."</td>";
    echo"<td>".round(funx($rata2packing,$deviasipacking,round(funz(round(minuslogn(round(ui(lcg($mpacking,$cpacking,$apacking,$zpacking),$mpacking),3)),3),round(funsin(round(uiplus(ziplus($apacking,$zpacking,$cpacking,$mpacking),$mpacking),3)),3)),3)),3)."</td>";
    echo"<td>".round(funx($rata2packing,$deviasipacking,round(funz(round(minuslogn(round(ui(lcg($mpacking,$cpacking,$apacking,$zpacking),$mpacking),3)),3),round(funsin(round(uiplus(ziplus($apacking,$zpacking,$cpacking,$mpacking),$mpacking),3)),3)),3)),0)."</td>";
    echo"</tr>";
    $zpacking= lcg($mpacking,$cpacking,$apacking,$zpacking);
}
echo"</table>";

 
$akedatangansimulasi=34;
$ckedatangansimulasi=43;
$mkedatangansimulasi= 105;
$zkedatangansimulasi=45;
$rata2kedatangansimulasi =76.571; $deviasikedatangansimulasi=21.815;


$apesanansimulasi=10;
$mpesanansimulasi=23;
$zpesanansimulasi=45;
$rata2pesanansimulasi =84.857; $deviasipesanansimulasi=22.261;


$apackingsimulasi=14;
$cpackingsimulasi=15;
$mpackingsimulasi= 33;
$zpackingsimulasi=55;
$variabelwaktu=60;
$rata2packingsimulasi =88; $deviasipackingsimulasi=40.306;

$ada = true;

echo"<h1>SIMULASI</h1>";
echo"<table border=1>";
echo"<thead>";
echo"<tr>
    <td rowspan=2>No</td>
    <td colspan=3>bilangan acak</td>
    <td colspan=6>Simulasi</td>
    </tr>";
echo"<tr>
    <td>ANTAR KEDATANGAN</td>
    <td>LAMA PESANAN</td>
    <td>LAMA PACKING</td>
    <td>ANTAR KEDATANGAN PELANGGAN (PERDETIK)</td>
    <td>Komulatif Kedatangan Pelanggan (Detik)</td>
    <td>Lama Pesan (Detik)</td>
    <td>Lama Packing (Detik)</td>
    <td>Waktu Pelayanan (Detik)</td>
    <td>Waktu Selesai dilayani (Detik)</td>
    </tr>";
echo"<tr>
    <td></td>
    <td>A</td>
    <td>B</td>
    <td>C</td>
    <td>D</td>
    <td>E</td>
    <td>F</td>
    <td>G</td>
    <td>H</td>
    <td>I</td>
    </tr>";
$jumlah=0;
for ($i=0; $i <10 ; $i++) { 
    $no=$i+1;
  

    echo"<tr>
    <td>$no</td>
    <td>".round(ui(lcg($mkedatangansimulasi,$ckedatangansimulasi,$akedatangansimulasi,$zkedatangansimulasi),$mkedatangansimulasi),3)."</td>
    <td>".round(ui(mnrg($apesanansimulasi,$zpesanansimulasi,$mpesanansimulasi),$mpesanansimulasi),3)."</td>
    <td>".round(ui(lcg($mpackingsimulasi,$cpackingsimulasi,$apackingsimulasi,$zpackingsimulasi),$mpackingsimulasi),3)."</td>
    <td>".round(funx($rata2kedatangansimulasi,$deviasikedatangansimulasi,round(funz(round(minuslogn(round(ui(lcg($mkedatangansimulasi,$ckedatangansimulasi,$akedatangansimulasi,$zkedatangansimulasi),$mkedatangansimulasi),3)),3),round(funsin(round(uiplus(ziplus($akedatangansimulasi,$zkedatangansimulasi,$ckedatangansimulasi,$mkedatangansimulasi),$mkedatangansimulasi),3)),3)),3)),0)."</td>
    ";
    $result= round(funx($rata2kedatangansimulasi,$deviasikedatangansimulasi,round(funz(round(minuslogn(round(ui(lcg($mkedatangansimulasi,$ckedatangansimulasi,$akedatangansimulasi,$zkedatangansimulasi),$mkedatangansimulasi),3)),3),round(funsin(round(uiplus(ziplus($akedatangansimulasi,$zkedatangansimulasi,$ckedatangansimulasi,$mkedatangansimulasi),$mkedatangansimulasi),3)),3)),3)),0);
    $jumlah+=$result;
    echo"<td>".$jumlah."</td>";
    echo"<td>".round(funx($rata2pesanansimulasi,$deviasipesanansimulasi,round(funz(round(minuslogn(round(ui(mnrg($apesanansimulasi,$zpesanansimulasi,$mpesanansimulasi),$mpesanansimulasi),3)),3),round(funsin(round(uiplus(ziplusmnrg($apesanansimulasi,$zpesanansimulasi,$mpesanansimulasi),$mpesanansimulasi),3)),3)),3)),0)."</td>
    <td>".round(funx($rata2packingsimulasi,$deviasipackingsimulasi,round(funz(round(minuslogn(round(ui(lcg($mpackingsimulasi,$cpackingsimulasi,$apackingsimulasi,$zpackingsimulasi),$mpackingsimulasi),3)),3),round(funsin(round(uiplus(ziplus($apackingsimulasi,$zpackingsimulasi,$cpackingsimulasi,$mpackingsimulasi),$mpackingsimulasi),3)),3)),3)),0)."</td>
    <td>".$variabelwaktu."</td>
    <td>".waktuselesai($jumlah,round(funx($rata2pesanansimulasi,$deviasipesanansimulasi,round(funz(round(minuslogn(round(ui(mnrg($apesanansimulasi,$zpesanansimulasi,$mpesanansimulasi),$mpesanansimulasi),3)),3),round(funsin(round(uiplus(ziplusmnrg($apesanansimulasi,$zpesanansimulasi,$mpesanansimulasi),$mpesanansimulasi),3)),3)),3)),0),round(funx($rata2packingsimulasi,$deviasipackingsimulasi,round(funz(round(minuslogn(round(ui(lcg($mpackingsimulasi,$cpackingsimulasi,$apackingsimulasi,$zpackingsimulasi),$mpackingsimulasi),3)),3),round(funsin(round(uiplus(ziplus($apackingsimulasi,$zpackingsimulasi,$cpackingsimulasi,$mpackingsimulasi),$mpackingsimulasi),3)),3)),3)),0),$variabelwaktu)."</td>
    </tr>";  
    $zpesanansimulasi=mnrg($apesanansimulasi,$zpesanansimulasi,$mpesanansimulasi) ;
    $zkedatangansimulasi= lcg($mkedatangansimulasi,$ckedatangansimulasi,$akedatangansimulasi,$zkedatangansimulasi);
    $zpackingsimulasi= lcg($mpackingsimulasi,$cpackingsimulasi,$apackingsimulasi,$zpackingsimulasi);
}
echo"</thead>";
echo"</table>";

?>