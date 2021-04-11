
<?php
require '../vendor/autoload.php';
use HelloWorld\SayHello;

$ehim = new SayHello();
echo $ehim->world();
