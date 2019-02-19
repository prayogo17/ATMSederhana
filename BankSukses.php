<?php
include('ATM.php');
class Bank implements ATM{
    private $kodeTransaksi;
    private $tangalTransaksi;


    public function __construct($kodeTransaksi, $tanggalTransaksi){
        $this->kodeTransaksi=$kodeTransaksi;
        $this->tanggalTransaksi=$tanggalTransaksi;

    }
    function setkodeTransaksi($kodeTransaksi){
$this->kodeTransaksi=$kodeTransaksi;

    }
    function getkodeTransaksi(){

      return $this->kodeTransaksi;
    }
    function settanggalTransaksi($tanggalTransaksi){
      $this->tanggalTransaksi=$tanggalTransaksi;
    }


    function gettanggalTransaksi(){
      return $this->tanggalTransaksi;


    }


function KeluarkanUang($nominal){
$nominal1=$nominal%100000;
if(!($nominal%10000)&&$nominal1!=30000&&$nominal1!=10000){
$nominal1=$nominal-100000;
if($nominal1<0){
$nominal1=$nominal-50000;
if($nominal1<0||$nominal==80000||$nominal==60000){
//tampilkan pecahan 20 ribu
  $nominal=floor($nominal/20000);
  $nominal=$nominal . "   Lembar"."<br><img id=\"gambar\" src=\"cc.jpg\"  width=\"300\">";//20
}
else if($nominal1==0){
$nominal=$nominal/50000;
$nominal=$nominal . "   Lembar"."<br><img id=\"gambar\" src=\"bb.jpg\"  width=\"300\">";

}
else{
//tampilkan pecahan 20 dan 50
  $nominal1=$nominal%50000;
  $nominal=floor($nominal/50000);
//$nominal1=($nominal*50000)+$nominal1;
$nominal1=floor($nominal1/20000);
$nominal=$nominal . "   Lembar"."<br><img id=\"gambar\" src=\"bb.jpg\"  width=\"300\">";
$nominal1=$nominal1 . "   Lembar"."<br><img id=\"gambar\" src=\"cc.jpg\"  width=\"300\">";
$nominal=$nominal . $nominal1;
echo "string1";


}

}
else if(!($nominal%100000)){
  $nominal=$nominal/100000;
$nominal=$nominal . "   Lembar"."<br><img id=\"gambar\" src=\"aa.jpg\"  width=\"300\">";
}











else{
//lebih dari 100
  $nominal1=$nominal%100000;
  $nominal=floor($nominal/100000);
$nominal=$nominal . "   Lembar"."<br><img id=\"gambar\" src=\"aa.jpg\"  width=\"300\">";
  $nominal2=$nominal1-50000;
  if($nominal2<0||$nominal1==80000||$nominal1==60000){

  //tampilkan pecahan 20 ribu
    $nominal1=floor($nominal1/20000);
    $nominal1=$nominal1 . "   Lembar"."<br><img id=\"gambar\" src=\"cc.jpg\"  width=\"300\">";//20
    $nominal=$nominal1.$nominal;
  }
else if($nominal1==50000){
$nominal1=$nominal1/50000;
$nominal1=$nominal1 . "   Lembar"."<br><img id=\"gambar\" src=\"bb.jpg\"  width=\"300\">";
$nominal=$nominal1.$nominal;
}
  else{

  //tampilkan pecahan 20 dan 50
    $nominal2=$nominal1%50000;
    $nominal1=floor($nominal1/50000);
  //$nominal2=($nominal1*50000)+$nominal1;
  $nominal2=floor($nominal2/20000);
  $nominal1=$nominal1 . "   Lembar"."<br><img id=\"gambar\" src=\"bb.jpg\"  width=\"300\">";
  $nominal2=$nominal2 . "   Lembar"."<br><img id=\"gambar\" src=\"cc.jpg\"  width=\"300\">";
$nominal=$nominal2.$nominal1.$nominal;


  }


}


}else{

$nominal=0;

}

return $nominal;
}


}



?>
