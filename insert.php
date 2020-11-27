<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070221', 'IHVvqf58', 'it63070221_natcha', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$n = $_POST['name']
$w = $_POST['weight'];
$h = $_POST['height'];
$bmi = $w / ($h ** 2);

$sql = "INSERT INTO testlabitf27 (weight , height , bmi) VALUES ('$w', '$h', '$bmi')";

if (mysqli_query($conn, $sql)) {
    echo "OK";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }


?>
