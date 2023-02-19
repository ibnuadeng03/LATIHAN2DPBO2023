''' 
	Saya Ibnu Adeng Kurnia NIM 2101769 mengerjakan latihan ke-2
	dalam mata kuliah desain dan pemrograman berorientasi objek C2 2023
	untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. 
	Aamiin.
'''

'''  
    Design ini disusun dan/atau digunakan hanya untuk lingkungan sendiri.
	Tidak untuk menjadi konsumsi/kepentingan umum.
	Hanya untuk melengkapi tugas DPBO 2023.
'''

from Mahasiswa import Mahasiswa

############ Pendeklarasian ##############
mhs = Mahasiswa()
mhs2 = Mahasiswa()

#### Data Hardcode untuk input data 1 ###
mhs.setNik("3183749492834957442")
mhs.setNama("Arya Saloka Yudha Prawira")
mhs.setJenis_kelamin("Pria")
mhs.setUniversitas("Universtas Negeri Malang")
mhs.setEmail_edu("aryasaloka@gmail.com")
mhs.setNim("100533402625")
mhs.setFakultas("Pendidikan Teknik Informatika")
mhs.setProdi("Fakultas Teknik")

#### Data Hardcode untuk input data 2 ###
mhs2.setNik("3482638494746383934")
mhs2.setNama("Amanda Manopo")
mhs2.setJenis_kelamin("Wanita")
mhs2.setUniversitas("Institut Pertanian Bogor")
mhs2.setEmail_edu("andin@gmail.com")
mhs2.setNim("14485920283923")
mhs2.setFakultas("Ilmu Hukum")
mhs2.setProdi("Fakultas Hukum")


# Ouput Data
#### ================================================= HEADER ========================================= #######
print("\n                    KEMENTERIAN PENDIDIKAN KEBUDAYAAN RISET DAN TEKNOLOGI")
print("                          PUSAT DATA DAN TEKNOLOGI INFORMASI (PUSDATIN)")
print("                           PANGKALAN DATA PENDIDIKAN TINGGI (PDDIKTI)")
print("                              DIREKTORAT JENDERAL PENDIDIKAN TINGI")
print("             Sekretariat Direktorat Jenderal Pendidikan Tinggi, Kementerian Pendidikan")
print("                Kebudayaan Riset dan Teknologi , Gedung D, Jalan Jenderal Sudirman,")
print("                               Pintu 1 Senayan, Jakarta Pusat 10270")
print("     Telp. 021-57946104, 021 741 8808. Email : pddikti@kemdikbud.go.id, pusdatin@kemdikbud.go.id")
print(" =========================================================================================================")

print("               Selamat Datang Bapak/Ibu diportal Pangkalan Data Pendidikan Tinggi (PDDikti)")
print("                  PUSDATIN KEMENDIKBUDRISTEKDIKTI Direktorat Jenderal Pendidikan Tinggi")

print(" ---------------------------------------------------------------------------------------------------------")
print("                                        DATA POKOK PENDIDIKAN")
print("                                       UNIVERSITAS IKATAN BATIN")
print("                                   TAHUN PEMBAHARUAN 2022/2023-Genap")
print(" ---------------------------------------------------------------------------------------------------------\n")

#### output data pertama #########
print(" Berikut ini merupakan data yang Anda minta ;\n")
print(" 1. Nomor Induk Kependudukan (NIK) : " + mhs.getNik())
print(" 2. Nama                           : " + mhs.getNama())
print(" 3. Jenis Kelamin                  : " + mhs.getJenis_kelamin())
print(" 4. Universitas                    : " + mhs.getUniversitas())
print(" 5. Alamat Email                   : " + mhs.getEmail_edu())
print(" 6. Nomor Induk Mahasiswa (NIM)    : " + mhs.getNim())
print(" 7. Fakultas                       : " + mhs.getFakultas())
print(" 8. Program Studi                  : " + mhs.getProdi())

print("\n ... \n")   ### asumsinya ini adalah data yang banyak, sehingga diberi tanda seperti ini ####

#### output data kedua #####
print(" 1. Nomor Induk Kependudukan (NIK) : " + mhs2.getNik())
print(" 2. Nama                           : " + mhs2.getNama())
print(" 3. Jenis Kelamin                  : " + mhs2.getJenis_kelamin())
print(" 4. Universitas                    : " + mhs2.getUniversitas())
print(" 5. Alamat Email                   : " + mhs2.getEmail_edu())
print(" 6. Nomor Induk Mahasiswa (NIM)    : " + mhs2.getNim())
print(" 7. Fakultas                       : " + mhs2.getFakultas())
print(" 8. Program Studi                  : " + mhs2.getProdi())
print(" ---------------------------------------------------------------------------------------------------------\n")

############################ ======================== FOOTER ========================= ########################################################S
print("                                   Copyrigt © 2023. IBNU ADENG KURNIA")
print("                                           All Rights Reserved")