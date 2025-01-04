//  ini adalah single comment
/* 
ini adalah multi comment
segala sesuatu yang ada disini tidak ada yang dijalakan
*/

/* cara membuat variable di java script ada 4

1. var
2. let
3. const
4. automatic
*/

// automatic
x = 2;
y = 3 ;
z = x+y;

// var ( hanya support untuk peramban lama)
var a = 2;
var b = 3; 
var c = a - b;

// let
let d = 2;
let e = 3;
let f = d * e;

// const
const phi = 3.14; // const tidak bisa diinisialisasi ulang

// kita bisa saja membuat variable kosong yang isinya tentu saja undefined
let nama; // undefined.
var namaSiswa;

// sekali statmenet banyak variabel
let alamat, telepon, umur;

//tanda khusus yang sah untuk variable
// $
let $ = "ini adalah variabel dolar";

//_
let _ = "ini adalah nderscore";

//operator
// assigment
let g = 2; // "=" adalah operator assigment
let h = 3;

let i = g + h; // "+" adalah operator penjumlahan
console.log(i);// 5
i = g - h; // "-" adalah operator pengurangan
console.log(i); // -1
i = g * h; // "*" adalah operator perkalian
console.log(i);// 6
i = g / h; // "/" adalah operator pembagian
console.log(i);// 0.6666

/**
 *> untuk lebih jelasnya :
 1. Aritmatika
    >  +  for Addition
    >  -  for Subtraction
    >  *  for Multiplication
    >  ** for Exponentiation (ES2016)
    >  /  for Division
    >  %  for Modulus (Division Remainder)
    >  ++ for Increment
    >  -- for Decrement

    # Penjelasan tambahan untuk  operasi matematika terdapat semacam hak yang didahulukan 
    yang sama seperti operasi matematika yaitu :
    1. () || Grouping Expression || (x+y)*8
    2. .  || Member of           || function.member()
    2. [] || Member of           || function[Member]
    2. ?. || Optional            || changing x ?. y 
    2. () || Function call       || funciotn(call)
    
2.Assighnment operator
    = 	x = y 	x = y
    += 	x += y 	x = x + y
    -= 	x -= y 	x = x - y
    *= 	x *= y 	x = x * y
    /= 	x /= y 	x = x / y
    %= 	x %= y 	x = x % y
    **= 	x **= y 	x = x ** y

3. Comparation operator
    >  == 	for Equality
    >  != 	for Inequality
    >  === 	for Strict Equality
    >  !== 	for Strict Inequality
    >  > 	for Greater Than
    >  < 	for Less Than
    >  >= 	for Greater Than or Equal To
    >  <= 	for Less Than or Equal To
    >  in 	for Property Existence
    >  instanceof 	for Object Instance

4. Logical operator
    >  && 	for AND
    >  || 	for OR
    >  ! 	for NOT

5. String Addition (concantenete);
    >  + 	for Concatenation
    but also can with +=;

6. type operation
    > typeof 	Returns the type of a variable
    > instanceof 	Returns true if an object is an instance of an object type
 */


