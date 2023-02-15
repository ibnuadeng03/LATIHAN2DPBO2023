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


import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        int n = 0;
        Scanner sc = new Scanner(System.in);
        // -------------------------------------------- HEADER -------------------------------------------------------------------------//
            System.out.println("\n                      KEMENTERIAN PENDIDIKAN KEBUDAYAAN RISET DAN TEKNOLOGI");
            System.out.println("                            PUSAT DATA DAN TEKNOLOGI INFORMASI (PUSDATIN)");
            System.out.println("                              PANGKALAN DATA PENDIDIKAN TINGGI (PDDIKTI)");
            System.out.println("                                DIREKTORAT JENDERAL PENDIDIKAN TINGI");
            System.out.println("                 Sekretariat Direktorat Jenderal Pendidikan Tinggi, Kementerian Pendidikan");
            System.out.println("                    Kebudayaan Riset dan Teknologi , Gedung D, Jalan Jenderal Sudirman,");
            System.out.println("                              Pintu 1 Senayan, Jakarta Pusat 10270");
            System.out.println("     Telp. 021-57946104, 021 741 8808. Email : pddikti@kemdikbud.go.id, pusdatin@kemdikbud.go.id");
            System.out.println(" =========================================================================================================");
            
            System.out.println("              Selamat Datang Bapak/Ibu diportal Pangkalan Data Pendidikan Tinggi (PDDikti)");
            System.out.println("                 PUSDATIN KEMENDIKBUDRISTEKDIKTI Direktorat Jenderal Pendidikan Tinggi");

            System.out.println(" ---------------------------------------------------------------------------------------------------------");
            System.out.println("                                      DATA POKOK PENDIDIKAN");
            System.out.println("                                    UNIVERSITAS IKATAN BATIN");
            System.out.println("                                 TAHUN PEMBAHARUAN 2022/2023-Genap");
            System.out.println(" ---------------------------------------------------------------------------------------------------------\n");
        
        // meminta inputan yg akan dicreate //
        System.out.print("\nMasukkan jumlah Yang akan di-input : ");
        try {
            n = sc.nextInt();
        } catch (Exception e) {
        }

        Human[] mhs;
        mhs = new Human[n];
        for (int i = 0; i < n; i++) {
            
            // meminta masukan ke user
            System.out.println(" \n========== INPUT Yang Ke- " + (i+1) + " +++");
            mhs[i] = new Human();
            String email_edu = "", asal_universitas = "", nim = "", nama = "", jenis_kelamin = "";
            System.out.print("Email Edu                   : ");     // email //
            try {
                email_edu = sc.next();
            } catch (Exception e) {
            }
            System.out.print("Asal Universitas            : ");     // universitas //
            try {
                asal_universitas = sc.next();
            } catch (Exception e) {
            }
            System.out.print("Nomor Induk Mahasiswa (NIM) : ");     //nim//
            try {
                nim = sc.next();
            } catch (Exception e) {
            }
            System.out.print("Nama                        : ");     //nama ///
            try {
                nama = sc.next();
            } catch (Exception e) {
            }
            System.out.print("Jenis Kelamin (L/P)            : ");      //jns kelamin
            try {
                jenis_kelamin = sc.next();
            } catch (Exception e) {
            }
            
            mhs[i].setEmailEdu(email_edu);
            mhs[i].setAsalUniversitas(asal_universitas);
            mhs[i].setNama(nama);
            mhs[i].setJenisKelamin(jenis_kelamin);
        }

        // ------------------------------- menampilkan hasil -------------------------------//
        for (int i = 0; i < mhs.length; i++) {
            System.out.println("\n\n======= Detail Informasi Anda yang Ke-" + (i+1) + " ========");
            System.out.println("Email Edu        : " + mhs[i].getEmailEdu());                   //tampil email edu //
            System.out.println("Nama             : " + mhs[i].getNama());                       //tampil nama//
            System.out.println("Jenis Kelamin    : " + mhs[i].getJenisKelamin());               //tampil jns kelamin//
            System.out.println("Asal Universitas : " + mhs[i].getAsalUniversitas());            //tampil asal univ//


            // ----------------------------------------------- FOOTER --------------------------------------- //
        System.out.println("\n      Copyright 2023. IBNU ADENG KURNIA");
        System.out.println("\n             All Rights Reserved");
        }
    }

}
