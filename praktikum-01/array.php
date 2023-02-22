<?php 
// BUat Array
$animals = ["burung", "kucing", "nyamuk", "singa"];
echo $animals[1] . "<br>";

echo $animals[3] . "<br>";

echo "<hr>";
// foreach / menampilkan semua data
foreach ($animals as $animal) {
    echo "<li>" . $animal . "</li>" . "<br>";
}

echo "<hr>";
// Buat Array Asosiatif
$mahasiswa = ["nama"=>"Ahmad Manarul", "jurusan"=>"TI", "semester"=>6];
echo $mahasiswa["jurusan"] . "<br>";

// Menampilkan semua data
foreach ($mahasiswa as $key => $value) {
    echo "Key :" . $key . "Value :" . $value . "<br>";
}

echo "<hr>";
// Array Multidimensi
$dosen = [
    ["Pak Rojul", "Web"],
    ["Pak Reza", "DDP"],
    ["Pak Lukman", "OS"]
];

echo $dosen[2][0]; 

?>