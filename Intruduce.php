PHP adalah singkatan dari Hypertext Preprocessor, yakni sebuah bahasa scripting yang dibuat oleh Rasmus Lerdorf pada tahun 1994 untuk membuat halaman, 
website, aplikasi web, dan Graphical User Interface (GUI). Bahasa ini bersifat open-source sehingga siapa pun dapat menggunakannya secara gratis.


<!-- Apa itu PHP? -->
PHP adalah akronim dari "PHP: Hypertext Preprocessor"
PHP adalah bahasa skrip open source yang banyak digunakan
Skrip PHP dijalankan di server
PHP gratis untuk diunduh dan digunakan

<!-- Apa itu File PHP? -->
File PHP dapat berisi kode teks, HTML, CSS, JavaScript, dan PHP
Kode PHP dijalankan di server, dan hasilnya dikembalikan ke browser sebagai HTML biasa
File PHP memiliki ekstensi ".php"

<!-- Apa yang Bisa Dilakukan PHP? -->
PHP dapat menghasilkan konten halaman dinamis
PHP dapat membuat, membuka, membaca, menulis, menghapus, dan menutup file di server
PHP dapat mengumpulkan data formulir
PHP dapat mengirim dan menerima cookie
PHP dapat menambahkan, menghapus, memodifikasi data dalam database Anda
PHP dapat digunakan untuk mengontrol akses pengguna
PHP dapat mengenkripsi data
Dengan PHP Anda tidak terbatas pada HTML keluaran. Anda dapat mengeluarkan gambar atau PDF File. Anda juga dapat mengeluarkan teks apa pun, seperti XHTML dan XML.

<!-- Sintaks PHP -->
<?php
// PHP code goes here
?>

Contoh File sederhana dengan kode HTML dan kode PHP:.php :
<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
?> 

</body>
</html>


<!-- Sensitivitas Kasus PHP -->
Dalam PHP, kata kunci (misalnya , , , , dll.), kelas, fungsi, dan fungsi yang ditentukan pengguna tidak peka huruf besar/kecil.ifelsewhileecho
Dalam contoh di bawah ini, ketiga pernyataan gema di bawah ini sama dan legal:
<!DOCTYPE html>
<html>
<body>

<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>

</body>
</html>


Nota: Namun; Semua nama variabel peka huruf besar/kecil!
Lihat contoh di bawah ini; Hanya pernyataan pertama yang akan menampilkan nilai variabel! Ini karena , , dan diperlakukan sebagai tiga Variabel yang berbeda:$color$color$COLOR$coLOR
Contoh:
$COLOR tidak sama dengan :$color

<!DOCTYPE html>
<html>
<body>

<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>

</body>
</html>


Komentar Baris Tunggal
Komentar satu baris dimulai dengan .//
Contoh Komentar sebelum kode:
// Outputs a welcome message:
echo "Welcome Home!";

Contoh Komentar di akhir baris:
echo "Welcome Home!"; // Outputs a welcome message

Komentar Multi-baris
Komentar multi-baris dimulai dengan dan diakhiri dengan ./**/
Contoh Komentar multi-baris sebagai penjelasan:
/*
The next statement will
print a welcome message
*/
echo "Welcome Home!";

Contoh Komentar multi-baris untuk mengabaikan kode:
/*
echo "Welcome to my home!";
echo "Mi casa su casa!";
*/
echo "Hello!";

Contoh Bagian tersebut akan diabaikan di kalkulasi:+ 15
$x = 5 /* + 15 */ + 5;
echo $x;


Membuat (Mendeklarasikan) Variabel PHP
Dalam PHP, variabel dimulai dengan tanda, diikuti dengan nama variabel:$
$x = 5;
$y = "John";

Dalam contoh di atas, variabel akan memegang nilai , dan variabel akan menahan nilai .$x5$y"John"
Nota: Saat Anda menetapkan nilai teks ke variabel, letakkan tanda kutip di sekitar nilai.
Nota: Tidak seperti bahasa pemrograman lainnya, PHP tidak memiliki perintah untuk mendeklarasikan variabel. Ini dibuat saat Anda pertama kali menetapkan nilai ke dia.

<!-- Variabel PHP -->
Variabel dapat memiliki nama pendek (seperti dan ) atau nama yang lebih deskriptif (, , ).$x$y$age$carname$total_volume
Aturan untuk variabel PHP:
Variabel dimulai dengan tanda, diikuti dengan nama variabel$
Nama variabel harus dimulai dengan huruf atau karakter garis bawah
Nama variabel tidak dapat dimulai dengan angka
Nama variabel hanya dapat berisi karakter alfanumerik dan garis bawah (A-z, 0-9, dan _ )
Nama variabel peka huruf besar/kecil (dan merupakan dua variabel yang berbeda)$age$AGE

