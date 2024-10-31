<?php
function cetakBilangan($n) {
    // Pastikan input adalah bilangan bulat positif
    if ($n <= 0) {
        echo "Input harus berupa bilangan bulat positif.";
        return;
    }

    // Perulangan dari 1 hingga n
    for ($i = 1; $i <= $n; $i++) {
        // Percabangan untuk memenuhi kondisi yang ditentukan
        if ($i % 4 == 0 && $i % 6 == 0) {
            echo "Pemrograman Website 2024\n";
        } elseif ($i % 5 == 0) {
            echo "2024\n";
        } elseif ($i % 4 == 0) {
            echo "Pemrograman\n";
        } elseif ($i % 6 == 0) {
            echo "Website\n";
        } else {
            echo $i . "\n";
        }
    }
}

// Contoh penggunaan fungsi dengan input bilangan n
$n = 50; // Ubah nilai sesuai kebutuhan
cetakBilangan($n);
?>
