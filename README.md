# <center><strong> Laporan Praktikum Web Lanjut </center>

# <center> Jobsheet 2 </strong></center>

## <center><strong>NIM : 2241720107 <br></center>

## <center><strong>Nama : Denny Malik Ibrahim <br></center>

## <center><strong>Kelas : TI-2H</center>

<br>
<br>

## Basic Routing<br>

Membuat route hello world <br>
![alt text](images/image-3.png)
![alt text](images/image.png)

Membuat route world <br>
![alt text](images/image-4.png)
![alt text](images/image-1.png)

Membuat route selamat datang <br>
![alt text](images/image-5.png)
![alt text](images/image-2.png)

Membuat route about <br>
![alt text](images/image-6.png)
![alt text](images/image-7.png)

## Route Parameters <br>

![alt text](images/image-8.png)
![alt text](images/image-9.png)

Dengan 2 parameter <br>
![alt text](images/image-10.png)
![alt text](images/image-11.png) <br>
Suatu route, juga bisa menerima lebih dari 1 parameter

![alt text](images/image-13.png)
![alt text](images/image-12.png)

## Optional Parameters <br>

![alt text](images/image-14.png)
![alt text](images/image-16.png) <br>
Parameter boleh tidak diisi karena diinialisasi bisa sama dengan null

![alt text](images/image-17.png)
![alt text](images/image-18.png) <br>
Muncul nama sesuai parameter yang diinisialisasikan

## Controller <br>

![alt text](images/image-19.png)
![alt text](images/image-20.png)

Menambah di route <br>
![alt text](images/image-21.png)
![alt text](images/image-22.png) <br>
Setelah sebuah controller telah didefinisikan action, kita dapat menambahkan controller tersebut pada route

## PageController <br>

![alt text](images/image-23.png)
![alt text](images/image-24.png)
![alt text](images/image-25.png) <br>

Memodifikasi kembali implementasi sebelumnya dengan konsep Single Action Controller <br>

## HomeController <br>

![alt text](images/image-26.png)

## About controller <br>

![alt text](images/image-27.png)

## Articles controller <br>

![alt text](images/image-28.png)

## photoController <br>

![alt text](images/image-29.png)

## View <br>

![alt text](images/image-30.png) <br>

Melakukan perubahan pada route karena file hello masuk kedalam folder blog <br>
![alt text](images/image-31.png)
![alt text](images/image-32.png) <br>
Hasilnya sama aja <br>

Mengubah route dan mengarahkan ke WelcomeController <br>
![alt text](images/image-33.png)
![alt text](images/image-34.png)
Hasilnya juga sama <br>

Mengubah fungsi greeting <br>
![alt text](images/image-35.png)

Menampilkan 2 parameter pada hello.blade <br>
![alt text](images/image-36.png)
![alt text](images/image-37.png) <br>
Meneruskan array data lengkap ke fungsi view helper menggunakan metode with untuk menambahkan bagian data individual ke view. Metode with mengembalikan instance view objek sehingga kita dapat melanjutkan rangkaian metode sebelum mengembalikan tampilan