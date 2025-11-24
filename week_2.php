<?php 
    echo str_repeat("=", 20);
    echo"\n";
    echo "ini latihan ke-18\n";
    echo str_repeat("=", 20);
    echo"\n";

    echo "Masukkan jumlah elemen array: ";
    $A = intval(fgets(STDIN)); // Mengambil input jumlah elemen
    $number = [];
    // Loop untuk meminta input elemen array
    for ($i = 1; $i <= $A; $i++) {
        echo "Masukkan elemen ke-$i: ";
        $elemen = trim(fgets(STDIN)); // Mengambil input elemen
        $number[] = $elemen; // Menambahkan elemen ke dalam array
    }
    echo "elemen pada array number :";
    echo implode(",", $number);  

    echo"\n";
    echo str_repeat("=", 20);
    echo"\n";
    echo "ini latihan ke-18\n";
    echo str_repeat("=", 20);
    echo"\n";

    echo "Masukkan Data Siswa";
    $rows = readline("Masukkan jumlah baris: ");
    $cols = readline("Masukkan jumlah kolom: ");

    // Membuat array dua dimensi
    $array2D = [];

    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $array2D[$i][$j] = readline("Masukkan nilai untuk elemen [$i][$j]: ");
        }
    }

    // Menampilkan array dua dimensi
    echo "\nData Siswa (Nama,Umur)\n";
    foreach ($array2D as $row) {
        echo implode("\t", $row) . "\n";
    }

    echo str_repeat("=", 20);
    echo"\n";
    echo "ini latihan ke-18\n";
    echo str_repeat("=", 20);
    echo"\n";

    $panjang = readline("Masukkan Tinggi Persegi Panjang: ");
    $lebar = readline("Masukkan Lebar Persegi panjang: ");

    



    
?>






