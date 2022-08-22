<?php
require('Form.php');
class Siswa{
   var $nis;
   public $nama; 
   public $tahun;
   public $kota;

   //function __construct(){
   // $this->nis="K4131";
   // $this->nama="Khaila";
   //$this->tahun="2006";
   // $this->kota="Bogor";
   //$this->CetakData();
   //}
      

   public function IsiData($nis,$nama,$tahun,$kota){
    $this->nis=$nis;
    $this->nama=$nama;
    $this->tahun=$tahun;
    $this->$kota=$kota;
   }

   public function CetakData(){
    echo"NIS Siswa ".$this->nis."</br>";
    echo"Nama Siswa ".$this->nama."</br>";
    echo"Tahun lahir Siswa ".$this->tahun."</br>";
    echo"Kota asal Siswa ".$this->kota."</br>";
    echo"Umur Siswa".$this->HitungUmur()."</br>";
   }

   public function HitungUmur(){
      $umur=date('Y') - $this->tahun;
      return $umur;
   }

   public function InputForm(){
      $formSiswa=new Form('','Input Siswa');
      $formSiswa->AddField('nis','NIS Siswa');
      $formSiswa->AddField('nama','Nama Siswa');
      $formSiswa->AddField('tahun','Tahun Lahir Siswa');
      $formSiswa->AddField('kota','Kota Asal Siswa');
      if(isset($_POST['tombol'])){
         $data=$formSiswa->GetData();
         $this->nis=$data[0];
         $this->nama=$data[1];
         $this->tahun=$data[2];
         $this->kota=$data[3];
         $this->CetakData();
      }
      else{

      $formSiswa->DisplayForm();
      
      }
   }
}
?>