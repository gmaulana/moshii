<?php
function lcg($a,$z,$c,$m)
{
    return (($a*$z)+$c)% $m;
}

function ziplus($a,$z,$c,$m)
{
    for ($i=0; $i <1 ; $i++) { 
        $z=(($a*$z)+$c)% $m;
    }
    return $z;
}

function ziplusmnrg($a,$z,$m)
{
    for ($i=0; $i <1 ; $i++) { 
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
    for ($i=0; $i < 1 ; $i++) { 
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
    </thead>";
$a=10; $z=45;$c=15;$m=33;
$rata2 =76.571; $deviasi=21.815;
for ($i=0; $i < 10; $i++) { 
    $no = $i+1;
    echo"<tr>";
    echo"<td>".$no."</td>";
    echo"<td>".lcg($a,$z,$c,$m)."</td>";    
    $z=lcg($a,$z,$c,$m);
    echo"<td>".ziplus($a,$z,$c,$m)."</td>";
    echo"<td>".round(ui($z,$m),3)."</td>";
    echo"<td>".round(uiplus(ziplus($a,$z,$c,$m),$m),3)."</td>";
    echo"<td>".round(minuslogn(round(ui($z,$m),3)),3)."</td>";
    echo"<td>".round(funsin(round(uiplus(ziplus($a,$z,$c,$m),$m),3)),3)."</td>";
    echo"<td>".round(funz(round(minuslogn(round(ui($z,$m),3)),3),round(funsin(round(uiplus(ziplus($a,$z,$c,$m),$m),3)),3)),3)."</td>";
    echo"<td>".round(funx($rata2,$deviasi,round(funz(round(minuslogn(round(ui($z,$m),3)),3),round(funsin(round(uiplus(ziplus($a,$z,$c,$m),$m),3)),3)),3)),3)."</td>";
    echo"</tr>";
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
$a=10; $z=45;$m=23;
$rata2 =84.857; $deviasi=22.261;
for ($i=0; $i < 10; $i++) { 
    $no = $i+1;
    echo"<tr>";
    echo"<td>".$no."</td>";
    echo"<td>".mnrg($a,$z,$m)."</td>";    
    $z=mnrg($a,$z,$m);
    echo"<td>".ziplusmnrg($a,$z,$m)."</td>";
    echo"<td>".round(ui($z,$m),3)."</td>";
    echo"<td>".round(uiplus(ziplusmnrg($a,$z,$m),$m),3)."</td>";
    echo"<td>".round(minuslogn(round(ui($z,$m),3)),3)."</td>";
    echo"<td>".round(funsin(round(uiplus(ziplusmnrg($a,$z,$m),$m),3)),3)."</td>";
    echo"<td>".round(funz(round(minuslogn(round(ui($z,$m),3)),3),round(funsin(round(uiplus(ziplusmnrg($a,$z,$m),$m),3)),3)),3)."</td>";
    echo"<td>".round(funx($rata2,$deviasi,round(funz(round(minuslogn(round(ui($z,$m),3)),3),round(funsin(round(uiplus(ziplusmnrg($a,$z,$m),$m),3)),3)),3)),3)."</td>";
    echo"<td>".round(funx($rata2,$deviasi,round(funz(round(minuslogn(round(ui($z,$m),3)),3),round(funsin(round(uiplus(ziplusmnrg($a,$z,$m),$m),3)),3)),3)),0)."</td>";
    echo"</tr>";
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
    </thead>";
$a=10; $z=45;$c=15;$m=33;
$rata2 =88; $deviasi=40.306;
for ($i=0; $i < 10; $i++) { 
    $no = $i+1;
    echo"<tr>";
    echo"<td>".$no."</td>";
    echo"<td>".lcg($a,$z,$c,$m)."</td>";    
    $z=lcg($a,$z,$c,$m);
    echo"<td>".ziplus($a,$z,$c,$m)."</td>";
    echo"<td>".round(ui($z,$m),3)."</td>";
    echo"<td>".round(uiplus(ziplus($a,$z,$c,$m),$m),3)."</td>";
    echo"<td>".round(minuslogn(round(ui($z,$m),3)),3)."</td>";
    echo"<td>".round(funsin(round(uiplus(ziplus($a,$z,$c,$m),$m),3)),3)."</td>";
    echo"<td>".round(funz(round(minuslogn(round(ui($z,$m),3)),3),round(funsin(round(uiplus(ziplus($a,$z,$c,$m),$m),3)),3)),3)."</td>";
    echo"<td>".round(funx($rata2,$deviasi,round(funz(round(minuslogn(round(ui($z,$m),3)),3),round(funsin(round(uiplus(ziplus($a,$z,$c,$m),$m),3)),3)),3)),3)."</td>";
    echo"</tr>";
}
echo"</table>";

?>