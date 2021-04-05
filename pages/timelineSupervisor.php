<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Timeline</title>
    <link rel="stylesheet" type="text/css" href="../css/timeline-component.css" />
    <link href="../css/timeline-style.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="homeCoordinator.php">
                <div class="sidebar-brand-icon rotate-n-0">
                    <i>
                        <img style = "width:100%;" src="../img/logo 16.png" />
                    </i>
                </div>
                <div class="sidebar-brand-text mx-3">arc-hive<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="homeCoordinator.php">
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
                <a class="nav-link" href="viewFormsSupervisor.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Submissions</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="assign%20supervisors%20ver%203.0.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Assign supervisors</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="messagingSupervisorTemp.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Chat</span></a>
            </li>



            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="uploadSchedule.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Upload presentation details</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="viewMarkingAll.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>View presentation marking</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="../test/calendar3/lecs.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>View presentation details</span></a>
            </li>


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="studentAccounts.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Student login accounts</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="timelineSupervisor.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Timeline</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="viewStudentProfiles.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Students Info</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="viewSupervisorProfiles.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Supervisors Info</span></a>
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

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <?php

                        $sql = "SELECT name FROM supervisors WHERE kduEmail='" . $_SESSION['uname'] . "' and name != ''";
                        $result = $con->query($sql);

                        if ($result->num_rows > 0) {
                            if ($row = $result->fetch_assoc()) {
                                $name = $row['name'];
                            }
                        } else {
                            $name = $_SESSION['uname'];
                        }

                        ?>


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $name; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                            </a>

                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="lecsProfileInfo.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                                </a>
                                <a class="dropdown-item" href="lecsProfileSecurity.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings
                                </a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">

                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout

                                </a>
                            </div>

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Project Timeline</h1>

                    <div class="cl-mcont" style="font-size:smaller; font-weight: 200;">

                        <ul class="cbp_tmtimeline">

                            <li><time datetime="2013-04-10 18:30"
                                    class="cbp_tmtime"><span>4/10/13</span><span>18:30</span></time>
                                <div class="cbp_tmicon"></div>
                                <!--<div class="cbp_tmicon">&check;</div>-->
                                <div class="cbp_tmlabel" id="1">
                                    <h2>Project norm submission</h2>
                                    <p>As the initial step of the individual research project student should require
                                        submitting their one-page project norms including problem, solution, technology
                                        and the area of the research project. Appendix 1 shows the
                                        sample project norm submission form. This should be done in the first week of
                                        the first semester. At this point, a student should able to present their
                                        project ideas including Suitable title of the project, problem
                                        solution and area of the research.

                                    </p>
                                </div>
                            </li>



                            <li><time datetime="2013-04-11T12:04" class="cbp_tmtime"><span>Not
                                        completed</span><span>N/A</span></time>
                                <div class="cbp_tmicon cbp_tmicon-screen"></div>
                                <div class="cbp_tmlabel" id="2" style="background-color: rgba(133, 134, 141, 0.473);">
                                    <h2>Project proposal submission</h2>
                                    <p>After allocating a supervisor, the student should require submitting their
                                        project proposal including Introduction to project, the area of the research
                                        with some motivation, problem, solution, the significance of the
                                        project, aim and objectives, requirements, action plan and ethical clearance. At
                                        the end of the research student should able to present innovative and/or a
                                        creative product as a solution to a real-world problem.
                                        The proposal is also the first document that should require describing proposed
                                        activities clearly.

                                    </p>
                                </div>
                            </li>

                            <li><time datetime="2013-04-13 05:36" class="cbp_tmtime"><span>Not
                                        completed</span><span>N/A</span></time>
                                <div class="cbp_tmicon cbp_tmicon-mail"></div>
                                <div class="cbp_tmlabel" id="3" style="background-color: rgba(133, 134, 141, 0.473);">
                                    <h2>Project proposal presentation</h2>
                                    <p>The student should able to present their project proposal with incorporating the
                                        supervisor’s comments. The scope of the project and the suitability (Ethical
                                        concern etc.) will consider in the proposal evaluation. Project
                                        proposal should evaluate by two examiners with supervisor observation. Total
                                        marks allocate to the project proposal is 10 marks. Evaluation sheet of the
                                        Project proposal is attached in Appendix 02. If the proposed
                                        project is not in the proper stranded, student should able to re-submit another
                                        proposal and evaluation panel can be decided whether student able to re-present
                                        or not.

                                    </p>
                                </div>
                            </li>

                            <li><time datetime="2013-04-13 05:36" class="cbp_tmtime"><span>Not
                                        completed</span><span>N/A</span></time>
                                <div class="cbp_tmicon cbp_tmicon-mail"></div>
                                <div class="cbp_tmlabel" id="4" style="background-color: rgba(133, 134, 141, 0.473);">
                                    <h2>Apply for final year research project</h2>
                                    <p>After accepting the project proposal student and supervisor should require
                                        submitting dually completed project proposal application to the project
                                        coordinator for further approval. After getting this approval student
                                        not allow to do any modifications. Sample application for the final year
                                        research project attached in the appendix 3.

                                    </p>
                                </div>
                            </li>

                            <li><time datetime="2013-04-13 05:36" class="cbp_tmtime"><span>Not
                                        completed</span><span>N/A</span></time>
                                <div class="cbp_tmicon cbp_tmicon-mail"></div>
                                <div class="cbp_tmlabel" id="5" style="background-color: rgba(133, 134, 141, 0.473);">
                                    <h2>Supervisor meetings</h2>
                                    <p>
                                    </p>
                                </div>
                            </li>

                            <li><time datetime="2013-04-13 05:36" class="cbp_tmtime"><span>Not
                                        completed</span><span>N/A</span></time>
                                <div class="cbp_tmicon cbp_tmicon-mail"></div>
                                <div class="cbp_tmlabel" id="6" style="background-color: rgba(133, 134, 141, 0.473);">
                                    <h2>Interim report 1 submission</h2>
                                    <p>Student required to submit first interim report including introduction, Lecturer
                                        Review, approach, Design and discussion chapters. The supervisor should correct
                                        the report and handover to the student at the progress
                                        review. Use the final thesis format as the interim report format and which is
                                        given in the appendix 7.

                                    </p>
                                </div>
                            </li>

                            <li><time datetime="2013-04-13 05:36" class="cbp_tmtime"><span>Not
                                        completed</span><span>N/A</span></time>
                                <div class="cbp_tmicon cbp_tmicon-mail"></div>
                                <div class="cbp_tmlabel" id="7" style="background-color: rgba(133, 134, 141, 0.473);">
                                    <h2>Progress Review 1</h2>
                                    <p>Student required to present his progress for the panel with the supervisor. Up to
                                        this point, the student needs to complete and present their review, approach and
                                        system design. In addition to the above, student should
                                        require demonstrating prototype system. Evaluation form of the 1st progress
                                        review is attached in Appendix 5. Total marks allocated for the first progress
                                        review is 10. Time allocate for the progress review 10 min
                                        presentation+ 5 min demonstration + 10 min discussion.

                                    </p>
                                </div>
                            </li>

                            <li><time datetime="2013-04-13 05:36" class="cbp_tmtime"><span>Not
                                        completed</span><span>N/A</span></time>
                                <div class="cbp_tmicon cbp_tmicon-mail"></div>
                                <div class="cbp_tmlabel" id="8" style="background-color: rgba(133, 134, 141, 0.473);">
                                    <h2>Interim report 2 submission</h2>
                                    <p>Student required to submit their second interim report including introduction,
                                        Lecturer Review, approach and Design, Technology, Implementation, Evaluation (in
                                        complete) and discussion chapters. The supervisor should
                                        correct the report and handover to the student at the second progress review.
                                        Use the thesis format as the interim report format. (Note that, the student
                                        required to write only technology, implementation, and evaluation
                                        chapters. The other chapters already submitted in the first progress review).

                                    </p>
                                </div>
                            </li>
                            <li><time datetime="2013-04-13 05:36" class="cbp_tmtime"><span>Not
                                        completed</span><span>N/A</span></time>
                                <div class="cbp_tmicon cbp_tmicon-mail"></div>
                                <div class="cbp_tmlabel" id="8" style="background-color: rgba(133, 134, 141, 0.473);">
                                    <h2>Progress Review 2</h2>
                                    <p>Student required to present his progress for the panel with supervisor Up to this
                                        point student need to complete implementation and some part of the system
                                        evaluation. Evaluation form of the 2nd progress review is attached
                                        in Appendix 6. In the second progress review student should able to demonstrate
                                        their complete system demonstration. Total marks allocated for the second
                                        progress review is 10. Time allocate for the progress review
                                        5 min presentation + 10 min demonstration + 10 min discussion.

                                    </p>
                                </div>
                            </li>

                            <li><time datetime="2013-04-13 05:36" class="cbp_tmtime"><span>Not
                                        completed</span><span>N/A</span></time>
                                <div class="cbp_tmicon cbp_tmicon-mail"></div>
                                <div class="cbp_tmlabel" id="9" style="background-color: rgba(133, 134, 141, 0.473);">
                                    <h2>Publish your research work</h2>
                                    <p>The student can publish their research work according to the supervisor comments.
                                        According to the content of the research paper and the index value of the
                                        publication marks are given for the publications. Total 10
                                        marks allocated for research publication(s). Note that, a student can publish a
                                        review paper, conference paper or journal paper. If it is unpublished work some
                                        marks are deducted.

                                    </p>
                                </div>
                            </li>

                            <li><time datetime="2013-04-13 05:36" class="cbp_tmtime"><span>Not
                                        completed</span><span>N/A</span></time>
                                <div class="cbp_tmicon cbp_tmicon-mail"></div>
                                <div class="cbp_tmlabel" id="10" style="background-color: rgba(133, 134, 141, 0.473);">
                                    <h2>Draft thesis submission</h2>
                                    <p>The student should able to submit 2 copies of their draft thesis with a Soft copy
                                        (MS-Word or Latex) and the complete source code of the project with project
                                        demonstration video (10 minutes). Thesis guideline and sample
                                        temple for MSWord and Latex is also given to the student. The general guideline
                                        for the thesis preparation is attached in Appendix 7. Note that word limit of
                                        the thesis is 15000 ± 10% words.

                                    </p>
                                </div>
                            </li>

                            <li><time datetime="2013-04-13 05:36" class="cbp_tmtime"><span>Not
                                        completed</span><span>N/A</span></time>
                                <div class="cbp_tmicon cbp_tmicon-mail"></div>
                                <div class="cbp_tmlabel" id="11" style="background-color: rgba(133, 134, 141, 0.473);">
                                    <h2>Final presentation + VIVA</h2>
                                    <p>The student should able to present their completed project work on the final
                                        viva. Evaluation sheet of the Final presentation is attached in Appendix 9. The
                                        final presentation should have held before the second-semester
                                        examination. Total marks allocated for the final VIVA is 30. Time allocate for
                                        the progress review 10 min presentation + 10 min demonstration + 30 min. VIVA.

                                    </p>
                                </div>
                            </li>

                            <li><time datetime="2013-04-13 05:36" class="cbp_tmtime"><span>Not
                                        completed</span><span>N/A</span></time>
                                <div class="cbp_tmicon cbp_tmicon-mail"></div>
                                <div class="cbp_tmlabel" id="12" style="background-color: rgba(133, 134, 141, 0.473);">
                                    <h2>Final Thesis submission </h2>


                                    <p>Student able to submit their 3 copies of hard bind final thesis with CDs
                                        including soft copy and the complete source code with project demonstration
                                        video (Maximum 5 min). The guideline is also given to the student.

                                    </p>
                                </div>
                            </li>

                        </ul>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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