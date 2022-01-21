<?php

class Produk {
    public $judul, $penulis, $penerbit, $harga;
    
    public function __construct($judul, $penulis, $penerbit, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function getLabel(){
        return "$this->judul,$this->penulis,$this->penerbit";
    }

}


$produk3 = new Produk("Peaky Blinder", "Steven Knight", "BBC", "100rb");
echo $produk3->getLabel();
?>