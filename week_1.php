<?php
    $nama = readline("Masukkan nama Anda: ");

    echo "ini latihan ke-2\n";
    echo "Hello perkenalkan nama saya $nama\n";

    echo "ini latihan Ke-3\n";
    $angka1 = readline("Masukkan Angka Pertama: ");
    $angka2 = readline("Masukkan Angka Kedua: ");
    echo "PERJUMLAHAN  $angka1 + $angka2 = ".$angka1 + $angka2;
    echo " \nPENGURANGAN  $angka1 - $angka2 = ".$angka1 - $angka2;
    echo " \nPERKAILAN  $angka1 x $angka2 = ".$angka1 * $angka2;
    echo " \nPEMBAGIAN $angka1 ÷ $angka2 = ".$angka1 / $angka2;

    echo "\n\nini latihan hari 4\n";
    $nilai_uts = readline("Masukkan nilai UTS: ");
    $nilai_uas = readline("Masukkan nilai UAS: ");
    $nilai_tugas = readline("Masukkan nilai TUGAS: ");
    $nilai_praktikum= readline("Masukkan nilai PRAKTIKUM: ");
    $bobot_absensi = 0.1; // 10%
    $bobot_tugas = 0.2;   // 20%
    $bobot_uts = 0.3;     // 30%
    $bobot_uas = 0.4;     // 40%


    $nilai_akhir = ($nilai_absensi * $bobot_absensi) +
                ($nilai_tugas * $bobot_tugas) +
                ($nilai_uts * $bobot_uts) +
                ($nilai_uas * $bobot_uas);


    if ($nilai_akhir >= 85) {
        $grade = "A";
        echo"SELAMAT ANDA LULUS DENGAN ";
    } elseif ($nilai_akhir >= 70) {
        $grade = "B";
        echo"SELAMAT ANDA LULUS DENGAN ";
    } elseif ($nilai_akhir >= 55) {
        $grade = "C";
        echo"SELMAT ANDA LULUS DENGAN ";
    } elseif ($nilai_akhir >= 40) {
        $grade = "D";
        echo"MOHON MAAF ANDA BELUM LULUS DENGAN ";
    } else {
        $grade = "E";
        echo"MOHON MAAF ANDA BELUM LULUS DENGAN ";
    }
    echo "NILAI AKHIR: " . $nilai_akhir . "\n";
    echo "GRADE: " . $grade;


    echo "\n\nini latihan hari 5\n";
    for ($x = 0; $x < 21; $x++) {
        if ($x == 21) {
            break;
        }
        echo "Cetak nomor ke-: $x \n";
    }


    echo "\n\nini latihan hari 6\n";
    $bilangan = readline("Masukan Bilangan Yang mau di cek : ");     

    if ($bilangan % 2 == 0) {
        echo "$bilangan adalah bilangan Genap.";
    } else {
        echo "$bilangan adalah bilangan Ganjil.";
    }


    echo "\n\nini latihan hari 7\n";
    function hitung($angka1, $angka2, $operator) {
        if (!is_numeric($angka1) || !is_numeric($angka2)) {
            return 'Masukkan angka yang valid!';
        }

        switch ($operator) {
            case '+':
                return $angka1 + $angka2;
            case '-':
                return $angka1 - $angka2;
            case '*':
                return $angka1 * $angka2;
            case '/':
                return ($angka2 == 0) ? 'Error: Pembagian dengan nol!' : $angka1 / $angka2;
            default:
                return 'Operator tidak dikenal!';
        }
    }

    if ($argc == 4) {
        $angka1 = $argv[1];
        $operator = $argv[2];
        $angka2 = $argv[3];
        echo 'Hasil: ' . hitung($angka1, $angka2, $operator) . PHP_EOL;
    } else {
        echo "Cara pakai: php kalkulator.php <angka1> <operator> <angka2>" . PHP_EOL;
        echo "Contoh: php kalkulator.php 8 * 3" . PHP_EOL;
    }

    
?>




