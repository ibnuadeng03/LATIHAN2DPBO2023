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

# Membuat kelas dengan nama Human/Manusia #
class Human:
    # Atribut private #
    __Nik = ""                  # nomor induk kependudukan 
    __nama = ""                 # nama 
    __jenis_kelamin= ""         # jenis kelamin
    
    # Konstruktor #
    def __init__(self, Nik="", nama="", jenis_kelamin=""):
        self.__Nik = Nik
        self.__nama = nama
        self.__jenis_kelamin = jenis_kelamin

    ######################## SETTER DAN GETTER ###########################
    ##### Set untuk data NIK
    def setNik(self, Nik):
        self.__Nik = Nik

    ##### Get untuk data NIK
    def getNik(self):
        return self.__Nik

    ##### Set untuk data Nama
    def setNama(self, nama):
        self.__nama = nama

    ##### Get untuk data Nama
    def getNama(self):
        return self.__nama

    ##### Set untuk data Jenis Kelamin
    def setJenis_kelamin(self, jenis_kelamin):
        self.__jenis_kelamin = jenis_kelamin

    ##### Get untuk data Jenis Kelamin
    def getJenis_kelamin(self):
        return self.__jenis_kelamin