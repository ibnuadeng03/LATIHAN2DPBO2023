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
from Human import Human

# Membuat kelas dengan nama SivitasAkademik #
## class sivitasakademik merupakan inheriten dengan class human, karena sivitasakademik objeknya ialah manusia.
class SivitasAkademik(Human):
    # Atribut kelas private 
    __universitas = ""          ## universitas ##
    __email_edu = ""            ## email pendidikan ##
    
    # Konstruktor #
    def __init__(self, Nik="", nama="", jenis_kelamin="", universitas="", email_edu=""):
        super().__init__(Nik, nama, jenis_kelamin)
        self.__universitas = universitas
        self.__email_edu = email_edu

    ######################## SETTER DAN GETTER ###########################
    ### Set untuk data Universitas
    def setUniversitas(self, universitas):
        self.__universitas = universitas

    ### Get untuk Universitas
    def getUniversitas(self):
        return self.__universitas

    ### Set untuk data email pendidikan 
    def setEmail_edu(self, email_edu):
        self.__email_edu = email_edu

    ### get untuk data email pendidikan
    def getEmail_edu(self):
        return self.__email_edu