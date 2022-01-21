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

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk3 = new Produk("Peaky Blinder", "Steven Knight", "BBC", "100rb");
//echo $produk3->getLabel();


$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk3);
?>