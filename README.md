# OctoberCMS Plugin Untuk Manajemen Iklan 

Ini adalah plugin untuk OctoberCMS, digunakan agar kita dapat melakukan manajemen iklan dengan lebih mudah.

## Kebutuhan

Agar bisa berjalan dengan baik dibutuhkan OctoberCms versi >= 1, serta [OwlCarousel](https://owlcarousel2.github.io/OwlCarousel2/) telah terinstall pada template yang dipilih. 

Pada dasarnya plugin ini tidak melakukan dikte terhadap library javascript yang anda pilih, namun secara default owlCarousel adalah yang didukung oleh plugin ini agar dapat melakukan pergantian gambar iklan secara otomatis.

## Instalasi

Terdapat dua buah cara melakukan instalasi paket ini.

### Instalasi Menggunakan composer:

```
$ composer install panatausolusindo/iklan
```

### Instalasi Menggunakan git

Dari path root plugins octobercms:

```
octobercms\plugins $ mkdir panatausolusindo
octobercms\plugins $ cd panatausolusindo
octobercms\plugins\panatausolusindo $ git clone https://github.com/panatausolusindo/iklan
```

### Lakukan Migrasi

Setelah melakukan langkah instalasi menggunakan composer maupun git di atas, kemudian:

```
$ php artisan october:migrate
```

## Data Awal: Client

Client adalah yang membeli hak atas penayangan gambar iklan.

## Data Awal: Tempat

Tempat adalah lokasi pada template, pilihan render iklan. Setiap tempat akan memiliki `nama` yang menjadi referensi nantinya sebagai bagian dari proses render gambar iklan.

## Iklan

Setelah data telah terisi dilanjutkan dengan entri iklan.

![image](https://user-images.githubusercontent.com/1888139/125639718-d748e45e-ec5c-46b7-afce-5800a669d2d5.png)


## Komponen Render Iklan

Ini digunakan sebagai komponen untuk melakukan render berdasarkan `nama` tempat kita ingin gambar iklan muncul. Misalnya pada iklan di `Header` kita gunakan komponen dengan setting sebagai berikut:

```
[renderIklan renderIklanBannerAtas]
penempatanIklanIni = "Header"
==
{% component 'renderIklanBannerAtas' %}
```

## Komponen Loader Iklan

Ini adalah komponen opsional apabila menggunakan setting default library `owlCarousel`. Digunakan untuk melakukan load `owlCarousel` pada daftar iklan yang telah dirender sebelumnya. Script ini sebaiknya dirender pada bagian `footer` template.
