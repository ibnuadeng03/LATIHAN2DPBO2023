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

using namespace std;


// ------------------------ // ^_^ Membuat kelas dengan nama Human ^_^ // ------------------------ //
class Human {
    // Kelas ini merupakan kelas orang tua. Mengapa?, karena semua objek di SivitasAkademika itu berisi objek manusia yang diantaranya 
    // Mahasiswa, Dosen, TenDik dsb.
	private:
	    // atribute class private //
	    string nik; 
		string nama; 
		string gender;
	
	public:
	    // ------------------------ // konstruktor // ------------------------ //
	    Human(string nik, string nama, string gender)
	    {
	        this->nik = nik;
	        this->nama = nama;
	        this->gender = gender;
	    }
	
	    // ------------------------ // SETTER AND GETTER // ------------------------ //
	    // setter untuk data Nomor Induk Kependudukan //
		void setNIK(string nik)
	    {
	        this->nik = nik;
	    }
		// getter untuk data Nomor Induk Kependudukan //
	    string getNIK()
	    {
	        return this->nik;
	    }
		
		// setter untuk data Nama  //
	    void setNama(string nama)
	    {
	        this->nama = nama;
	    }
		// getter untuk data Nama //
	    string getNama()
	    {
	        return this->nama;
	    }
		
		// setter untuk data Jenis Kelamin //
	    void setGender(string gender)
	    {
	        this->gender = gender;
	    }
		// getter untuk data Jenis Kelamin //
	    string getGender()
	    {
	        return this->gender;
	    }
		
		
		// ------------------------ // Menampilkan hasil data kelas Human // ------------------------ //
	    void tampil()
	    {
	        cout << "  1. Nomor Induk Kependudukan (NIK)     : " << nik << endl;
	        cout << "  2. Nama              		        : " << nama << endl;
	        cout << "  3. Jenis Kelamin     		        : " << gender << endl;
	    }

	~Human() {}  // Destruktor //
};
