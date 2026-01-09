<?php
$cnn = mysqli_connect("localhost","root","","db_akademik");

$user = $_POST['username'];
$pass = $_POST['password'];

$data = mysqli_query($cnn,
"SELECT * FROM user WHERE username='$user' AND password='$pass'");

if(mysqli_num_rows($data)>0){
    header("location:tampil_matkul.php");
}else{
    echo "Login gagal";
}
?>
