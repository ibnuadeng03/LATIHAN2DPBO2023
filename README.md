# DESAIN DAN PEMROGRAMAN BERORIENTASI OBJEK
```
Mata Kuliah Pemrograman Berorientasi Objek (IK290).
Mata Kuliah Wajib Kurikulum Semester Genap.
Fakultas Pendidikan Matematika dan Ilmu Pengetahuan Alam.
Departement Of Computer Science Education. 
Program Studi Ilmu Komputer.

(2658) ROSA ARIANI SUKAMTO, S.T., M.T.
       NIP. 19810918 200912 2 003
       Penata III/c
       Lektor
```
> IBNU ADENG KURNIA - 2101769 - KOM4C2 - © 2023 Univ. Pendidikan Indonesia

## Pert-2. Inheritence (Bag.I)
*Repositori ini dibuat sebagai dokumentasi fortofolio pengerjaan latihan-latihan soal variatif dalam mata kuliah ini, diharapkan setelah memahami pokok bahasan pembelajaran dan mencoba diimplementasikan ke latihan soal-soal, mahasiswa diharapkan :*
```
a. Mahasiswa mampu memahami konsep Object Oriented Programming (OOP) digunakan untuk penyelesaian permasalahan-permasalahan yang ada.
b. Mahasiswa mampu memahami perbedaan antara Class dan object, implementasi class dan object, method dalam berbagai bahasa (C++, java, PHP, pyhton) serta type data nya.
c. Mahasiswa mampu memahami konsep Inheretence dan implementasinya dalam Pemrograman Berorientasi Objek.
```

> Saya Ibnu Adeng Kurnia NIM 2101769 mengerjakan latihan ke-2  dalam mata kuliah desain dan pemrograman berorientasi objek C2 2023
	untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. 
	Aamiin.

*Design ini disusun dan/atau digunakan hanya untuk lingkungan sendiri.
	Tidak untuk menjadi konsumsi/kepentingan umum.
	Hanya untuk melengkapi tugas DPBO 2023.*

