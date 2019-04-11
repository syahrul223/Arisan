# How To Use

## Penginstalan

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

buka Command Line, lalu masukan source code berikut
```
git clone git@github.com:syahrul223/Arisan.git

composer install

```
Lalu buat db_arisan, setelah itu masukan source code berikut kedalam Commnad Line

```
php artisan key:generate

php artisan migrate
```

untuk menjalankanya 

```
php artisan serve
```

## Cara Pemakaian Aplikasi

disini akan dijelaskan bagaimana tata cara penggunaan aplikasi arisan berbasis web

![main](https://user-images.githubusercontent.com/42232274/55971148-1dc31d00-5cab-11e9-891b-3fc49b5bafe8.PNG)

untuk tampilan awal bisa dilihat pada gambar diatas

### fungsi tambah

Klik button tambah yang ada pada pojok kanan atas pada halaman website

![Tambah](https://user-images.githubusercontent.com/42232274/55971310-6e3a7a80-5cab-11e9-9bb8-cd3fe7691a88.PNG)

Setelah itu, halaman akan mengarahkan ke sebuah formulir pengisian untuk data yang akan ditambahkan

![formTambah](https://user-images.githubusercontent.com/42232274/55971464-bb1e5100-5cab-11e9-98e5-752d2c53a5bf.PNG)

nah, apabila sudah ditampilkan maka isi lah form tersebut dengan data yang akan dimasukan. apabila sudah selesai maka tekan Submit

![inputFormTambah](https://user-images.githubusercontent.com/42232274/55971550-e739d200-5cab-11e9-994f-4de3671879bf.PNG)

![tambahResult](https://user-images.githubusercontent.com/42232274/55971645-16e8da00-5cac-11e9-8308-b24c7f06b171.PNG)

data anggota akan ditambahkan dengan status belum bayar dan belum menang

### fungsi ubah

Klik button ubah

![ubah](https://user-images.githubusercontent.com/42232274/55971831-721acc80-5cac-11e9-9667-2e0d2d675de3.PNG)

Lalu ubah lah data. Jika sudah selesai, maka tekan submit

![EditForm](https://user-images.githubusercontent.com/42232274/55972026-de95cb80-5cac-11e9-96ab-7d7ae7f26bfa.PNG)

![ubahForm](https://user-images.githubusercontent.com/42232274/55972647-18b39d00-5cae-11e9-8a61-d41dcb06de19.PNG)

Setelah itu, bisa dilihat hasil nya

![ubahResult](https://user-images.githubusercontent.com/42232274/55972926-ab543c00-5cae-11e9-8add-46a3425fae86.PNG)

Maka Data Akan terubah

### fungsi delete

Klik Button Delete ( Saya mencontohkan 2 penghapusan data sekaligus )

![delete](https://user-images.githubusercontent.com/42232274/55973008-e22a5200-5cae-11e9-82b5-4d5ee9bbfb31.PNG)

![deleteRes](https://user-images.githubusercontent.com/42232274/55973219-49480680-5caf-11e9-93ea-c9d059561d66.PNG)

maka data yang dipilih akan hilang pada tabel

### Untuk Pengkocokan Arisan

Diharapkan seluruh anggota yang ada harus sudah lunas pembayaranya, apabila ingin membayar klik tombol bayar

maka akan mengubah status bayar pada tabel

![deleteRes](https://user-images.githubusercontent.com/42232274/55973219-49480680-5caf-11e9-93ea-c9d059561d66.PNG)

![ready](https://user-images.githubusercontent.com/42232274/55973405-b196e800-5caf-11e9-9c79-6693bdba490b.PNG)

nah tombol pengkocokan sudah tersedia. apabila ingin mengkocok, tekan button Kocok.

![menang](https://user-images.githubusercontent.com/42232274/55973488-e30fb380-5caf-11e9-8bd7-9c4c4f8d8f09.PNG)

apabila sudah dilakukan pengkocokan, pemenang akan terlihat dengan berubahnya warna baris seorang pemenang

### Penting

Untuk fitur pencarian sama sekali belum dibuat, namun untuk bisnis saya masih bingung. mungkin yang semua harus bayar itu salah satu
persoalan bisnis....
