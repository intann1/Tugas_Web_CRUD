<?php
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi,
"SELECT * FROM user WHERE username='$username' AND password='$password'"
);

if (mysqli_num_rows($query) > 0) {
    header("Location: tampil_matkul.php");
} else {
    echo "Login gagal";
}
?>
