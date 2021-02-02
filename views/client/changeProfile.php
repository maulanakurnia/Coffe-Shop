<?php
    $title = "Change Profile";
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
                    <a class="list-group-item" href="profile.php">Profile</a>
                    <a class="list-group-item active" href="changeProfile.php">Change Profile</a>
                    <a class="list-group-item" href="orderHistory.php">History Payment</a>
                </ul>
            </aside>
            <main class="col-md-9">
                <article class="card mb-3">
                    <div class="card-header">
                        <h4>Change Profile</h4>
                    </div>
                    <form action="actions/auth/editProfile.php" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <span>Full Name</span>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="fullName" value="<?= $user[0]['fullName']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <span>Nick Name</span>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nickName" value="<?= $user[0]['nickName']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <span>Email</span>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" value="<?= $user[0]['email'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <span>Phone Number</span>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phoneNumber" value="<?= $user[0]['phoneNumber']?>">
                                </div>
                            </div>
                        </div>
                        <small class="text-danger"><i>If you don't want to change your password then ignore it!</i></small>
                        <div class="row">
                            <div class="col-3">
                                <span>Old Password</span>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <input type="passsword" class="form-control" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <span>New Password</span>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="newPassword">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <span>Confirm New Password</span>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="cNewPassword">
                                </div>
                            </div>
                        </div>
                        <div class="ml-auto">
                            <button type="submit" class="btn btn-success btn-block"> Change </button>
                        </div>
                    </div>
                    </form>
                </article>
            </main>
        </div>

    </div>
</section>

<?php
    include("layouts/foot.php");
?>