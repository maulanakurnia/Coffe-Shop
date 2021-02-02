<?php
    $title = "SignIn";
    include("../layouts/head.php");
    include("../layouts/header.php");
?>

<section class="section-conten padding-y">
    <div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
        <article class="card-body">
            <header class="mb-4">
                <h4 class="card-title">Sign In</h4>
            </header>
            <form action="../actions/auth/signIn.php" method="post">
                <div class="form-group">
                    <input name="email" class="form-control" placeholder="Email" type="email" required>
                </div>
                <div class="form-group">
                    <input name="password" class="form-control" placeholder="Password" type="password">
                </div>

                <div class="form-group">
                    <a href="lupasandi.php" class="float-right">Forget Your Password?</a>
                    <label class="float-left custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked="">
                        <div class="custom-control-label"> Remember Me </div>
                    </label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Sign In </button>
                </div>

            </form>
            <hr>
            <p class="text-center">Don't have an account yet? <a href="signUp.php">Sign Up!</a></p>
        </article>
    </div>
    <br>
</section>

<?php
    include("../layouts/foot.php");
?>