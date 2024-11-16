<!-- HEADER -->
<?php include('header.php'); ?>

    <section class="signin-section flex align-center justify-center pt-100 pb-100">
        <div class="signin-box">
            <div class="img-wrapper">
                <img src="assets/images/uni-img.png" alt="" class="img-responsive">
            </div>
            <div class="rightbox flex column space-between">
                <div>
                    <div><a href="signup.phps" title="Back" class="black flex align-center gap-10 back-link">
                        <img src="assets/images/chevron_left.svg" alt="" class="icon">
                        Back
                    </a></div>
                    <h3 class="mt-30">Forgot Password?</h3>
                    <p class="grey mt-10 font-15">No problem. Just enter your email address below — we’ll send you a link to reset it.</p>
                    <div class="mt-50">
                        <input type="text" placeholder="Email" class="my-input">
                        <button type="submit" class="btn p-btn sm-btn width-100">Reset Password</button>
                    </div>
                </div>

                <div class="black mt-100 txt-center">
                    Already have an account?? <a href="signin.php" title="In" class="primary fw-bold">Sign In.</a>
                </div>
            </div>
        </div>
    </section>
    

<!-- FOOTER -->
<?php include('footer-2.php'); ?>