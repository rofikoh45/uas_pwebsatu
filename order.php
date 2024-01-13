<?php
session_start();
include 'koneksi.php';
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
$nomorhp = $_POST['nomorhp'];
$namaproduk= $_POST['namaproduk'];
$hargaproduk= $_POST['hargaproduk'];
$pembayaran=$_POST['pembayaran'];
$alamatpengiriman=$_POST['alamatpengiriman'];

$query = mysqli_query($conn, "INSERT INTO tbtransaksi (username, email, nomorhp, namaproduk, hargaproduk, pembayaran, alamatpengiriman) values ('$username', '$email', '$nomorhp', '$namaproduk', '$hargaproduk', '$pembayaran', '$alamatpengiriman')");

if($query) {
			echo '<script>alert("Order Pemesanan Berhasil");
			location.href="index.html"</script>';
	  	}else {
			echo '<script>alert("Register Gagal")</script>';
	  	}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Order Here</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patua+One">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #333;
    background: #fafafa;
    font-family: "Patua One", sans-serif;
}
.contact-form {
    padding: 50px;
    margin: 30px 0;
}
.contact-form h1 {
    color: #19bc9d;
    font-weight: bold;
    margin: 0 0 15px;
}
.contact-form .form-control, .contact-form .btn {
    min-height: 38px;
    border-radius: 2px;
}
.contact-form .form-control:focus {
    border-color: #19bc9d;
}
.contact-form .btn-primary, .contact-form .btn-primary:active {
    color: #fff;
    min-width: 150px;
    font-size: 16px;
    background: #19bc9d !important;
    border: none;
}
.contact-form .btn-primary:hover {
    background: #15a487 !important; 
}
.contact-form .btn i {
    margin-right: 5px;
}
.contact-form label {
    opacity: 0.7;
}
.contact-form textarea {
    resize: vertical;
}
.hint-text {
    font-size: 15px;
    padding-bottom: 20px;
    opacity: 0.6;
}
</style>
</head>
<body>
	
<div class="container-lg">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="contact-form">
                <h1>PEMESANAN</h1>
                <p class="hint-text">Terima kasih atas kepercayaan Anda. Kami berharap produk kami dapat memenuhi harapan Anda.</p>       
                <form method="post">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputName">username</label>
                                <input type="text" class="form-control" id="inputName" name="username" required></div>
                        </div>                
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="email" required></div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="inputPhone">Nomor Hp</label>
                                <input type="text" class="form-control" id="inputPhone" name="nomorhp" required> </div>
                        </div>
                    </div>            
                    <div class="form-group">
                        <label for="inputnamaproduk">Pilih Nama Produk</label>
                        <select class="form-control" id="inputnamaproduk" name="namaproduk" required>
                            <option value="Produk1">1. helm bogo</option>
                            <option value="Produk2">2. helm minmaxx</option>
                            <option value="Produk3">3. helm nomerax</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inputhargaproduk">Harga Produk</label>
                        <input type="text" class="form-control" id="inputhargaproduk" name="hargaproduk" value="50.000" readonly>
                     </div>
                    <div class="form-group">
                        <label for="inputpembayaran">Pembayaran</label>
                        <select class="form-control" id="inputpembayaran" name="pembayaran" required>
                            <option value="Dana">Dana</option>
                            <option value="ShopeePay">ShopeePay</option>
                            <option value="ShopeePay">Gopay</option>
                        </select>
                    </div>
                        <label for="inputAlamatpengiriman">Alamat Pengiriman</label>
                        <textarea class="form-control" id="inputAlamatpengiriman" name="alamatpengiriman" rows="5" required></textarea> </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>