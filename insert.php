<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070221', 'IHVvqf58', 'it63070221_natcha', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$a = $_POST['A'];
$b = $_POST['B'];
$c = $a + $b;

?>
