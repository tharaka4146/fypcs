<?php

include 'config.php';

$from_id = "student";
$to_id = "supervisor"

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .vl {
            border-left: 1px solid rgba(0, 0, 0, 0.164);
        }

        a.fill-div {
            display: block;
            height: 100%;
            width: 100%;
            text-decoration: none;
            border-style: groove;
            border-width: 1px;
            border-left-width: 0px;
            border-right-width: 0px;
            border-top-width: 0px;
            border-color: rgba(146, 146, 146, 0.178);
        }

        .fill-div:hover {
            background-color: rgb(223, 223, 223);
            color: rgba(87, 87, 87, 0.767);

        }

        * {
            transition: 0.5s;
        }

        a {
            color: rgba(87, 87, 87, 0.767);
        }

        html {
            scroll-behavior: smooth;
        }

        .dialog {
            padding: 6px 20px 6px 20px;
            color: white;
            max-width: 80%;
            /*box-shadow: 4px 4px 10px -1px rgba(0, 0, 0, 0.75);*/
        }

        .float-left {
            border-radius: 20px 20px 20px 0px;
            background-color: #cdd1d156;
            color: #5A6363;
        }

        .float-right {
            border-radius: 20px 20px 0px 20px;
            /*background: -webkit-linear-gradient(#6BA5F2, #0540F2);*/
            background-color: #1374F2;

        }


        .time-left {
            color: #B5BABA;
            font-size: 10px;
            text-align: end;
        }

        .time-right {
            color: #B9DADA;
            font-size: 10px;
            text-align: end;
        }

        .type {
            position: fixed;
            bottom: 10px;
        }

        .submit {
            position: fixed;
            bottom: 23px;
            margin-left: 66%;
            opacity: 0.9;
        }

        .down {
            position: fixed;
            bottom: 23px;
            margin-left: 71%;
            opacity: 0.9;
        }

        #note {
            width: 100%;
            max-width: 100%;
            padding: 15px;
            border-radius: 10px;
            border: 0px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /*background: -webkit-linear-gradient(#F9EFAF, #F7E98D);*/
            opacity: 0.9;
            resize: none;
            outline: none;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .txta {
            min-height: 54px;
            max-height: 100px;
            background-color: #F2F2F2;
        }
    </style>

    <script type="text/javascript">
        function moveWin() {
            window.scroll(0, 10000);
            //setTimeout('moveWin();', 1000);
        }
    </script>


</head>

