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

// kelas mahasiswa yg terhubung ke sisvitas mahasiswa //
class Human extends Mahasiswa {
    // atribut terdiri dari nik, nama, jns kelamin //
    private int nik;
    private String nama;
    private String jenis_kelamin;

    // konstruktor//
    Human() {
        this.nik= 0;
        this.nama = "";
        this.jenis_kelamin = "";
    }

    //set and get nik //
    void setNik(int nik) {
        this.nik = nik;
    }

    int getNik() {
        return this.nik;
    }

    //set and get nama //
    void setNama(String nama) {
        this.nama = nama;
    }

    String getNama() {
        return this.nama;
    }

    //set and get jns kelamin //
    void setJenisKelamin(String jenis_kelamin) {
        this.jenis_kelamin = jenis_kelamin;
    }

    String getJenisKelamin() {
        return this.jenis_kelamin;
    }

}