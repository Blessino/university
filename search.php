<!-- HEADER -->
<?php include('header-2.php'); ?>


<section class="bg-grey pt-150 pb-150">
    <div class="container">
        <h1>Courses</h1>
        <div class="flex space-between align-center">
            <div>531 Results</div>
            <div class="flex gap-10 align-center mt-10 sort-select-wrapper">
                <label for="degree-level" class="grey font-16">Sort By</label>
                <select class="select-dropdown sort-select" name="degree-level" data-minimum-results-for-search="Infinity" data-placeholder="Featured">
                        <option></option>
                        <option value="01">Option 1</option>
                        <option value="02">Option 2</option>
                         <option value="03">Option 3</option>
                        <option value="04">Option 4</option>
                        <option value="05">Option 5</option>
                </select>
            </div>
        </div>
        <hr>
        <div class="search-grid g-gap-30 mt-50">
            <div class="left-div">
                <div class="flex space-between align-center">
                    <h4>Filters</h4>
                    <div id="reset-btn" class="flex gap-10 align-center">
                        <img src="assets/images/refresh.svg" alt="" class="icon">
                        <span class="primary fw-600">Reset</span>
                    </div>
                </div>
                <hr>
                <div class="mt-20">
                    <h4 class="filter-title">Countries </h4>
                    <div class="acc-check">
                        <div class="check-title acc-click">Australia</div>
                        <div class="check-content acc-content">
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="a1" name="city" value="a1">
                                <label for="a1">Sydney</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="Brisbane" name="city" value="Brisbane">
                                <label for="Brisbane">Brisbane</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="Melbourne" name="city" value="Melbourne">
                                <label for="Melbourne">Melbourne</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="Gold Coast" name="city" value="Gold Coast">
                                <label for="Gold Coast">Gold Coast</label>
                            </div>
                        </div>
                    </div>
                    <div class="acc-check">
                        <div class="check-title acc-click">USA</div>
                        <div class="check-content acc-content">
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="u1" value="u1">
                                <label for="u1">Sydney</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="u2"  value="u2">
                                <label for="u2">Brisbane</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="u3"  value="u4">
                                <label for="u3">Melbourne</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="u4" value="u4">
                                <label for="u4">Gold Coast</label>
                            </div>
                        </div>
                    </div>
                    <div class="acc-check">
                        <div class="check-title acc-click">Canada</div>
                        <div class="check-content acc-content">
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="ua1" value="ua1">
                                <label for="ua1">Sydney</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="ua2"  value="ua2">
                                <label for="ua2">Brisbane</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="ua3"  value="u4">
                                <label for="ua3">Melbourne</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="ua4" value="ua4">
                                <label for="ua4">Gold Coast</label>
                            </div>
                        </div>
                    </div>
                    <div class="acc-check">
                        <div class="check-title acc-click">India</div>
                        <div class="check-content acc-content">
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="ub1" value="ub1">
                                <label for="ub1">Sydney</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="ub2"  value="ub2">
                                <label for="ub2">Brisbane</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="ub3"  value="ub4">
                                <label for="ub3">Melbourne</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="ub4" value="ub4">
                                <label for="ub4">Gold Coast</label>
                            </div>
                        </div>
                    </div>
                    <div class="acc-check">
                        <div class="check-title acc-click">Denmark</div>
                        <div class="check-content acc-content">
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="uc1" value="uc1">
                                <label for="uc1">Sydney</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="uc2"  value="uc2">
                                <label for="uc2">Brisbane</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="uc3"  value="uc3">
                                <label for="uc3">Melbourne</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="uc4" value="uc4">
                                <label for="uc4">Gold Coast</label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="mt-20">
                    <h4 class="filter-title ">Categories</h4>
                    <div class="acc-check">
                        <div class="check-content">
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="Information & Technology" value="Information & Technology">
                                <label for="Information & Technology">Information & Technology</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="Law & Criminology" value="Law & Criminology">
                                <label for="Law & Criminology">Law & Criminology</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="Engineering" value="Engineering">
                                <label for="Engineering">Engineering</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="Computer Science" value="Computer Science">
                                <label for="Computer Science">Computer Science</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="Accounting" value="Accounting">
                                <label for="Accounting">Accounting</label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="mt-20">
                    <h4 class="filter-title">Degree Level</h4>
                    <div class="acc-check">
                        <div class="check-content">
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="Associate Degree" value="Associate Degree">
                                <label for="Associate Degree">Associate Degree</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="Bachelor" value="Bachelor">
                                <label for="Bachelor">Bachelor</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="Master" value="Master">
                                <label for="Master">Master</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="Diploma" value="Diploma">
                                <label for="Diploma">Diploma</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="Doctorate" value="Doctorate">
                                <label for="Doctorate">Doctorate</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="Graduate" value="Graduate">
                                <label for="Graduate">Graduate</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="Postgraduate" value="Postgraduate">
                                <label for="Postgraduate">Postgraduate</label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="mt-20">
                    <h4 class="filter-title">Duration</h4>
                    <div class="acc-check">
                        <div class="check-content">
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="3 Months" value="3 Months">
                                <label for="3 Months">3 Months</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="6 Months" value="6 Months">
                                <label for="6 Months">6 Months</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="1 Year" value="1 Year">
                                <label for="1 Year">1 Year</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="2 Year" value="2 Year">
                                <label for="2 Year">2 Year</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="3 Year" value="3 Year">
                                <label for="3 Year">3 Year</label>
                            </div>
                            <div class="checkbox-wrap flex gap-10 align-center">
                                <input type="checkbox" id="4 Year" value="4 Year">
                                <label for="4 Year">4 Year</label>
                            </div>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="mt-20">
                    <h4 class="filter-title">Fee(per year)</h4>
                    <div class="acc-check">
                        <div class="radio-wrapper">
                            <label class="radio-label">0-10000
                                <input type="radio" name="radio" checked>
                                <span class="radio-check"></span>
                            </label>
                        </div>
                        <div class="radio-wrapper">
                            <label class="radio-label">10000-20000
                                <input type="radio" name="radio">
                                <span class="radio-check"></span>
                            </label>
                        </div>
                        <div class="radio-wrapper">
                            <label class="radio-label">30000-40000
                                <input type="radio" name="radio">
                                <span class="radio-check"></span>
                            </label>
                        </div>
                        <div class="radio-wrapper">
                            <label class="radio-label">More than 40000
                                <input type="radio" name="radio">
                                <span class="radio-check"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="mt-20">
                    <h4 class="filter-title">Study Mode</h4>
                    <div class="acc-check">
                        <div class="grid-3 mt-20">
                            <div class="radio-wrapper-1">
                                <label class="radio-label-1">
                                    <input type="radio" name="major" class="radio-card-input" value="major1" checked>
                                    <div class="radio-type-2">
                                        <div class="title">On campus</div>
                                    </div>
                                </label>
                            </div>
                            <div class="radio-wrapper-1">
                                <label class="radio-label-1">
                                    <input type="radio" name="major" class="radio-card-input" value="major1">
                                    <div class="radio-type-2">
                                        <div class="title">Online</div>
                                    </div>
                                </label>
                            </div>
                            <div class="radio-wrapper-1">
                                <label class="radio-label-1">
                                    <input type="radio" name="major" class="radio-card-input" value="major1">
                                    <div class="radio-type-2">
                                        <div class="title">Both</div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="mt-20">
                    <h4 class="filter-title">STUDY MODE</h4>
                    <div class="acc-check">
                        <div class="grid-3 mt-20">
                            <div class="radio-wrapper-1">
                                <label class="radio-label-1">
                                    <input type="radio" name="mode" class="radio-card-input" value="campus" checked>
                                    <div class="radio-type-2">
                                        <div class="title">On campus</div>
                                    </div>
                                </label>
                            </div>
                            <div class="radio-wrapper-1">
                                <label class="radio-label-1">
                                    <input type="radio" name="mode" class="radio-card-input" value="online">
                                    <div class="radio-type-2">
                                        <div class="title">Online</div>
                                    </div>
                                </label>
                            </div>
                            <div class="radio-wrapper-1">
                                <label class="radio-label-1">
                                    <input type="radio" name="mode" class="radio-card-input" value="online">
                                    <div class="radio-type-2">
                                        <div class="title">Both</div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-div">
                <div class="grid-3 g-gap-20">
                    <div class="search-card">
                        <h4>Bachlore in Information Technology</h4>
                        <img src="assets/images/acu_logo_positive.png" alt="">
                        <p>Australian Catholic University</p>
                        <ul>
                            <li>Sydney, Australia</li>
                            <li>6 months</li>
                            <li>350 (Monthly)</li>
                            <li>Online</li>
                        </ul>
                        <div class="grey font-14">
                            <p>Web designers use their creative and software engineering / programming skills to design, build…</p>
                        </div>
                        <div class="grid-2 txt-center g-gap-10 mt-30">
                            <a href="single.php" title="Apply" class="btn sm-btn light-btn">Apply</a>
                            <a href="compare.php" title="Compare" class="btn sm-btn grey-btn">Compare</a>

                        </div>
                    </div>
                    <div class="search-card">
                        <h4>Bachelor of Business Administration</h4>
                        <img src="assets/images/NoPath - Copy (7).png" alt="">
                        <p>CQ University</p>
                        <ul>
                            <li>Sydney, Australia</li>
                            <li>6 months</li>
                            <li>350 (Monthly)</li>
                            <li>Online</li>
                        </ul>
                        <div class="grey font-14">
                            <p>Web designers use their creative and software engineering / programming skills to design, build…</p>
                        </div>
                        <div class="grid-2 txt-center g-gap-10 mt-30">
                            <a href="single.php" title="Apply" class="btn sm-btn light-btn">Apply</a>
                            <a href="compare.php" title="Compare" class="btn sm-btn grey-btn">Compare</a>

                        </div>
                    </div>
                    <div class="search-card">
                        <h4>Bachelor of Commerce (Indigenous cohorts)</h4>
                        <img src="assets/images/Zq458tYk42F3j3SFB9CaT9hNK.png" alt="">
                        <p>Tafe NSW</p>
                        <ul>
                            <li>Sydney, Australia</li>
                            <li>6 months</li>
                            <li>350 (Monthly)</li>
                            <li>Online</li>
                        </ul>
                        <div class="grey font-14">
                            <p>Web designers use their creative and software engineering / programming skills to design, build…</p>
                        </div>
                        <div class="grid-2 txt-center g-gap-10 mt-30">
                            <a href="single.php" title="Apply" class="btn sm-btn light-btn">Apply</a>
                            <a href="compare.php" title="Compare" class="btn sm-btn grey-btn">Compare</a>

                        </div>
                    </div>
                    <div class="search-card">
                        <h4>Bachlore in Information Technology</h4>
                        <img src="assets/images/acu_logo_positive.png" alt="">
                        <p>Australian Catholic University</p>
                        <ul>
                            <li>Sydney, Australia</li>
                            <li>6 months</li>
                            <li>350 (Monthly)</li>
                            <li>Online</li>
                        </ul>
                        <div class="grey font-14">
                            <p>Web designers use their creative and software engineering / programming skills to design, build…</p>
                        </div>
                        <div class="grid-2 txt-center g-gap-10 mt-30">
                            <a href="single.php" title="Apply" class="btn sm-btn light-btn">Apply</a>
                            <a href="compare.php" title="Compare" class="btn sm-btn grey-btn">Compare</a>

                        </div>
                    </div>
                    <div class="search-card">
                        <h4>Bachelor of Business Administration</h4>
                        <img src="assets/images/NoPath - Copy (7).png" alt="">
                        <p>CQ University</p>
                        <ul>
                            <li>Sydney, Australia</li>
                            <li>6 months</li>
                            <li>350 (Monthly)</li>
                            <li>Online</li>
                        </ul>
                        <div class="grey font-14">
                            <p>Web designers use their creative and software engineering / programming skills to design, build…</p>
                        </div>
                        <div class="grid-2 txt-center g-gap-10 mt-30">
                            <a href="single.php" title="Apply" class="btn sm-btn light-btn">Apply</a>
                            <a href="compare.php" title="Compare" class="btn sm-btn grey-btn">Compare</a>

                        </div>
                    </div>
                    <div class="search-card">
                        <h4>Bachelor of Commerce (Indigenous cohorts)</h4>
                        <img src="assets/images/Zq458tYk42F3j3SFB9CaT9hNK.png" alt="">
                        <p>Tafe NSW</p>
                        <ul>
                            <li>Sydney, Australia</li>
                            <li>6 months</li>
                            <li>350 (Monthly)</li>
                            <li>Online</li>
                        </ul>
                        <div class="grey font-14">
                            <p>Web designers use their creative and software engineering / programming skills to design, build…</p>
                        </div>
                        <div class="grid-2 txt-center g-gap-10 mt-30">
                            <a href="single.php" title="Apply" class="btn sm-btn light-btn">Apply</a>
                            <a href="compare.php" title="Compare" class="btn sm-btn grey-btn">Compare</a>

                        </div>
                    </div>
                    <div class="search-card">
                        <h4>Bachlore in Information Technology</h4>
                        <img src="assets/images/acu_logo_positive.png" alt="">
                        <p>Australian Catholic University</p>
                        <ul>
                            <li>Sydney, Australia</li>
                            <li>6 months</li>
                            <li>350 (Monthly)</li>
                            <li>Online</li>
                        </ul>
                        <div class="grey font-14">
                            <p>Web designers use their creative and software engineering / programming skills to design, build…</p>
                        </div>
                        <div class="grid-2 txt-center g-gap-10 mt-30">
                            <a href="single.php" title="Apply" class="btn sm-btn light-btn">Apply</a>
                            <a href="compare.php" title="Compare" class="btn sm-btn grey-btn">Compare</a>

                        </div>
                    </div>
                    <div class="search-card">
                        <h4>Bachelor of Business Administration</h4>
                        <img src="assets/images/NoPath - Copy (7).png" alt="">
                        <p>CQ University</p>
                        <ul>
                            <li>Sydney, Australia</li>
                            <li>6 months</li>
                            <li>350 (Monthly)</li>
                            <li>Online</li>
                        </ul>
                        <div class="grey font-14">
                            <p>Web designers use their creative and software engineering / programming skills to design, build…</p>
                        </div>
                        <div class="grid-2 txt-center g-gap-10 mt-30">
                            <a href="single.php" title="Apply" class="btn sm-btn light-btn">Apply</a>
                            <a href="compare.php" title="Compare" class="btn sm-btn grey-btn">Compare</a>

                        </div>
                    </div>
                    <div class="search-card">
                        <h4>Bachelor of Commerce (Indigenous cohorts)</h4>
                        <img src="assets/images/Zq458tYk42F3j3SFB9CaT9hNK.png" alt="">
                        <p>Tafe NSW</p>
                        <ul>
                            <li>Sydney, Australia</li>
                            <li>6 months</li>
                            <li>350 (Monthly)</li>
                            <li>Online</li>
                        </ul>
                        <div class="grey font-14">
                            <p>Web designers use their creative and software engineering / programming skills to design, build…</p>
                        </div>
                        <div class="grid-2 txt-center g-gap-10 mt-30">
                            <a href="single.php" title="Apply" class="btn sm-btn light-btn">Apply</a>
                            <a href="compare.php" title="Compare" class="btn sm-btn grey-btn">Compare</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<!-- FOOTER -->
<?php include('footer.php'); ?>