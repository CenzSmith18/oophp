<?php

class Produk {
    public $judul, $penulis, $penerbit, $harga, $jmlhHal, $waktu, $tipe;
    
    public function __construct($judul, $penulis, $penerbit, $harga, $jmlhHal, $waktu, $tipe){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhHal = $jmlhHal;
        $this->waktu = $waktu;
        $this->tipe = $tipe;
    }
    public function getLabel(){
        return "$this->penulis,$this->penerbit";
    }
    public function getInfoLengkap() {
        $str= "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if($this->tipe == "Film"){
            $str .=" - {$this->jmlhHal} Halaman";
        } else if($this->tipe == "Game") {
            $str .= "- {$this->waktu} Waktu";
        }
        return $str;
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}
$produk2 = new Produk("Peaky Blinder", "Steven Knight", "BBC", "100rb", 100, 0, "Film");
$produk3 = new Produk("Peaky Blinder2", "Steven Knight2", "BBC2", "100rb", 0, 50, "Game");
//echo $produk3->getLabel();

echo $produk2->getInfoLengkap();
echo "<br>";
echo $produk3->getInfoLengkap();
?>