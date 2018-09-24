<?php

include 'koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM post ORDER BY id DESC LIMIT 5");

?>

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

 ?>


	<header>
	  <div class="row">
	    <div class="col-6 header-quotes">
	      <p>Setiap tempat adalah sekolah, Setiap orang adalah guru dan <b>Setiap buku adalah ilmu</b></p>
	    </div>
	    <div class="col-6 header-img">
	      <img src="img/book4.jpg">
	    </div>
	  </div>
	</header>
		

	<main>
		
		<div class="main-content">
			<h1>Buku Rekomendasi</h1>
			<div class="row">
				<?php if(mysqli_num_rows($query)) { ?>
					<?php while($row=mysqli_fetch_array($query)) { ?>
					<div class="col-2">
						<img src="img/buku/<?php echo $row["gambar"] ?>" alt="">
						<p class="judul"><?php echo $row["judul"] ?></p>
						<p class="penulis"><?php echo $row["penulis"] ?></p>
					</div>
						<?php } ?>
	  			<?php } ?>
				<div class="col-2">
					<a href="detail.php" class="seeall">>></a>
				</div>
			</div>
		</div>

	</main>

<?php 

include ("page/footer.php");

 ?>