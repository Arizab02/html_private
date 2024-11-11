import random

def Kuis():
    print("Apa nama ibukota Indonesia")
    jawaban = input("Jawaban :").title()

    if jawaban != "Jakarta" :
        print("Jawaban kamu salah")
    else:
        print("Jawaban kamu benar")

def matematika():
    angka1 = random.randint(1,11)
Kuis()