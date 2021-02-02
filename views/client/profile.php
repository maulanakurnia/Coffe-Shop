<?php
    $title = "Home";
    include("layouts/head.php");
    include("layouts/header.php");
    $userID = $_SESSION['userID'];
    $user = fetchData("SELECT * FROM user WHERE userID = '$userID'");
?>

<section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page">My Account</h2>
    </div>
</section>
<section class="section-content padding-y">
    <div class="container">
        <div class="row">
            <aside class="col-md-3">
                <ul class="list-group">
                    <a class="list-group-item active" href="profile.php">Profile</a>
                    <a class="list-group-item" href="changeProfile.php">Change Profile</a>
                    <a class="list-group-item" href="orderHistory.php">Order History</a>
                </ul>
            </aside>
            <main class="col-md-9">
                <article class="card mb-3">
                    <div class="card-header">
                        <h4>Profil</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <span>Full Name</span>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <input type="text" placeholder="<?= $user[0]['fullName'];?>" class="form-control" name="fullName" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <span>Nama Panggilan</span>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <input type="text" placeholder="<?= $user[0]['nickName'];?>" class="form-control" name="nickName" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <span>Email</span>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <input type="text" placeholder="<?= $user[0]['email']?>" class="form-control" name="email" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <span>No Telp</span>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <input type="text" placeholder="<?= $user[0]['phoneNumber']?>" class="form-control" name="phoneNumber" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </main>
        </div>
    </div>
</section>

<?php
    include("layouts/foot.php");
?>