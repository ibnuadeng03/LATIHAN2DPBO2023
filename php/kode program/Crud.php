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

include("mahasiswa.php");

// ------------------------ // ^_^ Membuat kelas dengan nama CRUD ^_^ // ------------------------ //
class Crud { 
    /* Kelas ini berfungsi untuk CRUD, Yakni :
        C = create 
        R = read 
        U = Update
        D = Delete 
       Terhadap data yang tersaji.
    */

    // atribute class private //
    private $dataMhs = array();

    // KONSTRUKTOR //
    public function __construct($data = array()){
        $this->dataMhs = $data;
    }

    // Metode yang berguna untuk menambahkan data yang baru //
    public function tambahData($idx  = "", 
                               $nik  = "", 
                               $nama = "", 
                               $gender = "", 
                               $asalUni = "", 
                               $emailEdu = "", 
                               $nim = "", 
                               $prodi = "", 
                               $fakultas = "", 
                               $foto=""){
        $this->dataMhs[$idx] = new Mahasiswa($nik, $nama, $gender, $asalUni, $emailEdu, $nim, $prodi, $fakultas, $foto); 
    }

    // ------------------------ // Menampilkan data mahasiswa dalam bentuk tabel // ------------------------ //
    public function tampil(){
        echo "<table border='1'>";
        echo "<tr>
            <th>Nomor Induk Kependudukan (NIK)</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Asal Universitas</th>
            <th>Alamat Email</th>
            <th>Nomor Induk Mahasiswa (NIM)</th>
            <th>Program Studi</th>
            <th>Fakultas</th>
            <th>Pas Foto </th>
            </tr>";
        
            // ------------------------ // Getter // ------------------------ //
        for($i = 0; $i < sizeof($this->dataMhs); $i++){
            echo "<tr><td>";
            echo $this->dataMhs[$i]->getNIK();              // untuk nik //
            echo "</td><td>";
            echo $this->dataMhs[$i]->getNama();             // untuk nama 
            echo "</td><td>";
            echo $this->dataMhs[$i]->getGender();           // untuk jenis kelamin //
            echo "</td><td>";
            echo $this->dataMhs[$i]->getAsalUniv();         // untuk asal universitas //
            echo "</td><td>";
            echo $this->dataMhs[$i]->getEmailEdu();         // untuk email pendidikan //
            echo "</td><td>";
            echo $this->dataMhs[$i]->getNIM();              // untuk nim //
            echo "</td><td>";
            echo $this->dataMhs[$i]->getProdi();            // untuk program studi //
            echo "</td><td>";
            echo $this->dataMhs[$i]->getFakultas();         // untuk fakultas //
            echo "</td><td>";
            echo "<img src='" . $this->dataMhs[$i]->getFoto(). "'style='width:100px'>";     // untuk pas foto //
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    
    // ------------------------ // desTruktoR // ------------------------ //
    function __destruct(){}
}

?>