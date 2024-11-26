<?php 

 include 'koneksi.php';

 $username = $_POST['username'];
 $password = $_POST['password'];

 $data=mysqli_query($koneksi, "SELECT * FROM kolom WHERE Username='$username' AND Password='$password' ");

 $cek = mysqli_num_rows($data);

 if($cek > 0){
   header("location: admin.php");
 }else{
   header("location: login.php");
 }
?>