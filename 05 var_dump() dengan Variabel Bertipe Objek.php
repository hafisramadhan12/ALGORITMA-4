<?php
class makanan {
    public $merk ;
    public $model;
}

$mobil_baru = new makanan();
$mobil_baru->merk = "<br>aceh";
$mobil_baru->model = "<br>padang";

var_dump($mobil_baru);
?>