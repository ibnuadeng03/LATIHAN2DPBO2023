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
from SivitasAkademik import SivitasAkademik
# Membuat kelas dengan nama Mahasiswa #
'''
        kelas mahasiswa teh nyaeta anak kelas dari sivitas akademika, margi sivitas akademika teh 
        diantawisna aya mahasiswa, dosen, caraka, jeung sajabana.
'''
class Mahasiswa(SivitasAkademik):
    # Atribut private
    __Nim = ""              #nim
    __fakultas = ""         #fakultas
    __prodi = ""            #program studi
    
    # ------------ // construktor // ------------ //
    def __init__(self, Nik="", nama="", jenis_kelamin="", universitas="", email_edu="", Nim="", fakultas="", prodi=""):
        super().__init__(Nik, nama, jenis_kelamin, universitas, email_edu)
        self.__Nim = Nim
        self.__fakultas = fakultas
        self.__prodi = prodi

    ################ SETTER AND GETTER ##################
    ##### Set untuk data nomor induk mahasiswa
    def setNim(self, Nim):
        self.__Nim = Nim

    ##### Get untuk data Nomor Induk Mahasiswa
    def getNim(self):
        return self.__Nim


    ##### Set untuk data Fakultas
    def setFakultas(self, fakultas):
        self.__fakultas = fakultas

    ##### Get untuk data Fakultas
    def getFakultas(self):
        return self.__fakultas

    ##### Set untuk data Program Studi
    def setProdi(self, prodi):
        self.__prodi = prodi

    ##### Get untuk data Program Studi
    def getProdi(self):
        return self.__prodi