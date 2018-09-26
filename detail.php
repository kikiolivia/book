<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Book</title>

	<link rel="stylesheet" href="file/css/bootstrap.min.css">
	<link rel="stylesheet" href="file/css/style.css">

</head>
<body>
<?php 

include ("page/header.php");

include 'koneksi.php';

$id = $_GET["id"];
$query = mysqli_query($conn, "SELECT * FROM post WHERE id = {$id}") or die(mysqli_error($conn));
$post = mysqli_fetch_array($query);

if (isset($_POST["submit"])) {
	$id_post = $_POST["id_post"];
	$nama = $_POST["nama"];
	$pesan = $_POST["pesan"];
	$result = mysqli_query($conn, "INSERT INTO komen VALUES (NULL, '$id_post',  NOW(), '$nama', '$pesan')");
	if ($result) {
		header("location:detail.php?id={$id}");
	  }
	  else {
		die ("Query gagal dijalankan: ".mysqli_errno($conn).
			   " - ".mysqli_error($conn));
	  }
}

$comment = mysqli_query($conn, "SELECT * FROM komen WHERE id_post = '$id' ORDER BY id DESC");
$data = mysqli_num_rows($comment);

 ?>

<div class="daftar-main">
	<div class="list-buku">
		<div class="row">
			<div class="col-lg-3">
				<img src="img/buku/<?php echo $post['gambar'] ?>" alt="">
			</div>
			<div class="col-lg-9">
				<p class="daftar-judul"><?php echo $post['judul'] ?></p>
				<i class="daftar-penulis"><?php echo $post['penulis'] ?>, <strong><?php echo $post['tanggal'] ?></strong></i>
			</div>
		</div>

		<div class="sinopsis">
			<h1>Sinopsis</h1>
			<?php echo $post['sinopsis'] ?>
		</div>
	</div>


	<div class="form-comment">
		<h1>Komentar</h1>
		<hr>
		<form class="form-horizontal" action="" method="POST">
			<div class="form-row">
				<div class="form-group col-lg-4">
					<input type="name" class="form-control  form-control-sm" placeholder="Enter Name" name="nama">
				</div>
				<div class="form-group col-lg-12">
					<textarea class="form-control" rows="3" name="pesan"></textarea>	
				</div>
				<button type="submit" class="btn btn-primary" name="submit">Comment</button>
				<input type="hidden" name="id_post" value="<?php echo $id ?>" />
			</div>
		</form>
	</div>

	<?php if(mysqli_num_rows($comment)) { ?>
        <?php while($row_comment = mysqli_fetch_array($comment)) { ?>
		<div class="comment-user">
			<hr>
			<h1><?php echo $row_comment["nama"] ?>, <span class="tanggal-user"><?php echo $row_comment["tanggal"] ?></span></h1>
			<div class="text-user">
			<?php echo $row_comment["pesan"] ?>
			</div>
			<hr>
		</div>
		<?php } ?>
    <?php } ?>
	
</div>

<?php 

include ("page/footer.php");

 ?>