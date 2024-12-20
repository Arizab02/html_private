class Person:
    def __init__(self,name,age):
        self.name = name
        self.age = age
    def __del__(self):
        print(f"Halo nama saya {self.name} dan saya berusia {self.age}")

class book:
    def __init__(self,title,author):
        self.title = title
        self.author = author


    def __del__(self):
        print(f"Buku ini berjudul {self.name}, yang ditulis oleh {self.author}")

class DatabaseConnection:
    def __del__():
        print("Koneksi database ditutup")

class Perkenalan:
    def __init__(self,nama):
        self.nama = nama
        print(f"nama saya adalah {self.nama}")
    
    def __del__(self):
        print(f"Ya sekain aja dulu byee...")

orang = Person("Ahmad",28)
buku = book("Python","Ahmad")
konek = DatabaseConnection()
kenalan =Perkenalan("Ahmad")