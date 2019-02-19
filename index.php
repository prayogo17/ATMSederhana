





<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <script src="java.js">

    </script>


    <meta charset="utf-8">
    <title>Mesin ATMa</title>
  </head>
  <body>

<div id="wrap">
  <form  method="post" action="index.php">
    <input type="text" name="nominal" placeholder="Nominal Uang" id="hsl" onkeyup="hargamodif()">
    <input type="submit" name="tombol" value="Ambil">


<div id="gambar">
  <?php
  include('BankSukses.php');
   $tanggal=date('d/m/Y h:ia');
  $tr1=new Bank("TR1", $tanggal);
  $hasil=0;
  if(isset($_POST['nominal'])){
  $hasil=$_POST['nominal'];
  $hasil=str_replace("Rp. ","",$hasil);
    $hasil=str_replace(".","",$hasil);


$hasil=  $tr1->KeluarkanUang($hasil);
  }
  if($hasil!=0){
  echo $tr1->getkodeTransaksi()."<br>".$tr1->gettanggalTransaksi();
  echo "<br><h1>". $hasil ."</h1>";
}else if($hasil==0&&isset($_POST['nominal'])){
echo "<br><h1>". "Pecahan Untuk Nominal Tersebut Tidak Ada" ."</h1>";

}
   ?>
</div>
  </form>



</div>
<div id="hasil">

</div>


  </body>
</html>
