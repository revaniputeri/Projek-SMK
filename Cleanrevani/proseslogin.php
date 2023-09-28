<?php
   include "koneksi.php";
     
     $username = $_POST ['username'];
     $password = $_POST ['password'];
     $query = mysqli_query ($koneksi, "select * from login where username = '$username' and password = '$password'");
     $query1 = mysqli_num_rows($query);
     
     if ($query1) {
        session_start();
        $_SESSION['username']=$username;
        header("Location:home.php");
     }
     else {
        ?>
        <script>
            alert ("Maaf, Username atau Password anda salah");
            document.location="index.php";
        </script>
        <?php
     }
?>