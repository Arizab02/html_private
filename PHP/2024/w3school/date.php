<?php
// Date and time function
echo "Date and time function <br>";
/* cara membuatnya adalah dengan menggunakan date() function
sintaksnya :

date(format,timestamp);

format = Required. Specifies the format of the timestamp
timestamp = Optional. Specifies a timestamp. Default is the current date and time

==>GET DATE
here some characters that are commonly used for dates:
>  d - Represents the day of the month (01 to 31)
>  m - Represents a month (01 to 12)
>  Y - Represents a year (in four digits)
>  l (lowercase 'L') - Represents the day of the week

ex : date(d-m-y)

Other characters, like"/", ".", or "-" can also be inserted between the characters to add additional formatting.

ex:echo "today is". date("d/m/y"). "<br>";
ex:echo "today is". date("d-m-y"). "<br>";
ex:echo "today is". date("d.m.y"). "<br>";
ex:echo "today is". date("d_m_y"). "<br>";
*/

echo "Today is ". date("d/m/y")."\t <--- aslinya kaya gini date(\"D/m/y\") <br>"."\n";
echo "Today is ". date("d_M_y")."\t <--- aslinya kaya gini date(\"d_M_y\") <br>"."\n";
echo "Today is ". date("d.m.Y")."\t <--- aslinya kaya gini date(\"d.m.Y\") <br>"."\n";
echo "Today is ". date("D-M-Y")."\t <--- aslinya kaya gini date(\"D-M-Y\") <br>"."\n";
echo "<br> \n";
echo "Buat liat nama dari nama hari ini secara lengkap <br>";
echo "Today is ". date("l")."<br>"."\n";
echo "Today is ". date("l")."\t <--- aslinya kaya gini date(\"l\")<br>"."\n";
/*
==> GET TIME
Here are some characters that are commonly used for times:

>  H - 24-hour format of an hour (00 to 23)
>  h - 12-hour format of an hour with leading zeros (01 to 12)
>  i - Minutes with leading zeros (00 to 59)
>  s - Seconds with leading zeros (00 to 59)
>  a - Lowercase Ante meridiem and Post meridiem (am or pm)

EX:

echo "The time is ".date("H-i-s"). "<br>";
echo "The time is ".date("H:i:s"). "<br>";
echo "The time is ".date("H i s"). "<br>";
echo "The time is ".date("H|i|s"). "<br>";
*/
echo "<br> \n";
echo "Waktunya format 12 <br>\n";
echo "The time is ".date("h:i:s"). "\t aslinya kaya gini date(\"h:i:s\") <br>\n";
echo "The time is ".date("h i s a"). "\t aslinya kaya gini date(\"h i s a\") <br>\n";
echo "Waktunya format 24 <br>\n";
echo "The time is ".date("H-i-s"). "\t aslinya kaya gini date(\"H-i-s\") <br>\n";
echo "The time is ".date("H|i|s"). "\t aslinya kaya gini date(\"H|i|s\") <br>\n";

/*
==>TIMEZONE
to set timezone by code:

time_zone()
*/

// Untuk menyetel default timezone
echo "<br> \n";
echo "Timezone setted to NewYork <br>\n";
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:s a");
echo "<br> \n";
?>
&copy; 2010-<?php echo date("Y");?>