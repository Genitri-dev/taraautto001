<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }
    require 'functions.php';
    // abildata id di urtl
    $id = $_GET["id"];
    // query data produk berdasarkan id
    $prd = query("SELECT * FROM produk WHERE produkid = $id")[0];
    
    if( isset($_POST["submit"]) ){
        //apakah data berhasil diubah  atau tidak
        if( ubah($_POST) > 0){
            echo "
                <script>
                    alert('Produk Berhasil Di Ubah');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "Produk Tidak Berhasil Di Ubah";
        }
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tara Auto</title>
</head>
<body>
    <h1>tambah.php</h1> <a href="logout.php">Logout</a>
    <form action="" method="POST">
    <ul>
        <input type="hidden" name="produkid" value="<?= $prd['produkid']?>">
			<li>
				<label for="namaproduk">Nama Produk : </label>
				<input type="text" name="namaproduk" id="namaproduk" required value="<?= $prd["namaproduk"]; ?>">
			</li>
			<li>
				<label for="stokproduk">Stok Produk : </label>
				<input type="text" name="stokproduk" id="stokproduk" required value="<?= $prd["stokproduk"]; ?>">
			</li>
			<li>
				<label for="gambarproduk">Gabar Produk :</label>
				<input type="text" name="gambarproduk" id="gambarproduk" required value="<?= $prd["gambarproduk"]; ?>">
			</li>
			<li>
				<label for="hargaproduk">Harga Produk :</label>
				<input type="text" name="hargaproduk" id="hargaproduk" required value="<?= $prd["hargaproduk"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Detail Produk!</button>
			</li>
		</ul>
    </form>
</body>
</html>