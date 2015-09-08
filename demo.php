<?php

require 'class.Address.inc';

echo "<h2>Instanciating Address</h2>";
$address = new Address;

echo "<h2>Empty Address</h2>";
echo "<tt><pre>" . var_export($address, TRUE) . "</tt></pre>";


?>