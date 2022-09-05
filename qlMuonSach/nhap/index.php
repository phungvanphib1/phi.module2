<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Admin-Pro lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Admin-Pro lite design, Admin-Pro lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Admin-Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin-Pro Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminpro-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="//bizweb.dktcdn.net/100/318/614/themes/667160/assets/favicon.png?1655706741253">
    <!-- Bootstrap Core CSS -->
    <link href="./assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="./assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="./assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="./assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="css/pages/dashboard.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin Pro</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php
        include "./layout/header.php"
        ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
        include "./layout/sidebar.php"
        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="https://www.facebook.com/phi6623/" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down">Customer consulting</a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Sales overview chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h3 class="card-title mb-1"><span class="lstick"></span>Top Trending</h3>
                                    </div>
                                    <div class="ms-auto">
                                        <select class="form-select b-0">
                                            <option selected="">month 8</option>
                                            <option value="1">month 7</option>
                                            <option value="2">month 6</option>
                                            <option value="3">month 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <img data-sizes="auto" src="https://scontent.fdad3-5.fna.fbcdn.net/v/t39.30808-6/291101132_3129160294005235_4143175845927121155_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=a26aad&_nc_ohc=MBwQK0grHvYAX8EZrm4&_nc_ht=scontent.fdad3-5.fna&oh=00_AT-yXh_vxFcHyXV1V_WUlDebC4I74G85u_6tIUweoHcy-Q&oe=630D1191" style="height:360px;">
                                    <img data-sizes="auto" src="https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-6/292718273_3136725343248730_1690193172864690509_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=a26aad&_nc_ohc=S1d7TohYMBUAX9WkmBB&_nc_ht=scontent.fdad3-4.fna&oh=00_AT_9TO278SwBB8WPlFJxl78bY4bb7ruBHsY_Zh4JuM6ozA&oe=630C1DE5" style="height:360px;">
                                    <img data-sizes="auto" src="https://scontent.fdad3-3.fna.fbcdn.net/v/t39.30808-6/292671723_3134217416832856_5835353647282757655_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=a26aad&_nc_ohc=QCDkmdzTfoQAX-9rrWo&_nc_ht=scontent.fdad3-3.fna&oh=00_AT-NnuFtjngjol3LIBYBvzvJp0fwzzqiKbyid9VspkfUlw&oe=630DCA10" style="height:360px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- visit charts-->
                    <!-- ============================================================== -->
                    <div class="col-lg-3 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><span class="lstick"></span>Visit Separation</h4>
                                <div>
                                    <img data-sizes="auto" src="https://img.cdn.vncdn.io/nvn/ncdn/store/7136/bn/Tha__ng_5_Banner_do__i__Nam_.jpg" width="45%">
                                    <img data-sizes="auto" src="https://img.cdn.vncdn.io/nvn/ncdn/store/7136/bn/Tha__ng_5_Banner_do__i__Nu_____.jpg" width="45%">
                                </div>
                                <table class="table vm font-14">
                                    <tr>
                                        <td class="b-0">Boy</td>
                                        <td class="text-end font-medium b-0">38.5%</td>
                                    </tr>
                                    <tr>
                                        <td>Girl</td>
                                        <td class="text-end font-medium">30.8%</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Projects of the month -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h4 class="card-title"><span class="lstick"></span>Potential products</h4>
                                    </div>
                                </div>
                                <div class="table-responsive mt-3">
                                    <table class="table vm no-th-brd no-wrap pro-of-month">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Shows</th>
                                                <th colspan="2">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Now bow swa</td>
                                                <td style="width: 100px;"><span><img src="https://bizweb.dktcdn.net/100/318/614/products/img-9175-compressed-1.jpg?v=1657779268323" alt="user" width="100%"></span></td>
                                                <td>100.000đ</td>
                                            </tr>
                                            <tr>
                                            <tr>
                                                <td>
                                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td style="width: 100px;"><span><img src="https://bizweb.dktcdn.net/100/318/614/products/img-9175-compressed-1.jpg?v=1657779268323" alt="user" width="100%"></span></td>
                                                <td>100.000đ</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td style="width: 100px;"><span><img src="https://bizweb.dktcdn.net/100/318/614/products/img-9175-compressed-1.jpg?v=1657779268323" alt="user" width="100%"></span></td>
                                                <td>100.000đ</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small>
                                                </td>
                                                <td>Elite Admin</td>
                                                <td style="width: 100px;"><span><img src="https://bizweb.dktcdn.net/100/318/614/products/img-9175-compressed-1.jpg?v=1657779268323" alt="user" width="100%"></span></td>
                                                <td>100.000đ</td>
                                            </tr>
                                            <td>
                                                <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small>
                                            </td>
                                            <td>Elite Admin</td>
                                            <td style="width: 100px;"><span><img src="https://bizweb.dktcdn.net/100/318/614/products/img-9175-compressed-1.jpg?v=1657779268323" alt="user" width="100%"></span></td>
                                            <td>100.000đ</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- contact -->
                    <div class="col-lg-3 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h4 class="card-title"><span class="lstick"></span>System staff</h4>
                                </div>
                                <div class="message-box contact-box">
                                    <div class="message-widget contact-widget">
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-6/264612478_2046523855486807_6345718100588143242_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=4v3bGDMwqJgAX-VEb3Z&_nc_ht=scontent.fdad3-4.fna&oh=00_AT9xaSzq8wWafN1THhQML3QJMJZ6KBY2lErvcxhQlVaU2w&oe=630DFF22" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>ThaoPhan</h5> <span class="mail-desc">phanthao@gmail.com</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-6/300956838_2695330577269533_5743395904903920628_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=BW0XHnzIE-gAX-lYF1u&_nc_ht=scontent.fdad3-4.fna&oh=00_AT_UUOIXONhf1ZeMWNG_b1X9f8a3n5JoWRpbWY1Azbj6dQ&oe=630DD014" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>ThaoTam</h5> <span class="mail-desc">tamemily@gmail.com</span>
                                            </div>
                                        </a>

                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="https://scontent.fdad3-3.fna.fbcdn.net/v/t39.30808-6/278921584_1121423975255347_7532325646630270754_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=MpCUZ2Ut14AAX-MGQf9&tn=O9azl7DWb3KDGET2&_nc_ht=scontent.fdad3-3.fna&oh=00_AT_QxKbNYMUqq7utUcJVqlhuqb1vsjewFCTJX9Z6S4ey0g&oe=630E2596" alt="user" class="img-circle"> <span class="profile-status busy pull-right"> </div>
                                            <div class="mail-contnet">
                                                <h5>HongTham</h5> <span class="mail-desc">hongtham11@gmail.com</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="https://scontent.fdad3-3.fna.fbcdn.net/v/t1.15752-9/295970183_395994382698579_8716309410661086930_n.png?_nc_cat=109&ccb=1-7&_nc_sid=ae9488&_nc_ohc=QgVwJeavI_wAX_bsPpP&_nc_ht=scontent.fdad3-3.fna&oh=03_AVIo01TAR75Wf8h0zGRda3NkIi_ab79KOs2BIMXDsvdkIw&oe=632EC786" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>XuanCuong</h5> <span class="mail-desc">xuancuongngu123@gmail.com</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="https://scontent.fdad3-5.fna.fbcdn.net/v/t39.30808-6/291641662_1100369590552313_7973838925688217274_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=LFOctTkk8O4AX9oAaJ-&_nc_ht=scontent.fdad3-5.fna&oh=00_AT-IGKfqSbd34rDm0Qp6D_Pv3Q2VeSRTKE0O61ovhupcBQ&oe=630DF730" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>NgocLinh</h5> <span class="mail-desc">linhyeutam1thang@gmail.com</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="https://scontent.fdad3-1.fna.fbcdn.net/v/t39.30808-6/279565744_4822854384510120_7936292999801158760_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=0wRPKpU8h8gAX_7H-4Z&_nc_ht=scontent.fdad3-1.fna&oh=00_AT-4a3c2xi-8iskCgLULLWLIPCFzUU_mcs9ErS1N0HXDwg&oe=630E0A76" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>PhongTam</h5> <span class="mail-desc">phongtam91@gmail.com</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="https://scontent.fdad3-4.fna.fbcdn.net/v/t1.15752-9/300103438_482735870335389_6707314971328044357_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=ae9488&_nc_ohc=FWqFQfI10-gAX_Mqd71&_nc_ht=scontent.fdad3-4.fna&oh=03_AVLeCC_zXXMTmk_uRVr2E3DJc-xaRCHeO7vivOH1nnuZMg&oe=632E30BF" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>NguyenThuan</h5> <span class="mail-desc">thuandao123@gmail.com</span>
                                            </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="https://scontent.fdad3-4.fna.fbcdn.net/v/t1.15752-9/300176649_1238491636969179_2117547492472619682_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=ae9488&_nc_ohc=gdA98u2eTIgAX-uPO78&_nc_ht=scontent.fdad3-4.fna&oh=03_AVKVkJ2R4CTVBaYQAghkyUkf8t9ASXzP7trFA2nc8KGx9A&oe=632D2C7E" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>VietNguyen</h5> <span class="mail-desc">vietdao_benhtri@gmail.com</span>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Blog and website visit -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-4 col-xlg-3">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="https://scontent.fdad3-3.fna.fbcdn.net/v/t1.15752-9/299306551_456992786319858_8445221574726630222_n.png?_nc_cat=109&ccb=1-7&_nc_sid=ae9488&_nc_ohc=1gOulWSNAtUAX_9o6fE&_nc_ht=scontent.fdad3-3.fna&oh=03_AVKq36MVm9PiShTtzCX7gQUSSoUNrXYiSBmnPcbpRnq3jw&oe=632DD258" style="width: 50%">
                            <div class="card-body">
                                <h3 class="font-normal">Work hard in silence and keep success to yourself</h3>
                                <span class="label label-info label-rounded">Technology</span>
                                <p class="mb-0 mt-3 font-14">When you do well, you may want to show off your desire to tell people about your successes and accomplishments.
                                    But in the long run, you can understand, buying expensive things won't make you happy, just as telling people around you about your success only makes them think you're arrogant, even making money. more competition.
                                    It is important to pay attention to your activities because after all, you do not expect to have too many competitors with you.</p>
                                <div class="d-flex mt-2">
                                    <button class="btn p-l-0 btn-link text-decoration-none"><a href="https://letrongdai.vn/triet-ly-kinh-doanh/">remove</a></button>
                                    <div class="ms-auto align-self-center">
                                        <a href="javascript:void(0)" class="link me-2"><i class="fa fa-heart-o"></i></a>
                                        <a href="javascript:void(0)" class="link me-2"><i class="fa fa-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xlg-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h4 class="card-title"><span class="lstick"></span>Website Visit</h4>
                                    <ul class="list-inline mb-0 ms-auto">
                                        <li>
                                            <h6 class="text-muted text-success"><i class="fa fa-circle font-10 me-2 "></i>Site A view</h6>
                                        </li>
                                        <li>
                                            <h6 class="text-muted text-info"><i class="fa fa-circle font-10 me-2"></i>Site B view</h6>
                                        </li>
                                    </ul>
                                </div>
                                <div class="website-visitor p-relative mt-4" style="width:100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php
            include "./layout/footer.php"
            ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="./assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="./assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="./assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="./assets/plugins/d3/d3.min.js"></script>
    <script src="./assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard.js"></script>
</body>

</html>