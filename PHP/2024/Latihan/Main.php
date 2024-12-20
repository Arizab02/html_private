<?php
namespace Latihan\Main;
// require 'Hewan.php';
// require 'latihan1.php';

use latihan1\kelas_anak;
use Hewan\kucing as Kucing;
$kucing = new Kucing;
$kucing->bersuara();

$a= new kelas_anak;

echo "Nama namespace ini adalah :".__NAMESPACE__."\n";
?>