<body id="page-top" onLoad="moveWin();">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item active" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Messaging</h1>

                    <div class="row">

                        <!--names-->
                        <div class="col-lg-3 vl" style="position: sticky;top: 0;">

                            <div id="my-div">
                            </div>
                            <div class="row">

                                <div class="">
                                    <div class="">
                                        <div class="">

                                            <br>

                                            <a href="#" class="fill-div">
                                                <div class="" style="padding: 20px;">
                                                    <div class="">
                                                        <div class="">
                                                            <div class="">
                                                                <h5>John Doe</h5>
                                                            </div>
                                                        </div>
                                                        <span class="">Lorem ipsum dolor sit amet,
                                                            consectetur adipisicing elit, sed do eiusmod</span>
                                                    </div>
                                                </div>
                                            </a>


                                            <a href="#" class="fill-div">
                                                <div class="" style="padding: 20px;">
                                                    <div class="">
                                                        <div class="">
                                                            <div class="">
                                                                <h5>John Doe</h5>
                                                            </div>
                                                        </div>
                                                        <span class="">Lorem ipsum dolor sit amet,
                                                            consectetur adipisicing elit, sed do eiusmod</span>
                                                    </div>
                                                </div>
                                            </a>


                                            <a href="#" class="fill-div">
                                                <div class="" style="padding: 20px;">
                                                    <div class="">
                                                        <div class="">
                                                            <div class="">
                                                                <h5>John Doe</h5>
                                                            </div>
                                                        </div>
                                                        <span class="">Lorem ipsum dolor sit amet,
                                                            consectetur adipisicing elit, sed do eiusmod</span>
                                                    </div>
                                                </div>
                                            </a>


                                            <a href="#" class="fill-div">
                                                <div class="" style="padding: 20px;">
                                                    <div class="">
                                                        <div class="">
                                                            <div class="">
                                                                <h5>John Doe</h5>
                                                            </div>
                                                        </div>
                                                        <span class="">Lorem ipsum dolor sit amet,
                                                            consectetur adipisicing elit, sed do eiusmod</span>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <!--messages-->
                        <div class="col-lg-9 vl" style="padding-left: 50px;padding-right: 50px; padding-top: 20px;">

                            <div class="">
                                <div class="">

                                    <div class="email-content-wrapper">
                                        <div class="peers ai-c jc-sb pX-40 pY-30">
                                            <div class="peers peer-greed">
                                                <div class="peer">
                                                    <h5 class="c-grey-900 mB-5">John Doe</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="bdT pX-40 pY-30">
                                            <div class="container">

                                                <br>
                                                <br>


                                                <?php
                                                //$sql = "SELECT count(message) as count FROM chat WHERE from_id ='.$from_id.' and to_id = '.$to_id.' or from_id ='.$to_id.' and to_id = '.$from_id.'";
                                                $sql = "SELECT count(message) as count FROM chat WHERE from_id ='" . $from_id . "' and to_id = '" . $to_id . "' or from_id ='" . $to_id . "' and to_id = '" . $from_id . "'";
                                                $result = $con->query($sql);

                                                if ($result->num_rows > 0) {

                                                    if ($row = $result->fetch_assoc()) {
                                                        $count = $row["count"];
                                                    }
                                                } else {
                                                    echo "0 results";
                                                    echo "<br>";
                                                }

                                                for ($i = 0; $i < $count; $i++) {

                                                    $i1 = $i + 1;

                                                    $sql = "SELECT * FROM chat WHERE from_id ='" . $from_id . "' and to_id = '" . $to_id . "' or from_id ='" . $to_id . "' and to_id = '" . $from_id . "' order by time limit $i1 OFFSET $i";
                                                    $result = $con->query($sql);

                                                    if ($result->num_rows > 0) {

                                                        if ($row = $result->fetch_assoc()) {
                                                            $message = $row["message"];
                                                            $from_id = $row["from_id"];
                                                            $to_id = $row["to_id"];
                                                            $time = $row["time"];

                                                            $dt = new DateTime($time);
                                                            $date = $dt->format('d-m-Y');
                                                            $time = $dt->format('h:i A');
                                                        }
                                                    } else {
                                                        echo "<br>";

                                                        echo "0 results";
                                                        echo "<br>";
                                                    }
                                                    # code...

                                                    if ($from_id == "student") {

                                                ?>
                                                        <div class="row">



                                                            <div class="col-lg-12">
                                                                <div class="float-left dialog">
                                                                    <?php echo $message ?>
                                                                    <div class="time-left">
                                                                        <?php echo $time ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <br>

                                                    <?php } else { ?>
                                                        <div class="row">

                                                            <div class="col-lg-12">
                                                                <div class="float-right dialog">
                                                                    <?php echo $message ?>
                                                                    <div class="time-right">
                                                                        <?php echo $time ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <br>


                                                <?php }
                                                } ?>

                                                <br>
                                                <br>
                                                <br>

                                                <form method="POST" action="chatDatabase.php">

                                                    <div class="row" id="bottom">

                                                        <div class="col-lg-8 type">
                                                            <textarea class="txta" rows="1" id="note" name="note" placeholder="Text Message"></textarea>

                                                            <input type="text" id="dateTime" name="dateTime" value="<?php
                                                                                                                    date_default_timezone_set('Asia/Colombo');
                                                                                                                    echo date('Y-m-d H:i:s'); ?>" hidden>
                                                            <input type="text" id="from_id" name="from_id" value="<?php echo $from_id ?>" hidden>
                                                            <input type="text" id="to_id" name="to_id" value="<?php echo $to_id ?>" hidden>

                                                        </div>
                                                        <div class="col-lg-4 submit">
                                                            <input type="submit" type="button" class="btn btn-primary" value="send">
                                                        </div>


                                                    </div>

                                                </form>
                                                <input type="submit" type="button" class="btn btn-primary down" value="go down" onclick="moveWin();">

                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>