Contoh:
$txt = "W3Schools.com";
echo "I love $txt!";

Contoh:
$txt = "W3Schools.com";
echo "I love " . $txt . "!";

contoh:
$x = 5;
$y = 4;
echo $x + $y;


<!-- Lingkup Global dan Lokal -->
Variabel yang dideklarasikan di luar fungsi memiliki GLOBAL SCOPE dan hanya dapat diakses di luar fungsi:
Contoh Variabel dengan cakupan global:
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

Contoh Variabel dengan cakupan lokal:
function myTest() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";


Pernyataan PHP echo dan cetak
Keduanya digunakan untuk mengeluarkan data ke layar. echo print

<!-- Perbedaannya kecil: -->
echo tidak memiliki nilai pengembalian, sementara memiliki nilai pengembalian 1 sehingga dapat digunakan dalam ekspresi print
echo dapat mengambil beberapa parameter, sementara dapat Ambil satu argumenprint
echo sedikit lebih cepat dari print

<!-- Pernyataan gema PHP -->
Pernyataan dapat digunakan dengan atau tanpa tanda kurung: atau .echoechoecho()
Contoh:
echo "Hello";
//same as:
echo("Hello");

<!-- Tampilkan Teks -->
Contoh berikut menunjukkan cara mengeluarkan teks dengan perintah (perhatikan bahwa teks dapat berisi markup HTML): echo
Contoh:
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

<!-- Tampilkan Variabel -->
Contoh berikut menunjukkan cara mengeluarkan teks dan variabel dengan pernyataan: echo
contoh:
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

echo "<h2>$txt1</h2>";
echo "<p>Study PHP at $txt2</p>";

<!-- Menggunakan Kutipan Tunggal -->
String dikelilingi oleh tanda kutip, tetapi ada perbedaan antara tunggal dan tanda kutip ganda dalam PHP.
Saat menggunakan tanda kutip ganda, variabel dapat disisipkan ke string seperti pada contoh di atas.
Saat menggunakan tanda kutip tunggal, variabel harus disisipkan menggunakan operator, seperti ini:
Contoh:
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

echo '<h2>' . $txt1 . '</h2>';
echo '<p>Study PHP at ' . $txt2 . '</p>';

<!-- Pernyataan cetak PHP -->
Pernyataan dapat digunakan dengan atau tanpa tanda kurung: atau .printprintprint()
Contoh:
print "Hello";
//same as:
print("Hello");

<!-- Tampilkan Teks -->
Contoh berikut menunjukkan cara mengeluarkan teks dengan perintah (perhatikan bahwa teks dapat berisi markup HTML):print
Contoh:
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";

<!-- Tampilkan Variabel -->
Contoh berikut menunjukkan cara mengeluarkan teks dan variabel dengan pernyataan:print
contoh:
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

print "<h2>$txt1</h2>";
print "<p>Study PHP at $txt2</p>";

<!-- Menggunakan Kutipan Tunggal -->
String dikelilingi oleh tanda kutip, tetapi ada perbedaan antara tunggal dan tanda kutip ganda dalam PHP.
Saat menggunakan tanda kutip ganda, variabel dapat disisipkan ke string seperti pada contoh di atas.
Saat menggunakan tanda kutip tunggal, variabel harus disisipkan menggunakan operator, seperti ini:.
Contoh:
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

print '<h2>' . $txt1 . '</h2>';
print '<p>Study PHP at ' . $txt2 . '</p>';


Anda bisa mendapatkan tipe data objek apa pun dengan menggunakan fungsi ini. var_dump()
Contoh Fungsi mengembalikan tipe data dan nilai:var_dump() :
$x = 5;
var_dump($x);

<!-- PHP String -->
String adalah urutan karakter, seperti "Halo dunia!".
Contoh:
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>";
var_dump($y);

<!-- Bilangan bulat (INTERGER) PHP -->
Tipe data bilangan bulat adalah bilangan non-desimal antara -2.147.483.648 dan 2,147,483,647.
Aturan untuk bilangan bulat:
Bilangan bulat harus memiliki setidaknya satu digit
Bilangan bulat tidak boleh memiliki titik desimal
Bilangan bulat dapat bersifat positif atau negatif
Bilangan bulat dapat ditentukan dalam: desimal (basis 10), heksadesimal (basis 16), oktal (basis 8), atau notasi biner (basis 2)
Contoh:
$x = 5985;
var_dump($x);

