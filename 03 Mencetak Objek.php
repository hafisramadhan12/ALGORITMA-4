<?php
class Buah {
  public $nama;
  public $umur;

  public function __construct($nama, $umur){
    $this->nama = $nama;
    $this->warna = $umur;
  }
}

$makanan = new Buah("nasi goreng", "nasi padang");
print_r($makanan);

echo "<br><br><br><strong>by M HAFIDZ RAMADHAN NST!";