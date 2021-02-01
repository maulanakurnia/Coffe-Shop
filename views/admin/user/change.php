<?php 
    $title  = "Change User";
    include("../layouts/head.php");

    $userID = $_GET['id'];
    $user   = fetchData("SELECT * FROM user a INNER JOIN role b ON a.roleID=b.roleID WHERE a.userID = '$userID'");
    $role   = fetchData("SELECT * FROM role"); 
?>

<div class="content-wrapper" style="min-height: 1200.88px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="../">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="../user">User</a></li>
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title"><?= $title; ?></h3>
                        </div>
                        <form method="POST" action="../actions/user/change.php"> 
                            <div class="card-body">     
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" value="<?= $user[0]['fullName'] ?>" class="form-control" placeholder="Masukkan nama lengkap anda" name="fullName">
                                    <input type="hidden" value="<?= $user[0]['userID'] ?>" name="userID">
                                </div>
                                <div class="form-group">
                                    <label>Nama Panggilan</label>
                                    <input type="text" value="<?= $user[0]['nickName'] ?>" class="form-control" placeholder="Masukkan nama panggilan anda" name="nickName">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" value="<?= $user[0]['email'] ?>" class="form-control" placeholder="Masukkan email anda" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Nomor Ponsel</label>
                                    <input type="number" value="<?= $user[0]['phoneNumber'] ?>" class="form-control" placeholder="Masukkan Nomor ponsel anda" name="phoneNumber">
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <select name="role" class="custom-select form-control">
                                        <option value="<?= $user[0]['roleID']?>"><?= $user[0]['role']?></option>
                                        <?php foreach($role as $a) : ?>
                                            <option value="<?= $a['roleID']?>"><?= $a['role']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                                <small class="text-danger"><i>Abaikan Form password jika anda tidak ingin merubah password!</i></small>
                                <div class="form-group">
                                    <label>Kata Sandi</label>
                                    <input type="password" class="form-control" placeholder="Masukkan Kata sandi" name="sandi">
                                </div>
                                <div class="form-group">
                                    <label>Kata Sandi Baru</label>
                                    <input type="password" class="form-control" placeholder="Masukkan Konfirmasi Kata sandi" name="password">
                                </div>
                                <div class="form-group">
                                    <label>Konfirmasi Kata Sandi</label>
                                    <input type="password" class="form-control" placeholder="Masukkan Konfirmasi Kata sandi" name="cpassword">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-block">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>

<?php 
  include("../layouts/foot.php");
?>