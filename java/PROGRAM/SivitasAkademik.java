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

// kelas  sisvitas mahasiswa //
class SivitasAkademik {
    //terdiri dari atribute asal univ dan email edu
    private String asal_universitas;
    private String email_edu;

    //kontruktor //
    SivitasAkademik() {
        this.asal_universitas = "";
        this.email_edu = "";
    }

    //set and get asal universitas //
    void setAsalUniversitas(String asal_universitas) {
        this.asal_universitas = asal_universitas;
    }

    String getAsalUniversitas() {
        return this.asal_universitas;
    }

    // set and get email edu //
    void setEmailEdu(String email_edu) {
        this.email_edu = email_edu;
    }

    String getEmailEdu() {
        return this.email_edu;
    }
}