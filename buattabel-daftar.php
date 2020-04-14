<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "praktikum10";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: ". mysqli_connect_error()); }
$sql = "CREATE TABLE daftar (
nama VARCHAR(50) NOT NULL,
jkel VARCHAR(50) NOT NULL,
nisn VARCHAR(50) NOT NULL PRIMARY KEY,
nik VARCHAR(50) NOT NULL,
tmpt VARCHAR(50) NOT NULL,
tgl DATE NOT NULL,
akta VARCHAR(50) NOT NULL,
agama VARCHAR(50) NOT NULL,
kwn VARCHAR(50) NOT NULL,
abk VARCHAR(50) NOT NULL,
alamat VARCHAR(50) NOT NULL,
rt VARCHAR(50) NOT NULL,
rw VARCHAR(50) NOT NULL,
dusun VARCHAR(50) NOT NULL,
kelurahan VARCHAR(50) NOT NULL,
kecamatan VARCHAR(50) NOT NULL,
kdpos VARCHAR(50) NOT NULL,
lintang VARCHAR(50) NOT NULL,
bujur VARCHAR(50) NOT NULL,
tinggal VARCHAR(50) NOT NULL,
transport VARCHAR(50) NOT NULL,
kks VARCHAR(50) NOT NULL,
anak VARCHAR(50) NOT NULL,
penerima VARCHAR(50) NOT NULL,
kps VARCHAR(50) NOT NULL
)";
if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: ". $sql . "<br>" . mysqli_error($conn); }
mysqli_close($conn);
?>