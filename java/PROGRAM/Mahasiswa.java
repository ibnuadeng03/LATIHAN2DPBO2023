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

// kelas mahasiswa yg terhubung ke sisvitas akademika //
class Mahasiswa extends SivitasAkademik {
    //atribute terdiri dari nim, nama, jns kelamin, fakultas dan prodi//
    private int nim;
    private String nama;
    private String jenis_kelamin;
    private String fakultas;
    private String prodi;


    // SETTER AND GETTER //
    Mahasiswa() {
        this.nim = 0;
        this.nama = "";
        this.jenis_kelamin = "";
        this.fakultas = "";
        this.prodi = "";
    }

    //set and get nim //
    void setNim(int nim) {
        this.nim = nim;
    }

    int getNim() {
        return this.nim;
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

    String getJenisKelami() {
        return this.jenis_kelamin;
    }

    //set and get fakultas //
    void setFakultas(String fakultas) {
        this.fakultas = fakultas;
    }

    String getfakultas() {
        return this.fakultas;
    }

    //set and get prodi //
    void setProdi(String prodi) {
        this.prodi = prodi;
    }

    String getprodi() {
        return this.prodi;
    }

}