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
#include "Human.cpp"

using namespace std;

// ------------------------ // ^_^ Membuat kelas dengan nama SivitasAkademik yang terhubung dengan Human  ^_^ // ------------------------ //
class SivitasAkademik : public Human{
    // Pada intinya bahwa class SivitasAkademik merupakan anak dari kelas Human. Mengapa? Ya tentu karena dilihat 
    // dari sisi objek, bahwa class SivitasAkademik dan class Human merupakan sama-sama manusia
    // yang menjalankan tugasnya masing-masing sesuai dengan juknis/juklak/tupoksi-Nya.
	
	private:
	    // atribute class private //
	    string asalUniv;
		string emailEdu;
	
	public:
	    // ------------------------ // konstruktor // ------------------------ //
	    SivitasAkademik(string nik, string nama, string gender, string asalUniv, string emailEdu)
	    : Human(nik, nama, gender) {
	        this->asalUniv = asalUniv;
	        this->emailEdu = emailEdu;
	    }
	
	    // ------------------------ // SETTER dan  GETTER // ------------------------ //
		// setter untuk data asal universitas //
	    void setAsalUniv(string asalUniv){ 
	        this->asalUniv = asalUniv;
	    }
		// getter untuk data asal universitas  //
	    string getAsalUniv(){ 
	        return this->asalUniv;
	    }
		
		// setter untuk data Email Edu  //
	    void setEmailEdu(string emailEdu){ 
	        this->emailEdu = emailEdu;
	    }
		// getter untuk data Email Edu  //
	    string getEmailEdu(){
	        return this->emailEdu;
	    }
		
		// ------------------------ // untuk menampikan informasi data dari kelas SivitasAkademik dan anak kelasnya // ------------------------ //
	    void tampil()
	    {
	        Human::tampil(); 
	        cout << "  4. Asal Universitas	                : " << asalUniv << endl;
	        cout << "  5. Email			        : " << emailEdu << endl;
	    }

    // ------------------------ // destruktor // ------------------------ //
    ~SivitasAkademik() {}
};
