<!-- HEADER -->
<?php include('header.php'); ?>


<section class="step-section pt-150 pb-50" style="    background: url('assets/images/banner-svg.svg');
    background-size: cover;
    background-position: top right;
    background-repeat: no-repeat;">
    <div class="container">
        <div class="step-box">
            <div class="title-wrapper txt-center primary">
                <h2 class="font-35">Which is your highest education level ?</h2>
            </div>
            <div class="radio-wrapper graduation-wrapper flex align-center justify-center gap-50 pt-80">
                <label class="radio-label smaller">
                    <input type="radio" name="degree" class="radio-card-input" value="degree1">
                    <div class="radio-input sm txt-center">
                        <h3>Grade 12</h3>
                    </div>
                </label>
                <label class="radio-label smaller">
                    <input type="radio" name="degree" class="radio-card-input" value="degree2">
                    <div class="radio-input sm txt-center">
                        <h3>Undergraduate</h3>
                    </div>
                </label>
            </div>
            <div class="mt-50">
                <div class="step-dropdown">
                    <select class="select-dropdown step-select" name="degree-level" data-placeholder="Select your board">
                        <option></option>
                        <option value="01">IB</option>
                        <option value="02">ICSE</option>
                        <option value="03">CBSE</option>
                        <option value="04">STATE</option>
                    </select>
                </div>
                <div class="pink-input step-input mt-30">
                    <input type="text" name="" id="" placeholder="Percentage %">
                </div>
            </div>
            <div class="mt-50">
                <div class="flex align-center justify-center">
                    <a href="step-4.php" title="Proceed" class="btn p-btn">Proceed</a>
                </div>
                <div class="txt-center mt-20">STEP 4</div>
            </div>
        </div>
    </div>
</section>


<!-- FOOTER -->
<?php include('footer-2.php'); ?>