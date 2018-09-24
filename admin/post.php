<?php

if (isset($_POST["submit"])) {
    $judul = $_POST["judul"];
    $penulis = $_POST["penulis"];
    $sinopsis = $_POST["sinopsis"];
    $tanggal = $_POST["tanggal"];

    $file_name = $_FILES["file_upload"]["name"];
    $tmp_name = $_FILES["file_upload"]["tmp_name"];
    move_uploaded_file($tmp_name, "img/buku/".$file_name);
    $result = mysqli_query($conn, "INSERT INTO post VALUES(NULL, '$judul', '$penulis', '$sinopsis', '$file_name', '$tanggal')");
    if ($result) {
      header("location:admin.php?post");
    }
    else {
      die ("Query gagal dijalankan: ".mysqli_errno($conn).
             " - ".mysqli_error($conn));
    }
}

$post = mysqli_query($conn, "SELECT * FROM post ORDER BY id DESC");

?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Post
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Post</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- left column -->
    <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Post Buku</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="">Judul</label>
                  <input type="text" class="form-control" id="" placeholder="Judul" name="judul">
                </div>
                <div class="form-group">
                  <label for="">Penulis</label>
                  <input type="text" class="form-control" id="" placeholder="Penulis" name="penulis">
                </div>
                <div class="form-group">
                  <label for="">Tahun Terbit</label>
                  <input type="text" class="form-control" id="" placeholder="Tahun Terbit (4 Angka)" name="tanggal">
                </div>
                <div class="form-group">
                    <label for="">Sinopsis</label>
                    <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
                          name="sinopsis">
                    </textarea>
                </div>
                <div class="form-group">
                  <label for="">Gambar</label>
                  <input type="file" name="file_upload" />
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <button type="reset" class="btn btn-warning">Reset</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Tabel Post</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Judul</th>
                  <th>Penulis</th>
                  <th>Sinopsis</th>
                  <th>Gambar</th>
                  <th>tanggal</th>
                </tr>
                <?php if(mysqli_num_rows($post)) { $no=1; ?>
                    <?php while($row_post=mysqli_fetch_array($post)) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $row_post["judul"] ?></td>
                  <td><?php echo $row_post["penulis"] ?></td>
                  <td><?php echo $row_post["sinopsis"] ?></td>
                  <td><?php echo $row_post["gambar"] ?></td>
                  <td><?php echo $row_post["tanggal"] ?></td>
                </tr>
                  <?php } ?>
                <?php } ?>
              </table>
            </div>
          </div>
          <!-- /.box -->   
</section>
<!-- /.content -->