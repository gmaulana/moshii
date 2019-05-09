<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="js/Chart.bundle.js"></script>
  <link rel="stylesheet" href="main.css">
  <title>Document</title>
</head>
<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Pemodelan dan Simulasi</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Data Antrian <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Simulasi Antrian</a>
        </li>
      </ul>
    </div>
  </nav>

        <!-- jumbotron -->
        <!-- First Parallax Section -->
<div class="jumbotron paral paralsec">
  <h1 class="display-3">Tugas Besar Mosi</h1>
  <p class="lead">
  <a class="btn btn-info btn-lg btn-md" href="#" role="button">Push Me!</a>
  </p>
</div>
   
  <!-- Second Parallax Section -->
  <div class="jumbotron paral paralsec1">
  <h1 class="display-3">Simulasi Antrian Rumah Makan Nasi Padang Mahkota Minang</h1>
  <p class="lead">
  <a class="btn btn-warning btn-lg btn-md" href="#" role="button">Push Me!</a>
  </p>
  </div>
      
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- collapse untuk Deskripsi -->
            <p class="abc">
                <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Deskripsi</a>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Ruang Lingkup dan Asumsi</button>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Lihat Semua!</button>
              </p>
              <div class="row">
                <div class="col">
                  <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body">
                        Studi kasus tentang antrian diambil dari kesibukan yang berhubungan dengan proses pemesanan makanan secara langsung dan proses packing pesanan makanan  di rumah makan Nasi Padang Mahkota Minang. Rumah Masakan Padang Mahkota Minang adalah salah satu rumah makan cepat saji yang menyediakan menu khas daerah yang memiliki pasar potensial yan berasal dari segala umur , mulai dari mahasiswa hingga orang tua. Rumah makan ini memberikan layanan untuk makan ditempat.
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div class="card card-body">
                      <p>
                        <ol>
                          <li>
                            Diasumsikan ada 28 pesanan makanan.
                          </li>
                          <li>
                              Waktu packing pesanan dianggap normal tanpa mempertimbangkan :
                          </li>
                          <ul>
                            <li>Pada saat packing tidak ada gangguan seperti (berbincang) </li>
                            <li>Kecelakaan</li>
                            <li>Bahan packing seperti kertas bungkus habis dan karet</li>
                            <li>Antrian panjang saat pembelian</li>
                            <li>Hujan deras atau keadaan-keadaan lain akibat kejadian alam yang sifatnya tidak dapat diprediksi.</li>
                          </ul>
                          <li>
                              Biaya pesanan dengan menu paket hemat yang sama rata.
                          </li>
                          <li>
                              Proses pesanan makanan dilakukan menurut urutan pesanan, bukan berdasarkan usia atau jenis kelamin.
                          </li>
                          <li>
                              Jumlah pesanan hanya dihitung 1 item/pesanan , dalam artian pesanannya 1 tetapi itemnya lebih dari 1 tetap dihitung 1 pesanan.
                          </li>
                          <li>
                              Data pengamatan yang digunakan diambil pada segmen waktu 12.30-13.30 karena pada segmen waktu tersebut, rumah makan masakan padang uda banyak menerima pesanan dari konsumen untuk makan siang.
                          </li>
                          <li>
                              Variabel antara jumlah pelanggan dan lama packing makanan saat transaksi diasumsikan berdistribusi normal.
                          </li>
                          <li>
                              Setiap variabel simulasi menggunakan deret bilangan acak yang berbeda.
                          </li>
                          <li>
                              Bilangan acak yang digunakan adalah bilangan acak berdistribusi Uniform (U[0,1]) yang dibangkitkan dengan menggunakan metode tertentu dan setiap variabel-variabel antrial menggunakan bilangan acak yang berbeda. 
                          </li>
                          <li>
                              Setiap variabel diasumsikan menggunakan satuan detik.
                          </li>
                        </ol>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>

      <!-- table untuk data pengamatan -->
      <div class="row">
        <div class="col-sm-4 gm">
            <h3>Data Pengamatan</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <h5>1. Data Antar Kedatangan Pelanggan (Detik)</h5>
          <table class="table table-bordered">
            <tbody>
              <tr class="table-info">
                <td>69</td> <td>66</td> <td>120</td> <td>69</td> <td>60</td> <td>70</td> <td>61</td>
              </tr>
              <tr>
                <td>65</td> <td>118</td> <td>65</td> <td>63</td> <td>112</td> <td>69</td> <td>79</td>
              </tr>
              <tr>
                <td>70</td> <td>68</td> <td>68</td> <td>66</td> <td>68</td> <td>120</td> <td>69</td>
              </tr>
              <tr>
                <td>90</td> <td>67</td> <td>69</td> <td>80</td> <td>67</td> <td>120</td> <td>95</td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <div class="col-sm-4">
          <h5>2. Data Lama Pesanan Pelanggan (Detik)</h5>
          <table class="table table-bordered">
            <tbody>
              <tr class="table-info">
                <td>60</td> <td>90</td> <td>120</td> <td>90</td> <td>78</td> <td>60</td> <td>102</td>
              </tr>
              <tr>
                <td>120</td> <td>60</td> <td>60</td> <td>84</td> <td>96</td> <td>60</td> <td>120</td>
              </tr>
              <tr>
                <td>66</td> <td>114</td> <td>60</td> <td>96</td> <td>60</td> <td>84</td> <td>60</td>
              </tr>
              <tr>
                <td>120</td> <td>66</td> <td>72</td> <td>120</td> <td>102</td> <td>114</td> <td>66</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="col-sm-4">
          <h5>3. Data Lama Packing Pesanan Pelanggan (Detik)</h5>
            <table class="table table-bordered">
              <tbody>
                <tr class="table-info">
                  <td>60</td> <td>40</td> <td>57</td> <td>49</td> <td>58</td> <td>50</td> <td>48</td>
                </tr>
                <tr>
                  <td>56</td> <td>43</td> <td>39</td> <td>40</td> <td>61</td> <td>48</td> <td>40</td>
                </tr>
                <tr>
                  <td>59</td> <td>54</td> <td>48</td> <td>43</td> <td>58</td> <td>47</td> <td>31</td>
                </tr>
                <tr>
                  <td>38</td> <td>45</td> <td>41</td> <td>50</td> <td>59</td> <td>48</td> <td>47</td>
                </tr>
              </tbody>
            </table>
        </div>
      </div>

      <!-- tabel untuk data hasil pengamatan -->
      <div class="row">
        <div class="col-sm-4 gm">
          <h3>Data Hasil Pengamatan</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <h5>1. Data Antar Kedatangan</h5>
          <p>Range : 120-60 = 60</p>
          <p>Banyak kelas : 1 + 3.3 x log(28) = 5.7 -> 6</p>
          <p>Panjang kelas : 60/6 = 10</p>

          <table class="table table-bordered" width="50%">
            <tr>
              <td width="10px" class="table-danger">Interval</td> <td width="10px" class="table-danger">Frekuensi</td>
            </tr>
            <tr>
              <td>61 - 70</td> <td>19</td>
            </tr>
            <tr>
              <td>71 - 80</td> <td>2</td>
            </tr>
            <tr>
              <td>81 - 90</td> <td>1</td>
            </tr>
            <tr>
              <td>91 - 100</td> <td>1</td>
            </tr>
            <tr>
              <td>101 - 110</td> <td>1</td>
            </tr>
            <tr>
              <td>111 - 120</td> <td>4</td>
            </tr>
          </table>
        </div>


        <div class="col-sm-4">
          <h5>2. Data Lama Pesan</h5>
          <p>Range : 2-1 = 1</p>
          <p>Banyak kelas : 1 + 3.3 x log(28) = 5.7 -> 6</p>
          <p>Panjang kelas : 1/6 = 0.16</p>

          <table class="table table-bordered" width="50%">
            <tr>
              <td width="10px" class="table-danger">Waktu Pesan</td> <td width="10px" class="table-danger">Frekuensi</td>
            </tr>
            <tr>
              <td>60</td> <td>8</td>
            </tr>
            <tr>
              <td>66</td> <td>3</td>
            </tr>
            <tr>
              <td>72</td> <td>1</td>
            </tr>
            <tr>
              <td>78</td> <td>1</td>
            </tr>
            <tr>
              <td>84</td> <td>2</td>
            </tr>
            <tr>
              <td>90</td> <td>2</td>
            </tr>
            <tr>
              <td>96</td> <td>2</td>
            </tr>
            <tr>
              <td>102</td> <td>2</td>
            </tr>
            <tr>
                <td>102</td> <td>2</td>
            </tr>
            <tr>
              <td>120</td> <td>5</td>
            </tr>
          </table>
        </div>

        <div class="col-sm-4">
          <h5>3. Data Lama Packing</h5>
          <p>Range : 61-31 = 30</p>
          <p>Banyak kelas : 1 + 3.3 x log(28) = 5.7 -> 6</p>
          <p>Panjang kelas : 30/6 = 5</p>

          <table class="table table-bordered" width="50%">
              <tr>
                  <td width="10px" class="table-danger">Interval</td> <td width="10px" class="table-danger">Frekuensi</td>
              </tr>
              <tr>
                <td>30 - 34</td> <td>1</td>
              </tr>
              <tr>
                <td>35 - 39</td> <td>2</td>
              </tr>
              <tr>
                <td>40 - 44</td> <td>6</td>
              </tr>
              <tr>
                <td>45 - 49</td> <td>8</td>
              </tr>
              <tr>
                <td>50 - 54</td> <td>3</td>
              </tr>
              <tr>
                <td>55 - 59</td> <td>6</td>
              </tr>
              <tr>
                <td>60 - 64</td> <td>2</td>
              </tr>
          </table>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
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

echo"<h2 class=gm>Bilangan Acak dan Variabel yang Dibangkitkan</h2>";
echo"<h4>1. Data Antar Kedatangan Pelanggan </h4>";
echo"<table class=table table-bordered table-hover>";
echo"<thead class=table-primary>
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
?>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <?php
        echo"<h4 class=gm>2. Data Lama Packing</h4>";
echo"<table class=table table-bordered table-hover>";
echo"<thead class=table-success>
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
?>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <?php
echo"<h4 class=gm>3. Data Lama Pesan</h4>";
echo"<table class=table table-hover table-bordered>";
echo"<thead class=table-warning>
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
?>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <?php
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

echo"<h1 class=gm>SIMULASI</h1>";
echo"<table class=table table-bordered>";
echo"<thead class=table-success>";
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
echo"</thead>";
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

echo"</table>";
?>

        </div>
      </div>
    </div>    

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>