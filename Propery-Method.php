<?php

/*
Property
-Merepresentasikan data / keadaan dari sebuah object
-Variabel yang ada di dalam objek (member variable)
-Sama seperti variable di dalam PHP, ditambah dengan visibility di depannya

Method
-Merepresentasikan perilaku dari sebuah objek
-Function yang ada di dalam object
-Sama seperti function di dalam PHP, ditambah dengan visibility di depannya

Property Mobil
-nama
-merk
-warna
-Kecepatan Maksimal
-Jumlah Penumpang
Method Mobil
-Tambah Kecepatan
-Kurangi Kecepatan
-Ganti Transmisi
-Belok Kiri
-Belok Kanan

*/
//Contoh Kodingan
class Produk {
    public $judul, $penulis, $penerbit, $harga;
    
    public function sayhello() {
        return "Hello World";
    }
    public function getLabel(){
        return "Series : $this->judul, Penulis : $this->penulis, Penerbit : $this->penerbit";
    }

}

    /*$produk1 = new Produk();
    $produk1->judul = "Peaky Blinder";
    var_dump($produk1);

    $produk2 = new Produk();
    $produk2->judul = "God Father";
    var_dump($produk2);*/

    $produk3 = new Produk();
    $produk3->judul = "Peaky Blinder";
    $produk3->penulis = "Steven Knight";
    $produk3->penerbit = "BBC";
    $produk3->harga = "100rb";

    $produk4 = new Produk();
    $produk4->judul = "God Father";
    $produk4->penulis = "Test";
    $produk4->penerbit = "TEst";
    $produk4->harga = "100rb";


    echo "Series: $produk3->judul, Penulis: $produk3->penulis, Penerbit : $produk3->penerbit";
    echo "<br>";
    echo "Movie: $produk4->judul, Penulis: $produk4->penulis, Penerbit : $produk4->penerbit";
    echo "<br>";
    echo $produk3->getLabel();