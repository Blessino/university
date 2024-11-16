<!-- HEADER -->
<?php include('header.php'); ?>


<section class="step-section pt-150 pb-50" style="    background: url('assets/images/banner-svg.svg');
    background-size: cover;
    background-position: top right;
    background-repeat: no-repeat;">
    <div class="container">
        <div class="step-box">
            <div class="title-wrapper txt-center primary">
                <h2 class="font-35">Which English Language Test have you taken OR are planning to take ?</h2>
                <p class="grey mt-10">Scoring high in language tests increases your option multi fold</p>
            </div>
            <div class="radio-wrapper graduation-wrapper flex align-center justify-center gap-50 pt-50">
                <label class="radio-label smaller">
                    <input type="radio" name="degree" class="radio-card-input" value="IELTS">
                    <div class="radio-input smallest txt-center">
                        <h3>IELTS</h3>
                    </div>
                </label>
                <label class="radio-label smaller">
                    <input type="radio" name="degree" class="radio-card-input" value="TOEFL">
                    <div class="radio-input smallest txt-center">
                        <h3>TOEFL</h3>
                    </div>
                </label>
                <label class="radio-label smaller">
                    <input type="radio" name="degree" class="radio-card-input" value="PTE">
                    <div class="radio-input smallest txt-center">
                        <h3>PTE</h3>
                    </div>
                </label>
            </div>
            <div class="mt-50 txt-center">
                <label for="score" class="step-label font-20">Enter your score</label>
                <div class="pink-input step-input mt-10">
                    <input type="text" name="" id="" placeholder="Percentage %">
                </div>
            </div>
            <div class="mt-50 flex align-center justify-center">
                <label class="radio-label">
                    <input type="radio" name="degree" class="radio-card-input" value="nodegree">
                    <div class="red-radio txt-center">
                        <div>Not Planning to take any</div>
                    </div>
                </label>
            </div>
            <div class="mt-50">
                <div class="flex align-center justify-center">
                    <a href="step-6.php" title="Proceed" class="btn p-btn">Proceed</a>
                </div>
                <div class="txt-center mt-20">STEP 6</div>
            </div>
        </div>
    </div>
</section>


<!-- FOOTER -->
<?php include('footer-2.php'); ?>