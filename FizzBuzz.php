<?php
function fizzBuzz($angka)
{
    // Jika angka kelipatan 3, tampilkan Fizz
    if ($angka % 3 == 0) {
        echo "Fizz\n";
    // Jika angka kelipatan 5, tampilkan Buzz
    } elseif ($angka % 5 == 0) {
        echo "Buzz\n";
    // Jika bukan kelipatan 3 atau 5, tampilkan angka sebenarnya
    } else {
        echo $angka . "\n";
    }
}
?>
