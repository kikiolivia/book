<?php

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    $result = mysqli_query($conn, "INSERT INTO user VALUES(NULL, '$username', '$password', '$email')");
    if ($result) {
      header("location:admin.php?user");
    }
    else {
      die ("Query gagal dijalankan: ".mysqli_errno($conn).
             " - ".mysqli_error($conn));
    }
}

$post = mysqli_query($conn, "SELECT * FROM user ORDER BY id DESC");

?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    User
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
            <form role="form" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="">Username</label>
                  <input type="text" class="form-control" id="" placeholder="Username" name="username">
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" class="form-control" id="" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" class="form-control" id="" placeholder="Email" name="email">
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
                  <th>Username</th>
                  <th>Email</th>
                </tr>
                <?php if(mysqli_num_rows($post)) { $no=1; ?>
                    <?php while($row_post=mysqli_fetch_array($post)) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $row_post["username"] ?></td>
                  <td><?php echo $row_post["email"] ?></td>
                </tr>
                  <?php } ?>
                <?php } ?>
              </table>
            </div>
          </div>
          <!-- /.box -->   
</section>
<!-- /.content -->