<!-- PHP Mengambang (FLOAT) -->
Float (floating point number) adalah angka dengan titik desimal atau angka dalam bentuk eksponensial.
Contoh:
$x = 10.365;
var_dump($x);

<!-- PHP Boolean -->
Boolean mewakili dua kemungkinan keadaan: BENAR atau SALAH.
Contoh
$x = true;
var_dump($x);

<!-- PHP Array -->
Array menyimpan beberapa nilai dalam satu variabel tunggal.
Dalam contoh berikut adalah array. Fungsi mengembalikan jenis data dan nilai:$cars var_dump()
Contoh
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);


<!-- Objek PHP -->
Kelas dan objek adalah dua aspek utama dari pemrograman berorientasi objek.
Kelas adalah templat untuk objek, dan objek adalah instans kelas.
Ketika objek individual dibuat, mereka mewarisi semua properti dan perilaku dari kelas, tetapi setiap objek akan memiliki nilai yang berbeda untuk Properti.
Mari kita asumsikan kita memiliki kelas bernama itu dapat memiliki properti seperti model, warna, dll. Kita dapat mendefinisikan variabel seperti , , dan seterusnya, untuk menahan nilai dari properti ini.Car$model$color
Ketika objek individu (Volvo, BMW, Toyota, dll.) dibuat, mereka mewarisi semua properti dan perilaku dari kelas, tetapi setiap objek akan memiliki nilai yang berbeda untuk properti.
Jika Anda membuat fungsi, PHP akan secara otomatis memanggil ini saat Anda membuat objek dari kelas. __construct()
Contoh:
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);


<!-- Nilai PHP NULL -->
Null adalah tipe data khusus yang hanya dapat memiliki satu nilai: NULL.
Variabel tipe data NULL adalah variabel yang tidak memiliki nilai yang ditetapkan padanya.
Ujung: Jika variabel dibuat tanpa nilai, variabel tersebut secara otomatis diberi nilai NULL.
Variabel juga dapat dikosongkan dengan mengatur nilai ke NULL:
Contoh
$x = "Hello world!";
$x = null;
var_dump($x);

<!-- Mengubah Jenis Data -->
Jika Anda menetapkan nilai bilangan bulat ke variabel, jenisnya akan secara otomatis menjadi bilangan bulat.
Jika Anda menetapkan string ke variabel yang sama, jenisnya akan berubah menjadi string:
Contoh
$x = 5;
var_dump($x);

$x = "Hello";
var_dump($x);

Jika Anda ingin mengubah jenis data variabel yang ada, tetapi tidak dengan Mengubah nilai, Anda dapat menggunakan casting.
Transmisi memungkinkan Anda mengubah jenis data pada variabel:
Contoh
$x = 5;
$x = (string) $x;
var_dump($x);


<!-- String PHP -->
String dalam PHP dikelilingi oleh tanda kutip ganda, atau tanda kutip tunggal.
Contoh:
echo "Hello";
echo 'Hello';


<!-- Panjang String -->
Fungsi PHP mengembalikan panjang string.strlen()
Contoh Kembalikan panjang string "Halo dunia!":
echo strlen("Hello world!");

<!-- Jumlah Kata -->
Fungsi PHP menghitung jumlah kata dalam string.str_word_count()
Contoh Hitung jumlah kata dalam string "Halo dunia!":
echo str_word_count("Hello world!");


<!-- Cari teks dalam string -->
Fungsi PHP mencari teks tertentu dalam string.strpos()
Jika kecocokan ditemukan, fungsi mengembalikan posisi karakter dari kecocokan pertama. Jika tidak ada kecocokan yang ditemukan, itu akan mengembalikan FALSE.
Contoh Cari teks "dunia" dalam string "Halo dunia!":
echo strpos("Hello world!", "world");
 
<!-- Menampilkan Array -->
 fgets(STDIN) → membaca input dari keyboard (standar input). 
intval() → mengubah input menjadi integer. 
print_r($number) → menampilkan isi array
$elemen = trim(fgets(STDIN)); → membaca input dari pengguna dan menghapus spasi atau enter di awal/akhir. */
______________________________________________________________________________________________
|   Cara   |  Kode                                  |	Output                                  |
|print_r() | print_r($number);                      |	Array ( [0] => 5 [1] => 10 [2] => 15 )  |
|implode() | echo implode(", ", $number);           |	5, 10, 15                               |
|foreach   | foreach($number as $n) echo $n." ";    |	5 10 15                                 |
----------------------------------------------------------------------------------------------