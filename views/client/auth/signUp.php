<?php
    $title = "Sign Up";
    include("../layouts/head.php");
    include("../layouts/header.php");
?>>

<section class="section-content padding-y">
    <div class="card mx-auto" style="max-width:520px; margin-top:40px;">
        <article class="card-body">
            <header class="mb-4">
                <h4 class="card-title">Daftar</h4>
            </header>
            <form action="../actions/auth/signUp.php" method="post">
                <div class="form-row">
                    <div class="col form-group">
                        <input name="fullName" type="text" class="form-control" placeholder="Insert Full Name">
                    </div>
                    <div class="col form-group">
                        <input name="nickName" type="text" class="form-control" placeholder="Insert Nick Name">
                    </div>
                </div>
                <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input name="phoneNumber" type="number" class="form-control" placeholder="Phone Number">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input class="form-control" name="password" type="password" placeholder="Insert Password">
                    </div>
                    <div class="form-group col-md-6">
                        <input class="form-control" name="cpassword" type="password" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Sign Up </button>
                </div>
            </form>
            <hr>
            <p class="text-center mt-4">already have an account ? <a href="masuk.php">Sign In</a></p>
        </article>
    </div>
    <br><br>
</section>



<?php
    include("../layouts/foot.php");
?>>