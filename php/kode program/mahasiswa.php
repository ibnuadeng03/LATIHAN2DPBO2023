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

include "sivitasakademik.php";

// ------------------------ // ^_^ Membuat kelas dengan nama Manusia yang terhubung (inheriten) dengan kelas sivitasakademik ^_^ // ------------------------ //
class Mahasiswa extends SivitasAkademik {
    /*
        kelas mahasiswa teh nyaeta anak kelas dari sivitas akademika, margi sivitas akademika teh 
        diantawisna aya mahasiswa, dosen, caraka, jeung sajabana.
    */

    // atribute class private //
    private $nim;           // nim//
    private $prodi;         // program studi //
    private $fakultas;      // fakultas //
    private $foto;          // pas foto//

    // ------------ // construktor // ------------ //
    function __construct($nik, $nama, $gender, $asalUni, $emailEdu, $nim, $prodi, $fakultas, $foto) {
        parent::__construct($nik, $nama, $gender, $asalUni, $emailEdu);  // constructor dari kelas orang tua //
        $this->nim = $nim;
        $this->prodi = $prodi;
        $this->fakultas = $fakultas;
        $this->foto = $foto;
    }

    // ---------------- // SETTER dan  GETTER // --------------- //
    // getter kanggo nomer induk mahasiswa //
    public function getNIM() {
        return $this->nim;
    }
    // setter kanggo nomer induk mahasiswa //
    public function setNIM($nim) {
        $this->nim = $nim;
    }

    // getter kanggo program studi //
    public function getProdi() {
        return $this->prodi;
    }
    // setter kanggo program studi //
    public function setProdi($prodi) {
        $this->prodi = $prodi;
    }

    // getter kanggo fakultas //
    public function getFakultas() {
        return $this->fakultas;
    }
    // setter kanggo fakultas //
    public function setFakultas($fakultas) {
        $this->fakultas = $fakultas;
    }

    // getter kanggo pas poto //
    public function getFoto() {
        return $this->foto;
    }
    // setter kanggo pas poto //
    public function setFoto($foto) {
        $this->foto = $foto;
    }

    
    //---------------- destRuktoR ------------ //
    function __destruct(){}
}

?>