<?php
    $title  = "Add User";
    include("../layouts/head.php");
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
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah User</h3>
                        </div>
                        <form method="POST" action="../actions/user/add.php">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" placeholder="Insert Full Name" name="fullName">
                                </div>
                                <div class="form-group">
                                    <label>Nick Name</label>
                                    <input type="text" class="form-control" placeholder="Insert Nick Name" name="nickName">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Insert Email" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="number" class="form-control" placeholder="Insert Phone Number" name="phoneNumber">
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <select class="custom-select form-control" name="roleID">
                                        <option value="1">Admin</option>
                                        <option value="2">User</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Insert Password" name="password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword">
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-block">Add</button>
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