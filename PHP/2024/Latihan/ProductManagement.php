<?php 
/*
### Soal Pemrograman: Manajemen Produk di Toko Online

**Deskripsi:**
Buatlah program untuk mengelola **daftar produk** di sebuah toko online menggunakan **OOP**. Program ini akan mencakup fitur berikut:
1. Tambah produk ke daftar.
2. Tampilkan informasi produk.
3. Akses data produk menggunakan properti yang tidak dideklarasikan secara langsung dengan memanfaatkan magic method `__set` dan `__get`.

---

**Kriteria Program:**
1. Buat sebuah kelas bernama `Produk` yang memiliki properti berikut:
   - `nama` (string) → Nama produk.
   - `harga` (float) → Harga produk.
   - `stok` (int) → Jumlah stok produk.
   
   Properti-properti tersebut harus diakses melalui magic method `__get` dan diatur melalui magic method `__set`.

2. Buat sebuah kelas bernama `ManajemenProduk` untuk mengelola daftar produk. Kelas ini memiliki fitur:
   - Menyimpan daftar produk dalam array.
   - Metode untuk menambahkan produk ke daftar (`tambahProduk`).
   - Metode untuk menampilkan semua produk dalam bentuk daftar (`tampilkanProduk`).

3. Ketentuan:
   - Saat menambahkan produk, validasi data (contoh: harga dan stok harus bernilai positif).
   - Jika ada properti yang diakses atau diatur secara langsung (tidak dideklarasikan), tampilkan pesan error di `__get` atau `__set`.

---

**Instruksi:**
1. Buat kelas `Produk` dengan implementasi `__get` dan `__set`.
2. Buat kelas `ManajemenProduk` dengan fungsi-fungsi yang sesuai.
3. Tambahkan minimal **3 produk** ke daftar menggunakan metode `tambahProduk`.
4. Tampilkan seluruh daftar produk dengan format: `Nama Produk: ..., Harga: ..., Stok: ...`.

---

**Output yang Diharapkan:**
Misalnya, Anda menambahkan produk:
- Nama: Laptop, Harga: 15,000,000, Stok: 10
- Nama: Mouse, Harga: 250,000, Stok: 50
- Nama: Keyboard, Harga: 750,000, Stok: 30

Output:
```
Nama Produk: Laptop, Harga: 15000000, Stok: 10
Nama Produk: Mouse, Harga: 250000, Stok: 50
Nama Produk: Keyboard, Harga: 750000, Stok: 30
```

Jika ada properti yang tidak valid:
```
Error: Properti 'warna' tidak ditemukan.
```

---

**Tujuan Latihan:**
- Memahami cara kerja magic method `__set` dan `__get`.
- Menerapkan konsep **encapsulation** dan **validasi**.
- Mengintegrasikan kelas untuk menyelesaikan sebuah kasus nyata.
*/

class Laptop{
    protected $data = [];

    function __set($name,$value){
        if(isset($this->data[$name])){
            return $this->data[$name];
        }
        return $this->data[$name] = $value;
    }

    function __get($name){
        return $this->data[$name] ?? Null;
    }
}

class Produk{
    private string $nama;
    private float $harga;
    private int $stok;

    function __set(string $nama,float $harga){
        $this->nama = $nama;
        $this->harga = $harga;
    }
    function setStock(int $stock){
        $this->stok = $stock;
        return $this->stok;
    }

    function __get(string $nama){
        return ($nama == $this->nama) ? $this->nama:"Tidak ada nama produk tersebut didalam daftar";
    }

    function getlist(){
        return "nama: $this->nama harga: $this->harga stok : $this->stok";
    }
}

class ManajemenProduk extends Produk{
    public $data = [[]];
    private $i = 0;
    function tambahProduk(){
        $this->data[]["Nama"] = $this->nama;
        $this->data[]["Harga"] = $this->harga;
        $this->data[]["Stok"] = $this->stok;}
    function tampilkanProduk(){
        $data = $this->data;
        foreach($data as $isi){
            print_r($isi);
        }
    }
}

$a = new Produk;
$a->Lenovo = 5000000;
$a->Asus = 2000000;
$a->setStock(3);
echo $a->__get("Lenovo");
echo $a->__get("Asus");
echo $a->getlist();

$b = new ManajemenProduk;
$b->tambahProduk();