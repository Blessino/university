<!-- HEADER -->
<?php include('header.php'); ?>

    <section class="signin-section flex align-center justify-center pt-100 pb-100">
        <div class="signin-box">
            <div class="img-wrapper">
                <img src="assets/images/uni-img.png" alt="" class="img-responsive">
            </div>
            <div class="rightbox ">
                <h3>Sign Up</h3>
                <div class="mt-50">
                    <div class="grid-2 g-gap-15">
                        <input type="text" placeholder="First Name" class="my-input">
                        <input type="text" placeholder="Last Name" class="my-input">
                    </div>
                    <input type="email" placeholder="Email" class="my-input">
                    <input type="phone" placeholder="Phone Number" class="my-input">
                    <div class="grid-2 g-gap-15">
                        <input type="password" placeholder="Password" class="my-input">
                        <input type="password" placeholder="Confirm Password" class="my-input">
                    </div>
                    <div class="mt-10 flex gap-10 align-center">
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        <label for="vehicle1"> I accept <a href="#" title="terms and condition" class="fw-600 primary">terms and condition</a></label><br>
                    </div>
                    <button type="submit" class="mt-30 btn p-btn sm-btn width-100"><a href="step-1.php" class="white">Register</a></button>
                </div>
                <div class="black mt-40 txt-center">
                    Already have an account?? <a href="signin.php" title="In" class="primary fw-bold">Sign In.</a>
                </div>
                <div class="mt-20 grey txt-center">OR</div>
                <div class="mt-40 grid-2 g-gap-10 login-opt sign-up">
                    <a href="#" title="Continue with Google">
                        <img src="assets/images/google.svg" alt="" class="icon"> Continue with Google
                    </a>
                    <a href="#" title="Continue with Facebook">
                        <img src="assets/images/fb.svg" alt="" class="icon"> Continue with Facebook
                    </a>
                </div>
            </div>

        </div>
    </section>
    

<!-- FOOTER -->
<?php include('footer-2.php'); ?>