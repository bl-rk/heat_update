<?php 

require 'vendor/autoload.php';



/***************************
  Sample using a PHP array
****************************/

$fields = array(
    'name'    => 'My Leo',
    'address' => 'My address',
    'city'    => 'My city',
    'phone'   => 'My phone number'
);

$pdf = new FPDM('template.pdf');
$pdf->Load($fields, true); // second parameter: false if field values are in ISO-8859-1, true if UTF-8
$pdf->Merge();
$pdf->Output();
?>