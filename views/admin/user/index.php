<?php 
    $title  = "Data User";
    include("../layouts/head.php");
    $user = fetchData("SELECT * FROM user a INNER JOIN role b ON a.roleID=b.roleID");
?>

<div class="content-wrapper" style="min-height: 1071.31px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="../">Home</a></li>
                        <li class="breadcrumb-item active"><?= $title; ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-2">
                                    <a href="add.php" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah User</a>
                                </div>
                                <div class="col-10">
                                    <input disabled type="text" id="keyword" placeholder="Find User..." autocomplete="off" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0" id="formcari">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Full Name</th>
                                        <th>Nick Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($user as $u) : ?>
                                    <tr>

                                        <td><?= $i?></td>
                                        <td><?= $u['fullName']?></td>
                                        <td><?= $u['nickName']?></td>
                                        <td><?= $u['email']?></td>
                                        <td><?= $u['phoneNumber']?></td>
                                        <td><?= $u['role']?></td>
                                        <td>
                                            <a href="<?= $adm ?>user/change.php?id=<?= $u['userID']?>" class="badge badge-warning text-white">Change</a>
                                            <a href="<?= $adm ?>actions/user/delete.php?userID=<?= $u['userID']?>" class="badge badge-danger delete" onclick="return confirm('are u sure?')">Delete</a>
                                        </td>
                                    </tr>
                                    <?php $i++; endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

      </div>
    </section>
  </div>

<?php 
   include("../layouts/foot.php");
?>