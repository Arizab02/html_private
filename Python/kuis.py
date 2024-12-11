import random


def matematika():
    a = random.randint(0,10)
    b = random.randint(0,10)
    c = int(input(f"Berapakah hasil dari {a} + {b} :"))
    nilai = 0

    if c != (a+b):
        print("Jawabn kamu salah")
    else:
        print("Jawaban kamu benar")
        nilai += 1
    
    print(f"Nilai kamu :{nilai}")

matematika()