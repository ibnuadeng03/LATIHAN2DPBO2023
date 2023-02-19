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

#include <bits/stdc++.h>
#include "Mahasiswa.cpp"

using namespace std;

int main()
{
    // ------------------------ // pendeklarasian // ------------------------ //
	vector<Mahasiswa> dataMhs; 
    
	
	// ------------------------ // Input Data // ------------------------ //
	// Data dilakukan secara di HardCode //
	//Untuk data pertama //
    Mahasiswa mhs1("7839390721", "Amanda Manopo", "Wanita", "ITB", "andin@itb.ac.id", "1902716", "FTMD", "Teknik Dirgantara");
    dataMhs.push_back(mhs1);
    
    // untuk data kedua //
	Mahasiswa mhs2("2836309271", "Arya Saloka", "Pria", "ITB", "masAl@itb.ac.id", "1982378", "STEI", "Teknik Elektro");
    dataMhs.push_back(mhs2);
    
    // untuk data ketiga
	Mahasiswa mhs3("1836846300", "King Nassar", "Pria", "UPI", "kingNassar@upi.edu", "1509836", "FPSD", "Seni Musik");
    dataMhs.push_back(mhs3);
    
    //untuk data keempat
	Mahasiswa mhs4("1576982536", "Hetty Koes Endang", "Wanita", "ISBI", "bundaHetty@gmail.com", "1568921", "FSM", "Seni Karawitan");
    dataMhs.push_back(mhs4);
    
    //untuk data kelima
	Mahasiswa mhs5("2893067319", "Bungsu Bandung", "Wanita", "ISBI", "mamahBungsuBandung@gmail.com", "1203985", "FSM", "Seni Musik");
    dataMhs.push_back(mhs5);
	
	//untuk data keenam
	Mahasiswa mhs6("8935762002", "Haji Darso", "Pria", "UPI", "papihDarso@upi.edu", "1102781", "FPSD", "Seni Musik");
    dataMhs.push_back(mhs6);
	
    // ------------------------------------------ // Header Program // --------------------------------------------------------------- //
    cout << "\n                         KEMENTERIAN PENDIDIKAN KEBUDAYAAN RISET DAN TEKNOLOGI" << endl;
    cout << "                              PUSAT DATA DAN TEKNOLOGI INFORMASI (PUSDATIN)" << endl;
    cout << "                                PANGKALAN DATA PENDIDIKAN TINGGI (PDDIKTI)" << endl;
    cout << "                                   DIREKTORAT JENDERAL PENDIDIKAN TINGGI" << endl;
    cout << "                  Sekretariat Direktorat Jenderal Pendidikan Tinggi, Kementerian Pendidikan" << endl;
    cout << "                      Kebudayaan Riset dan Teknologi , Gedung D, Jalan Jenderal Sudirman," << endl;
    cout << "                                   Pintu 1 Senayan, Jakarta Pusat 10270" << endl;
    cout << "       Telp. 021-57946104, 021 741 8808. Email : pddikti@kemdikbud.go.id, pusdatin@kemdikbud.go.id" << endl;
    cout << "=========================================================================================================" << endl;
    
    cout << "              Selamat Datang Bapak/Ibu diportal Pangkalan Data Pendidikan Tinggi (PDDikti)  "<< endl;
    cout << "                  PUSDATIN KEMENDIKBUDRISTEKDIKTI Direktorat Jenderal Pendidikan Tinggi"<< endl;
    
    cout << "---------------------------------------------------------------------------------------------------------"<< endl;
    cout << "                                              DATA POKOK PENDIDIKAN"<< endl;
    cout << "                                            UNIVERSITAS IKATAN BATIN "<< endl;
    cout << "                                         TAHUN PEMBAHARUAN 2022/2023-Genap" << endl;
    cout << "---------------------------------------------------------------------------------------------------------\n"<< endl;
	

	// ------------------------ //  Menampilkan data Mahasiswa // ------------------------ //
	cout << "Silakan Bapak/Ibu data yang Anda perlukan telah tersedia.\n";
    cout << "+=====================================================================+\n";
	cout << "|                        Informasi Data Mahasiswa                     |\n";
	cout << "+=====================================================================+\n";
    for (int i = 0; i < dataMhs.size(); i++)
    {
        cout << "\n+ DETAIL Mahasiswa Ke- " << i + 1 << endl;
        dataMhs[i].tampil();
    }
	
	// ------------------------ // footer // ------------------------ //
		cout << endl << "              Copyrigt 2023. IBNU ADENG KURNIA";
		cout << endl << "                    All Rights Reserved\n";
    return 0;
}
