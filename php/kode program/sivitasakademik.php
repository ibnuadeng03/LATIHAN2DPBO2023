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


include "human.php";

// ------------------------ // ^_^ Membuat kelas dengan nama SivitasAkademik yang terhubung (inheriten) dengan kelas Manusia ^_^ // ------------------------ //
class SivitasAkademik extends Manusia {
    /*
      Kelas SivitasAkademik menjadi anak kelas dari kelas Human, mengapa?, ya estuning yen
      sivitasakademik sareng human mah sacara objek oge jalmi, mangkana disebat sapertos kitu.
    */

    // atribute class private //
    private $asalUniv;      // asal universitas //      
    private $emailEdu;      // email pendidikan //

    // ---------------------- konTRuktOr ------------------- //
    function __construct($nik, $nama, $gender, $asalUniv, $emailEdu) {
        parent::__construct($nik, $nama, $gender); // constructor dari kelas orang tua (human)
        $this->asalUniv = $asalUniv;    
        $this->emailEdu = $emailEdu;
    }

    // --------------------- SETTER dan GETTER ------------------- //
    // getter kanggo asal universitas //
    public function getAsalUniv() {
        return $this->asalUniv;
    }
    // setter kanggo asal universitas //
    public function setAsalUniv($asalUniv) {
        $this->asalUniv = $asalUniv;
    }

    // getter kanggo email pendidikan //
    public function getEmailEdu() {
        return $this->emailEdu;
    }
    // setter kanggo email pendidikan //
    public function setEmailEdu($emailEdu) {
        $this->emailEdu = $emailEdu;
    }

    // ------------------------ // Destructor // ---------------------//
    function __destruct(){}
}
?>