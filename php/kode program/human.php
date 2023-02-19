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

// ------------------------ // ^_^ Membuat kelas dengan nama Manusia ^_^ // ------------------------ //
class Manusia {
    
    /*
        Kelas manusia ini menjadi kelas orang tua, mengapa? Estuning ai nu namina Manusia/human mah sadaya objekna dina sivitas akademik teh 
        lebetna jalmi wungkul, contona aya mahasiswa, dosen, caraka, jeung sajabana.
    */
    
    // atribute class private //
    // didieu aya nik, nami jeung jenis kelamin //
    private $nik;
    private $nama;
    private $gender;

    // ------------------------ //konstruktor // ------------------------ //
    function __construct($nik, $nama, $gender) {
        $this->nik = $nik;
        $this->nama = $nama;
        $this->gender = $gender;
    }

    
    // ------------------------ // SETTER dan  GETTER // ------------------------ //
    // getter kanggo nomer induk kapandudukan //
    public function getNIK() {
        return $this->nik;
    }
    // setter kanggo nomor induk kapandudukan //
    public function setNIK($nik) {
        $this->nik = $nik;
    }


    // getter kanggo wasta/nami //
    public function getNama() {
        return $this->nama;
    }
    // setter kanggo wasta/nami //
    public function setNama($nama) {
        $this->nama = $nama;
    }


    // getter kanggo jenis kelamin //
    public function getGender() {
        return $this->gender;
    }
    // setter kanggo jenis kelamin //
    public function setGender($gender) {
        $this->gender = $gender;
    }

    // -------------------- // desTruktoR // ------------------- //
    function __destruct(){}
}

?>