<?php 


$string = $_POST["string"];
$quote = $_POST["quote"];


$hitung = substr_count($string, $quote);
echo 'Jumlah Kata "' . $quote . '" : ' . $hitung;