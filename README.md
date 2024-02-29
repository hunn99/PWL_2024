# <center><strong> Laporan Praktikum Web Lanjut </center>

# <center> Jobsheet 2 </strong></center>

## <center><strong>NIM : 2241720107 <br></center>

## <center><strong>Nama : Denny Malik Ibrahim <br></center>

## <center><strong>Kelas : TI-2H</center>

<br>
<br>

## Basic Routing

Membuat route hello world
![alt text](images/image-3.png)
![alt text](images/image.png)

Membuat route world
![alt text](images/image-4.png)
![alt text](images/image-1.png)

Membuat route selamat datang
![alt text](images/image-5.png)
![alt text](images/image-2.png)

Membuat route about
![alt text](images/image-6.png)
![alt text](images/image-7.png)

## Route Parameters

![alt text](images/image-8.png)
![alt text](images/image-9.png)

Dengan 2 parameter
![alt text](images/image-10.png)
![alt text](images/image-11.png)
Suatu route, juga bisa menerima lebih dari 1 parameter

![alt text](images/image-13.png)
![alt text](images/image-12.png)

## Optional Parameters

![alt text](images/image-14.png)
![alt text](images/image-16.png)
Parameter boleh tidak diisi karena diinialisasi bisa sama dengan null

![alt text](images/image-17.png)
![alt text](images/image-18.png)
Muncul nama sesuai parameter yang diinisialisasikan

## Controller

![alt text](images/image-19.png)
![alt text](images/image-20.png)

Menambah di route
![alt text](images/image-21.png)
![alt text](images/image-22.png)
Setelah sebuah controller telah didefinisikan action, kita dapat menambahkan controller tersebut pada route

## PageController

![alt text](images/image-23.png)
![alt text](images/image-24.png)
![alt text](images/image-25.png)

Memodifikasi kembali implementasi sebelumnya dengan konsep Single Action Controller

## HomeController

![alt text](images/image-26.png)

## About controller

![alt text](images/image-27.png)

## Articles controller

![alt text](images/image-28.png)

## photoController

![alt text](images/image-29.png)

## View

![alt text](images/image-30.png)

Melakukan perubahan pada route karena file hello masuk kedalam folder blog
![alt text](images/image-31.png)
![alt text](images/image-32.png)
Hasilnya sama aja

Mengubah route dan mengarahkan ke WelcomeController
![alt text](images/image-33.png)
![alt text](images/image-34.png)
Hasilnya juga sama

Mengubah fungsi greeting
![alt text](images/image-35.png)

Menampilkan 2 parameter pada hello.blade
![alt text](images/image-36.png)
![alt text](images/image-37.png)
Meneruskan array data lengkap ke fungsi view helper menggunakan metode with untuk menambahkan bagian data individual ke view. Metode with mengembalikan instance view objek sehingga kita dapat melanjutkan rangkaian metode sebelum mengembalikan tampilan