class Person:
    def __init__(self,name,age=int):
        """
        Inisialisasi objek Person
        
        Properties:
            name (str): Nama dari Person
            age (int): Usia dari Person
        """
        self.name = name
        self.age = age

    def perkenalan(self):
        # self.name = nama
        # self.age = usia
        print(f"Halo nama saya {self.name} dan saya berusia {self.age}")


orang = Person("Ahmad",18)
orang.perkenalan()

class Car:
    def startEngine():
        print("Engine started")

mobil = Car
mobil.startEngine()

class Rectangle:
    def __init__(self,Width,Height):
        self.width = Width
        self.height = Height
    
    def calculateArea(self)->float:
        return self.width * self.height

    def calculateKel(self)->float:
        return (self.width+self.heihgt)*2

kotak = Rectangle(20,30)
kotak.calculateArea()

class Employee:
    def __init__(self,__gaji): #ini adalah construstor di python
        self.__gaji = __gaji #ini adalah atribute private

    def setGaji(self,__gaji):
        self.__gaji  = __gaji
    
    def getGaji(self):
        return self.__gaji

karyawan = Employee(None)
karyawan.setGaji(20000000000)
print(f"gaji karyaan anda adalah {karyawan.getGaji()} ribu")
