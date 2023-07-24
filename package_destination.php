<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TRIPOHOLIDAYS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/TP-01.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="./css/custom.css">
</head>

<body>



    <?php
    include './comp/top_bar.php';
    include './comp/nav.php';



    ?>




    <div class="container-fluid">
        <div class="row">
            <div class="list_image">
                <img src="https://www.hampitrip.com/public/img/Frontend/img/rajastan_img.jpg" class="img-fluid" alt="">
                <div class="opacity_banner"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2>Bengaluru Tour Packages</h2>
                <article id="rmjs-1" class="read-more-fade" style="max-height: none;">
                    <p>Bengaluru is the capital city of Karnataka, is famaous for Gardens, software companies, lakes,
                        temples and&nbsp; historical places maily&nbsp;<span
                            style="font-family: Calibri, sans-serif; font-size: 11pt;">Lalbagh, Vidhana Soudha, Museum,
                            Cubbon Park,
                            ISKON Temple</span></p>
                </article>

            </div>
            <div class="col-lg-3 col-md-12">
                <div class="custom-search-input-2 inner-2">
                    <form id="searchrform" action="" method="get">
                        <div class="form-group">
                            <input class="form-control search-query ui-autocomplete-input" name="term" type="text"
                                placeholder="Type Destination" autocomplete="off">

                            <i class="icon_search"></i>

                        </div>
                        <input type="submit" class="btn_search" value="Search">
                    </form>
                </div>
                <div class="filterpanel" id="filters_col">
                    <h5><span aria-hidden="true" class="icon_adjust-horiz"></span> Refine Search</h5>
                    <button type="button" class="link button clear_filter">CLEAR</button>
                    <input id="mslug" type="hidden" value="bengaluru">
                    <div class="applied_filter">
                        <ul>

                        </ul>
                    </div>
                    <!-- /custom-search-input-2 -->

                    <div class="filter_type budge_filter">
                        <h6>Budget Per Person</h6>
                        <span class="irs js-irs-0"><span class="irs"><span class="irs-line" tabindex="-1"><span
                                        class="irs-line-left"></span><span class="irs-line-mid"></span><span
                                        class="irs-line-right"></span></span><span class="irs-min"
                                    style="display: none; visibility: hidden;">0</span><span class="irs-max"
                                    style="display: none; visibility: visible;">1</span><span class="irs-from"
                                    style="visibility: hidden; left: -3.94381%;">INR. 0</span><span class="irs-to"
                                    style="visibility: hidden; left: -3.94381%;">INR. 0</span><span class="irs-single"
                                    style="visibility: hidden; left: -11.2954%;">INR. 0 — INR. 0</span></span><span
                                class="irs-grid"></span><span class="irs-bar"
                                style="left: 3.01602%; width: 0%;"></span><span class="irs-shadow shadow-from"
                                style="display: none;"></span><span class="irs-shadow shadow-to"
                                style="display: none;"></span><span class="irs-slider from"
                                style="left: 0%;"></span><span class="irs-slider to"
                                style="left: 0%;"></span></span><input type="text" id="budgetrange" name="budgetrange"
                            value="" class="irs-hidden-input" readonly="">
                    </div>
                    <div class="filter_type duration_filter">
                        <h6>Duration</h6>
                        <span class="irs js-irs-1"><span class="irs"><span class="irs-line" tabindex="-1"><span
                                        class="irs-line-left"></span><span class="irs-line-mid"></span><span
                                        class="irs-line-right"></span></span><span class="irs-min"
                                    style="display: none; visibility: hidden;">0</span><span class="irs-max"
                                    style="display: none; visibility: visible;">1</span><span class="irs-from"
                                    style="visibility: hidden; left: -1.75248%;">N 0</span><span class="irs-to"
                                    style="visibility: hidden; left: -1.75248%;">N 0</span><span class="irs-single"
                                    style="visibility: hidden; left: -6.90975%;">N 0 — N 0</span></span><span
                                class="irs-grid"></span><span class="irs-bar"
                                style="left: 3.01602%; width: 0%;"></span><span class="irs-shadow shadow-from"
                                style="display: none;"></span><span class="irs-shadow shadow-to"
                                style="display: none;"></span><span class="irs-slider from"
                                style="left: 0%;"></span><span class="irs-slider to"
                                style="left: 0%;"></span></span><input type="text" id="durationrange"
                            name="durationrange" value="" class="irs-hidden-input" readonly="">
                    </div>
                    <div class="filter_type themes_filter">
                        <h6>Themes</h6>
                        <div class="custom-search-input-2 inner-2">
                            <div class="form-group">
                                <input class="form-control" id="myInput" type="text" onkeyup="myFunction()"
                                    placeholder="Search For More">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                        <ul id="myUL">

                            <li>
                                <label>
                                    <input dataname="Nature" value="1" name="themes" type="checkbox"
                                        class="icheck myListicheck">Nature <small>(9)</small>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input dataname="Summer" value="2" name="themes" type="checkbox"
                                        class="icheck myListicheck">Summer <small>(5)</small>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input dataname="Families" value="7" name="themes" type="checkbox"
                                        class="icheck myListicheck">Families <small>(16)</small>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input dataname="Luxury" value="8" name="themes" type="checkbox"
                                        class="icheck myListicheck">Luxury <small>(1)</small>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input dataname="Group" value="10" name="themes" type="checkbox"
                                        class="icheck myListicheck">Group <small>(6)</small>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input dataname="Bus" value="14" name="themes" type="checkbox"
                                        class="icheck myListicheck">Bus <small>(2)</small>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input dataname="Family" value="16" name="themes" type="checkbox"
                                        class="icheck myListicheck">Family <small>(7)</small>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input dataname="Hill Station" value="17" name="themes" type="checkbox"
                                        class="icheck myListicheck">Hill Station <small>(4)</small>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input dataname="Winter" value="18" name="themes" type="checkbox"
                                        class="icheck myListicheck">Winter <small>(1)</small>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input dataname="Budget" value="19" name="themes" type="checkbox"
                                        class="icheck myListicheck">Budget <small>(2)</small>
                                </label>
                            </li>

                            <li>
                                <label>
                                    <input dataname="Pilgrimage" value="21" name="themes" type="checkbox"
                                        class="icheck myListicheck">Pilgrimage <small>(1)</small>
                                </label>
                            </li>

                        </ul>
                        <a href="javascript:;" id="loadMore">View more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="row">
                    <div class="col-lg-8">
                        <h2>Bengaluru Tour Packages</h2>
                    </div>
                    <div class="col-lg-4" style="padding-top:20px; text-align:right;">
                        <div class="row">
                        </div>
                    </div>
                </div>
                <!--<div id="mloader" style="position: fixed;left: 45%;padding: 20px;top: 40%;opacity: 0.5;border: 1px solid rgb(102, 102, 102);z-index: 100;background-color: rgb(255, 255, 255);display: none;"><img src="https://www.hampitrip.com/public/img/loader.gif" alt="Loading"></div>-->
                <div id="ajaxResultContainer">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tourpack-pagtbox">
                                <div class="row">
                                    <!--<div class="col-lg-4 col-md-4 col-sm-12 pagtextbx pagt-tetbx">Showing : 1-20 out of 62</div>                        
                                        <div class="col-lg-5 col-md-5 col-sm-12 pagtwrap">
                                            <ul class="pagination">
                                                <li class="disabled"><a href="#">Prev</a></li>
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#" onclick="showPage(1); return false;">2</a></li>
                                                <li><a href="#" onclick="showPage(2); return false;">3</a></li>
                                                <li><a href="#" onclick="showPage(3); return false;">4</a></li>
                                                <li><a href="#" onclick="showPage(1); return false;">Next</a></li>
                                            </ul>                           
                                        </div>                        
                                        <div class="col-lg-3 col-md-3 col-sm-12 pagtboxsel sorting-box">
                                            <div class="custom-select selct-bg">
                                                <select class="form-control" name="sortBy" id="SortBy">
                                                    <option value="order_id asc" selected="selected">Sort by</option>
                                                    <option value="days asc">Duration Short</option>
                                                    <option value="days desc">Duration Long</option>
                                                    <option value="price_inr asc">Price Lowest First</option>
                                                    <option value="price_inr desc">Price Highest First</option>
                                                </select>
                                            </div>
                                        </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row pkgwrapper">
                                <div class="col-sm-3 pkgimg-box">
                                    <a href="https://www.hampitrip.com/destinations/bengaluru/15-bengaluru-mysuru-ooty-coonoor-4-night-5-days-by-car"
                                        class="pkg-imgbx">
                                        <img data-original="https://crm.travelsdata.com/public/img/media_gallery/mysore park 02_Eh32TEcL65.jpg"
                                            width="250" class="img-fluid lazy" alt="" title=""
                                            src="https://crm.travelsdata.com/public/img/media_gallery/mantralayam_brTXtGT6az.jpg"
                                            style="display: block;">
                                    </a>
                                </div>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-sm-9 pkgtext-box">
                                            <span>4 Nights / 5 Days</span>
                                            <span class="code_span">Tour Code: <strong>BMO - 4N 5D</strong></span>
                                            <a
                                                href="single_package.php">15)
                                                Bengaluru - Mysuru – Ooty – Coonoor - 4 Night / 5 Days: by car</a>
                                            <p>1N Bengaluru + 1N Mysuru + 2N Ooty</p>
                                            <i>Top Inclusion</i>
                                            <ul>
                                                <li>
                                                    <img width="20" height="20"
                                                        src="https://crm.travelsdata.com/public/img/topinclusion_img/hotelsNew_NnWt9MpwPr_gADqFJcxmV.png">
                                                    Hotels
                                                </li>
                                                <li>
                                                    <img width="20" height="20"
                                                        src="https://crm.travelsdata.com/public/img/topinclusion_img/sightseeing_swvwrkqiB3.png">
                                                    Sightseeing
                                                </li>
                                                <li>
                                                    <img width="20" height="20"
                                                        src="https://crm.travelsdata.com/public/img/topinclusion_img/transport_f5kxfTgkeo.png">
                                                    Transport
                                                </li>

                                            </ul>
                                            <div class="pack_category">
                                                <ul>
                                                    <li>Honeymoon</li>
                                                    <li>Family</li>
                                                    <li>Adventure</li>
                                                    <li>Popular</li>
                                                    <li>Honeymoon</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 txt-cntr">
                                            <span>

                                                <div class="pkg-pricebx" style="font-size: 15px;">
                                                    <p class="appendBottom10"><span
                                                            class="font12 redText appendRight5">Save <i
                                                                class="fa fa-inr"></i> 800</span><span
                                                            class="holidaySprite discountTag"></span><span
                                                            class="discount_box font11 latoBold whiteText">4.26%</span>
                                                    </p>
                                                    <strike><strong style="color:#aba5a5"><i class="fa fa-inr"></i>
                                                            18800</strong></strike>
                                                </div>
                                                <div class="pkg-pricebx" style="font-size: 15px;">
                                                    <strong><i class="fa fa-inr"></i> 18000</strong>
                                                </div>
                                            </span>
                                            <a href="single_package.php"
                                                class="pkglinks-view text-center">View Details</a>
                                            <a href="javascript:;" datapacid="86" data-toggle="modal"
                                                data-target="#inquirymodal" onclick=""
                                                class="pkglinks-enquire text-center myqueryli">Enquire Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--<nav aria-label="..." class="custom_pagination">
                            <ul class="pagination pagination-sm">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>-->
                    <!-- /pagination -->
                </div>
            </div>
        </div>
    </div>








































    <!-- Feature End -->

    <?php
    include './comp/Footer.php';

    ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>