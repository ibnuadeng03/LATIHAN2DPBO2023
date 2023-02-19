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
#include <iostream>
#include <bits/stdc++.h>
#include "SivitasAkademik.cpp"

using namespace std;

// ------------------------ // ^_^ Membuat kelas dengan nama Mahasiswa yang terhubung dengan SivitasAkademika  ^_^ // ------------------------ //
class Mahasiswa : public SivitasAkademik { 
	// kelas Mahasiswa itu menjadi kelas anak dari Sivitas Akademika, mengapa? ya karena tentu saaja bahwa sivitas akademika itu
	// umumnya berkaitan dengan mahasiswa, dosen, TenDik, dll-nya. Sebetulnya bisa juga sih ddengan kelas Human, akan tetapi lebih ufdol-nya/ 
	// lebih berkorelasi itu dengan kelas sivitas akademika.

	private:
	    // atribute class private //
	    string nim;
		string fakultas; 
		string prodi;
	
	public:
	    // ------------------------ // konstruktor // ------------------------ //
	    Mahasiswa(string nik, string nama, string gender, string asalUniv, string emailEdu, string nim, string fakultas, string prodi)
	    : SivitasAkademik(nik, nama, gender, asalUniv, emailEdu) {
	        this->nim = nim;
	        this->fakultas = fakultas;
	        this->prodi = prodi;
	    }
	
	    
		// ------------------------ // SETTER dan  GETTER // ------------------------ //
		// setter untuk data Nomor Induk Mahasiswa  //
	    void setNIM(string nim){
	        this->nim = nim;
	    }
		// getter untuk data Nomor Induk Mahasiswa  //
	    string getNIM(){ 
	        return this->nim;
	    }
		
		
		// setter untuk data Fakultas //
	    void setFakultas(string fakultas){ 
	        this->fakultas = fakultas;
	    }
		// getter untuk data Fakultas  //
	    string getFakultas(){ 
	        return this->fakultas;
	    }
	    
	    
		// setter untuk data program studi  //
	    void setProdi(string prodi){ 
	        this->prodi = prodi;
	    }
		// getter untuk data program studi  //
	    string getProdi(){ 
	        return this->prodi;
	    }
		
		
		// ------------------------ // Menampilkan hasil data kelas mahasiswa dan anaknya // ------------------------ //
	    void tampil()
	    {
	        SivitasAkademik::tampil(); 
	        cout << "  6. Nomor Induk Mahasiswa (NIM)        : " << nim << endl;
	        cout << "  7. Fakultas			        : " << fakultas << endl;
	        cout << "  8. Program Studi		        : " << prodi << endl;
	        cout << "======================================================================\n";
	    }
    ~Mahasiswa() {}		// ------------------------ // destruktor // ------------------------ //
};
