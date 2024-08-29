<?php
class Buah {
  public $nama;
  public $umur;

  public function __construct($nama, $umur){
    $this->nama = $nama;
    $this->warna = $umur;
  }
}

$apis = new Buah("hafis", "ilham");
$usia = new Buah("16", "16");
print_r($apis);
print "<p>";
print_r($usia);

echo "<br><br><br><strong>by M HAFIDZ RAMADHAN NST!";