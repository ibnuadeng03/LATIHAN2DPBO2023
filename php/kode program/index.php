<?php
/*  
	Saya Ibnu Adeng Kurnia NIM 2101769 mengerjakan latihan ke-2
	dalam mata kuliah desain dan pemrograman berorientasi objek C2 2023
	untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. 
	Aamiin.
*/

/*  Design ini disusun dan/atau digunakan hanya untuk lingkungan sendiri.
	Tidak untuk menjadi konsumsi/kepentingan umum.
	Hanya untuk melengkapi tugas DPBO 2023.
*/

include "Crud.php";

// ------ pendeklarasian -------- //
$dataMahasiswa = array();           
$temp = new Crud($dataMahasiswa); 

// MENAMBAHKAN DATA HARDCODE
$temp->tambahData(0, "3183749492834957442", "Arya Saloka Yuda Prawira", "Pria", "Universitas Negeri Malang", "aryasaloka@gmail.com", "100533402625", "Pendidikan Teknik Informatika", "Fakultas Teknik", "asset/aryasaloka.png");
$temp->tambahData(1, "3482638494746383934", "Amanda Manopo", "Perempuan", "Institut Pertanian Bogor", "andin@gmail.com", "14485920283923", "Ilmu Hukum", "Fakultas Hukum", "asset/andin.png");
$temp->tambahData(2, "3183742930347489491", "Hj. Hetty Koes Endang", "Perempuan", "Institut Seni dan Budaya Indonesia", "bundaahety@gmail.com", "0024719386", "Seni Karawitan", "Fakultas Seni dan Desain", "asset/bundahety.jpg");
$temp->tambahData(3, "3948294637282743482", "Andhika Subagja", "Pria", "Universitas Pendidikan Indonesia", "andikas@upi.edu", "1273892", "Teknik Sipil", "Fakultas Pendidikan Teknologi dan Kejuruan", "asset/andika.jpg");
$temp->tambahData(4, "3728190001748327349", "Ibnu Adeng Kurnia", "Pria", "Universitas Pendidikan Indonesia", "ibnuadeng0303@upi.edu", "2101769", "Ilmu Komputer", "Fakultas Pendidikan Matematika dan Ilmu Pengetahuan Alam", "asset/ibnu.jpg");
$temp->tambahData(5, "3278039211647201344", "Intan Rara Juliana", "Perempuan", "Universitas Padjadjaran", "intanrj@unpad.ac.id", "1281530933", "Pendidikan Dokter", "Fakultas Kedokteran", "asset/intan.jpg");
$temp->tambahData(6, "3562017384398711290", "Naisya Salsa Aulia", "Perempuan", "Universitas Padjadjaran", "naisyasa@unpad.ac.id", "1274830484", "Ilmu Hubungan Internasional", "Fakultas Ilmu Sosial dan Ilmu Politik", "asset/naisya.jpg");
$temp->tambahData(7, "3274673012638832897", "Sinta Rahayu", "Perempuan", "Insitut Teknologi Bandung", "sintar@itb.ac.id", "2039485667", "Teknik Elektro", "Sekolah Teknik Elektro dan Informatika", "asset/sinta.jpg");


// ==================================================== HEADER ============================================================//
echo "<h3><center> KEMENTERIAN PENDIDIKAN KEBUDAYAAN RISET DAN TEKNOLOGI </center></h3>";
echo "<h3><center>    PUSAT DATA DAN TEKNOLOGI INFORMASI (PUSDATIN)     </center></h3>";
echo "<h3><center>     PANGKALAN DATA PENDIDIKAN TINGGI (PDDikti)       </center></h3>";
echo "<h3><center> DIREKTORAT JENDERAL PENDIDIKAN TINGGI (Dirjen Dikti) </center></h3>";
echo "<p><center> Sekretariat Direktorat Jenderal Pendidikan Tinggi, Kementerian Pendidikan Kebudayaan Riset dan Teknologi , Gedung D, Jalan Jenderal Sudirman, Pintu 1 Senayan, Jakarta Pusat 10270 </center></p>";
echo "<p><center> Telp. 021-57946104, 021 741 8808. Email : pddikti@kemdikbud.go.id, pusdatin@kemdikbud.go.id </center></p>";
echo "<h3><center> --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- </center></h3>";

echo "<h4><center> DATA POKOK PENDIDIKAN </center></h4>";
echo "<h4><center> UNIVERSITAS IKATAN BATIN </center></h4>";
echo "<h4><center> TAHUN PEMBAHARUAN 2022/2023-Genap  </center></h4>";
echo "<p><center> Jln. Raya Majalaya-Cicalengka Kp. Rancakendal Desa Tangsimekar Kecamatan Paseh Kabupaten Bandung Provinsi Jawa Barat 40383. </center></p>";

echo "<p> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- </p>";

// MENAMPILKAN DATA //
echo "Berikut ini merupakan Informasi data Mahasiswa yang Anda Perlukan :";
$temp->tampil();


// ====================================================== FOOTER ========================================================= //
echo "<p> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- </p>"; 
echo "<h4><center> COPYRIGHT © 2023. IBNU ADENG KURNIA </center></h4>";
echo "<h4><center> All Rights Reserved </center></h4>";
echo "<p> -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- </p>";

?>