<!DOCTYPE html>
<?php
    #koneksi ke file fungtions
    require "functions.php";
    #kondisi jika username sudah di kirim
    if( isset($_POST["register"]) ) {
    	if( registrasi($_POST) ) {
    		echo "user berhasil di tambahkan";
            header("location: ./index.php");
            exit();
    	} else {
    		echo mysqli_error($conn);
    	}
    }
    #kondisi jika form kosong 
    
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaraAauto</title>
    <style>
        ul {
            list-style: none;
        }
        li{
            margin : 0px 0px 1em 0px;
        }
    </style>
</head>
<body>
    <h1>Halaman Registrasi</h1>
    <form action="" method= "post">
        <ul>
            <li>
                <label for="username" > User Name:</label>
                <input type="text" name = "username" id = "username">
            </li>
            <li>
                <label for="nama" > Nama Anda:</label>
                <input type="text" name = "nama" id = "nama">
            </li>
            <li>
                <label for="phone" >No Hp :</label>
                <input maxlength="12" type="text" name = "phone" id = "phone">
            </li>
            <li>
                <label for="password" > Password:</label>
                <input type="password" name = "password" id = "password">
            </li>
            <li>
                <label for="password2" >Ulangi Password :</label>
                <input type="password" name = "password2" id = "password2">
            </li>
            <li>
                <button type="submit" name = "register" >Registrasi</button>
            </li>
        </ul>
    </form>
</body>
</html>

