<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Book</title>

	<link rel="stylesheet" href="file/css/bootstrap.min.css">
	<link rel="stylesheet" href="file/css/style.css">
	
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

</head>
<body>

<?php 

include ("page/header.php");
include 'koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM post ORDER BY id DESC LIMIT 5");

 ?>

<div class="daftar-main">
	<?php if(mysqli_num_rows($query)) { ?>
		<?php while($row=mysqli_fetch_array($query)) { ?>
		<div class="list-buku">
			<a href="detail.php?id=<?php echo $row["id"] ?>">
				<div class="row">
					<div class="col-lg-3">
						<img src="img/buku/<?php echo $row["gambar"] ?>" alt="">
					</div>
					<div class="col-lg-9">
						<p class="daftar-judul"><?php echo $row["judul"] ?></p>
						<i class="daftar-penulis"><?php echo $row["penulis"] ?>, <strong><?php echo $row["tanggal"] ?></strong></i>
					</div>
				</div>
			</a>
		</div>
		<?php } ?>
	<?php } ?>
</div>

<?php 

include ("page/footer.php");

 ?>