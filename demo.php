<?php

require 'class.Address.inc';

echo "<h2>Instanciating Address</h2>";
$address = new Address;

echo "<h2>Empty Address</h2>";
echo "<tt><pre>" . var_export($address, TRUE) . "</tt></pre>";

echo "<h2>Setting properties</h2>";
$address->streetAddress1 = "Rua Tal, 1070";
$address->cityName = "Sao Paulo";
$address->subdivisionName = "SP";
$address->postalCode = "12345-123";
$address->country = "Brazil";
echo "<tt><pre>" . var_export($address, TRUE) . "</tt></pre>";


echo "<h2>Displaying Address...</h2>";
echo $address->display();

?>