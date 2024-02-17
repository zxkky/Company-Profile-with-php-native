<?php
require_once("koneksi.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM user WHERE username = '$username'");
if(mysql_num_rows($cekuser) > 0) {
echo "<div align='center'>Username Sudah Terdaftar! <a
href='daftar.php'>Back</a></div>";
} else {
if(!$username || !$pass) {
echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
} else {
$simpan = mysql_query("INSERT INTO user(username, password)
VALUES('$username','$pass')");
if($simpan) {
echo "<div align='center'>Pendaftaran Sukses, Silahkan <a
href='login.php'>Login</a></div>";
} else {

4

echo "<div align='center'>Proses Gagal!</div>";
}
}
}
?>
mysqli
<?php
require_once("koneksi.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$sql = "SELECT * FROM user WHERE username = '$username'";
$query = $db->query($sql);
if($query->num_rows != 0) {
echo "<div align='center'>Username Sudah Terdaftar! <a
href='daftar.php'>Back</a></div>";
} else {
if(!$username || !$pass) {
echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
} else {
$data = "INSERT INTO user VALUES (NULL, '$username', '$pass')";
$simpan = $db->query($data);
if($simpan) {
echo "<div align='center'>Pendaftaran Sukses, Silahkan <a
href='login.php'>Login</a></div>";
} else {
echo "<div align='center'>Proses Gagal!</div>";
}
}
}
?>