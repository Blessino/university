<!-- HEADER -->
<?php include('header.php'); ?>

    <section class="signin-section flex align-center justify-center pt-100 pb-100">
        <div class="signin-box">
            <div class="img-wrapper">
                <img src="assets/images/uni-img.png" alt="" class="img-responsive">
            </div>
            <div class="rightbox ">
                <h3>Sign In</h3>
                <p class="grey mt-10 font-15">By continuing, you agree to our <a href="#" title="User Agreement" class="black underline">User Agreement</a> and <a href="#" title="Privacy Policy" class="black underline">Privacy Policy</a>.</p>
                <div class="mt-70 flex column gap-10 login-opt">
                    <a href="#" title="Continue with Google">
                        <img src="assets/images/google.svg" alt="" class="icon"> Continue with Google
                    </a>
                    <a href="#" title="Continue with Facebook">
                        <img src="assets/images/fb.svg" alt="" class="icon"> Continue with Facebook
                    </a>
                </div>
                <div class="mt-50 grey">OR</div>

                <div class="mt-50">
                    <input type="text" placeholder="Email" class="my-input">
                    <input type="password" placeholder="Password" class="my-input">
                    <button type="submit" class="btn p-btn sm-btn width-100"><a href="step-1.php" class="white">Sign In</a></button>
                </div>
                <div class="mt-20">
                    <a href="forgot-pw.php" title="Forgot Password?" class="primary fw-bold">Forgot Password?</a>
                </div>
                <div class="black mt-100">
                    New to Uni & College? <a href="signup.php" title="Sign Up." class="primary fw-bold">Sign Up.</a>
                </div>
            </div>
        </div>
    </section>
    

<!-- FOOTER -->
<?php include('footer-2.php'); ?>