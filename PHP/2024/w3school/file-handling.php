<?php
/*File handling
yaitu cara kita melakukan CRUD alias Create, Read, Update, Delete suatu file...:

Banyak salah satunya kita bisa menggunakan function readfile(nama_file);

contoh :
readfile("testfile/nama.txt");
*/

readfile("testfile/nama.txt");
echo "<br>\n";
/* 
Atau bisa juga dengan function fopen();

contoh :
fopen("testfile/nama.txt");

dikatakan fopen() lebih baik karena ia lebih banyak menyediakan opsi
contoh: 
> r = Open for reading only; place the file pointer at the beginning of the file. 
> w = Open for writing only; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it. 
> a = Open for writing only; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, fseek() has no effect, writes are always appended.
> x =  Creates a new file for write only. Returns FALSE and an error if file already exists
> r+= Open for reading and writing; place the file pointer at the beginning of the file.
> w+= Open for reading and writing; otherwise it has the same behavior as 'w'.
> a+= Open for reading and writing; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, fseek() only affects the reading position, writes are always appended.
> x+ =  Creates a new file for read/write. Returns FALSE and an error if file already exists

Dan lain lain...


*/
$filesaya1 = fopen("testfile/test.txt","r") or die("Unable to open file!...");
$filesaya2 = fopen("testfile/test2.txt","r+") or die("Unable to open file!...");
$filesaya3 = fopen("testfile/test3.txt","w") or die("Unable to open file!...");
$filesaya4 = fopen("testfile/test4.txt","w+") or die("Unable to open file!...");
$filesaya5 = fopen("testfile/test5.txt","a") or die("Unable to open file!...");
$filesaya6 = fopen("testfile/test6.txt","a+") or die("Unable to open file!...");
// fopen("testfile/test8.txt","x") or die("Unable to open file!...");

/*
Akan tetapi fopen() itu cuma untuk membuka aja filenya belum bisa dibaca
dan untuk membukanya bisa ditulis dengan fread();
contoh:

$myfile = fopen("testfile/test.txt","r") or die("Unable to open file!...");
echo fread($myfile, filesize("testfile/test.txt"));
fclose($myfile);

kemudian dengan ditutup fclose();
*/
$filesaya1 = fopen("testfile/test.txt","r") or die("Unable to open file!...");
echo fread($filesaya1, filesize("testfile/test.txt"));
fclose($filesaya1);

$filesaya2 = fopen("testfile/test2.txt","r+") or die("Unable to open file!...");
echo fread($filesaya1, filesize("testfile/test2.txt"));
fclose($filesaya2);

$filesaya3 = fopen("testfile/test3.txt","w") or die("Unable to open file!...");
echo fread($filesaya1, filesize("testfile/test3.txt"));
fclose($filesaya3);

$filesaya4 = fopen("testfile/test4.txt","w+") or die("Unable to open file!...");
echo fread($filesaya1, filesize("testfile/test4.txt"));
fclose($filesaya4);

$filesaya5 = fopen("testfile/test5.txt","a") or die("Unable to open file!...");
echo fread($filesaya1, filesize("testfile/test5.txt"));
fclose($filesaya5);

$filesaya6 = fopen("testfile/test6.txt","a+") or die("Unable to open file!...");
echo fread($filesaya1, filesize("testfile/test6.txt"));
fclose($filesaya6);

$filesaya7 = fopen("testfile/test7.txt","r") or die("Unable to open file!...");
echo fread($filesaya7, filesize("testfile/test7.txt"));
fclose($filesaya7);
?>