### Bahasa Pemrograman Yang Dipakai :
- [X] [Java](https://azure.microsoft.com/id-id/resources/cloud-computing-dictionary/what-is-java-programming-language/) : bahasa pemrograman *Object Oriented multiplatform* yang pada umumnya digunakan untuk pengembangan aplikasi dan website yang sampai saat ini dijalankan pada miliaran perangkat di seluruh dunia.
- [X] [C++](https://www.duniailkom.com/tutorial-belajar-c-plus-plus-pengertian-bahasa-pemrograman-c-plus-plus/) : bahasa pemrograman komputer yang bisa dipakai untuk membuat berbagai aplikasi *(general-purpose programming language)*, dan merupakan pengembangan dari bahasa pemrograman C.
- [X] [*Hypertext Preprocessor* atau PHP](https://www.hostinger.co.id/tutorial/apa-itu-php/) : bahasa penulisan skrip *open-source* yang banyak digunakan dalam pemrograman atau pengembangan website *(web development)*. Bahasa ini umumnya dijalankan dalam komunikasi sisi server, dan saat ini didukung oleh hampir semua sistem.
- [X] [Pyhton](https://aws.amazon.com/id/what-is/python/#:~:text=Python%20adalah%20bahasa%20pemrograman%20yang,dapat%20dijalankan%20di%20berbagai%20platform.) : bahasa pemrograman yang banyak digunakan dalam aplikasi website, pengembangan perangkat lunak, ilmu data, *big data*, Kecerdasan Buatan dan *machine learning*. *Developer* menggunakan Python karena efisien dan mudah dipelajari serta dapat dijalankan di berbagai *platform*.

### Desain Program :
Desain yang dibuat menggunakan beberapa kelas, diantaranya :
1. Human
   - Kelas human memiliki 3 atribut, diantaranya : NIK, Nama dan Jenis Kelamin.
2. Sivitas Akademik
   - Kelas Sivitas Akademik memiliki 2 atribut, diantaranya : asal universitas dan email.
3. Mahasiswa
   - Kelas Sivitas Akademik memiliki 4 atribut, diantaranya : NIM, Prodi, Fakultas dan Pas Foto (hanya untuk bhs.PHP)
4. Crud
   - Kelas CRUD memiliki 5 atribut, yakni : email, asal universitas, NIM, Nama dan jenis kelamin.
   - Kelas ini memiliki 2 method yakni : create dan read.

Semua kelas diatas dilengkapi dengan setter dan getternya. Pada kelas-kelas tersebut ada multi-level inheritance yakni dari dari **Class Human** -> **Class SivitasAkademik** -> **Class Mahasiswa**. Hal ini terjadi karena Mahasiswa merupakan Human dan Sivitas akademik juga merupakan Human, sehingga inheriten-nya seperti dijelaskan diatas.

### Tools :
- [X] [MinGW](http://ayobikinprogram.blogspot.com/2012/06/mingw.html) : salah satu aplikasi yng digunakan untuk mengkompile bahasa C/C++ agar dapat dipahami oleh bahasa mesin *(asembler)* pada komputer.
- [X] [JDK](https://www.duniailkom.com/tutorial-belajar-java-part-3-pengertian-jre-dan-jdk/) : JDK atau lengkapnya *Java Development Kit* adalah sebuah paket aplikasi yang berisi JVM *(Java Virtual Machine)* + JRE *(Java Runtime Environment)* + berbagai aplikasi untuk proses pembuatan kode program Java.
- [X] [*Visual Studio Code/Sublime*/Notepad++](https://www.gramedia.com/best-seller/text-editor-terbaik-programmer/) :  sebuah code editor gratis yang bisa dijalankan di perangkat desktop berbasis Windows, Linux, dan MacOS.
- [X] [XAMPP](https://www.jogjahost.co.id/blog/xampp-adalah/) : sebuah software yang menjalankan peran sebagai *local web server/localhost*. XAMPP dikembangkan oleh *Apache Friends*. *Apache Friends* sendiri merupakan proyek nirlaba yang bertujuan untuk mempromosikan server web *Apache*. Selain dari itu terdapat juga di dalamnya MariaDB, PHP, dan Perl.
- [X] [Google Chrome](https://dianisa.com/pengertian-google-chrome/) : browser web lintas *platform* yang dikembangkan oleh Google. *Chrome* pertama kali dirilis pada tanggal 2 September 2008. Namun pada awal perilisan Google Chrome, *Software* ini hanya dapat digunakan untuk sistem operasi Microsoft Windows serta kemudian porting ke Linux, macOS, iOS, dan juga Android.

### Requirements : 
+ MinGW (diharapkan versi yang terbaru)
+ JDK (diharapkan versi yang terbaru)
+ XAMPP (diharapkan versi yang terbaru)
+ Python (diharapkan versi yang terbaru)

### Running and Instalation :
##### Bahasa Pemrograman Java
1. Simpan semua file dalam folder yang sama
2. Buka lokasi penyimpanan folder pada terminal
3. Jalankan
```
javac *.java
java Main
```
##### Untuk Bahasa Pemrograman C++
1. Simpan semua file dalam folder yang sama
2. Buka lokasi penyimpanan folder pada terminal
3. Jalankan 
```
g++ main.cpp -o [nama file anda].exe
[nama file anda].exe
```
##### Untuk Bahasa Pemrograman PHP *(Hypertext Preprocessor)*
1. Simpan semua file Anda ke dalam *C:\xampp\htdocs\[folder anda]*
2. Jalankan Apache pada XAMPP Control panel
3. Buka browser dan akses file dengan mengetikkan *localhost/[folder anda]/[nama file anda] (umumnya index.php)* pada bagian URL
4. Maka secara otomatis Anda akan mengakses file index atau halaman utama dari web sistem ini

##### Untuk Bahasa Pemrograman Python
1. Simpan semua file dalam folder yang sama
2. Buka lokasi penyimpanan folder pada terminal
3. Jalankan
```
py main.py
```
### Dokumentasi Running Program
##### A. Berikut merupakan dokumentasi hasil running dalam bahasa pemrograman PHP
##### ![PHP](/php/screenshot/1.png "1")
##### ![PHP](/php/screenshot/2.png "2")
##### ![PHP](/php/screenshot/3.png "3")

##### B. Berikut merupakan dokumentasi hasil running dalam bahasa pemrograman Java
##### ![Java](/java/SCREENSHOT/1.png "1")
##### ![Java](/java/SCREENSHOT/2.png "2")

##### C. Berikut merupakan dokumentasi hasil running dalam bahasa pemrograman C++
##### ![C++](/C++/Screenshot/1.png "1")
##### ![C++](/C++/Screenshot/2.png "2")

##### D. Berikut merupakan dokumentasi hasil running dalam bahasa pemrograman Python
##### ![Pyhton](/pyhton/screenshot/1.png "1")

### **Catatan**
*Penjelasan dan/atau tampilan hasil program dari kode ini, dimuat didalam  folder yang berinduk difolder "screenshoot"*

#### [Copyright © 2023. IBNU ADENG KURNIA.](https://me-qr.com/id/entry/vcard/MjuIan4)
###### Univ. Pendidikan Indonesia.
###### All Rights Reserved.
