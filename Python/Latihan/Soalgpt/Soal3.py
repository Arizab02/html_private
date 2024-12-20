def tambah(a,b):
    return a + b

def halo(nama):
    """Print a greeting message with the given name.

    Parameters
    ----------
    nama : str
        The name to be greeted.
    """
    return "Halo "+ nama

def faktorial(n):
    if n == 1 or n == 0:
        return 1
    else: return n * faktorial(n-1)

def isBigger(a,b)->int:
    if a == b:
        return "Angka yang dimasukkan sama"
    else: 
        if a > b :
            return a
        else : return b

def bagi(a,b):
    if b == 0:
        return "Error can't divide by zero "
    else :
        return a/b

print("Ini adalah hasil dari tambah(2,3)\t",tambah(2,3))
print("Ini adalah hasil dari tambah(32,524)\t",tambah(32,524))
print("Ini adalah hasil dari halo(\"Maria\")\t",halo("Maria"))
print("Ini adalah hasil dari faktorial(9)\t",faktorial(9))
print("Ini adalah hasil dari isBigger(34,5)\t",isBigger(34,5))
print("Ini adalah hasil dari isBigger(75,100)\t",isBigger(75,100))
print("Ini adalah hasil dari isBigger(65,65)\t",isBigger(65,65))
print("Ini adalah hasil dari bagi(2,9)\t\t",bagi(2,9))
print("Ini adalah hasil dari bagi(9,0)\t\t",bagi(9,0))
print("Ini adalah hasil dari bagi(19,3)\t",bagi(19,3))
print("Ini adalah hasil dari bagi(0,76)\t",bagi(0,76))