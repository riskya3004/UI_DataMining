<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UI Project</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Project <sup>UI</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->

            <!-- EDA -->
            <div class="sidebar-heading">
                EDA
            </div>

            <!-- Nav Item - Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTp"
                    aria-expanded="true" aria-controls="collapseTp">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Trasaction Percentage</span>
                </a>
                <div id="collapseTp" class="collapse" aria-labelledby="headingTp" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilih:</h6>
                        <a class="collapse-item" href="#">In 2010 and 2011</a>
                        <a class="collapse-item" href="#">By Month in 2010</a>
                        <a class="collapse-item" href="#">By Month in 2011</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUc"
                    aria-expanded="true" aria-controls="collapseUc">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Unique Customer</span>
                </a>
                <div id="collapseUc" class="collapse" aria-labelledby="headingUc" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilih:</h6>
                        <a class="collapse-item" href="#">Month in 2011 bar chart</a>
                        <a class="collapse-item" href="#">Month in 2011 line chart </a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Amount sales by country</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Internal External Market</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTci"
                    aria-expanded="true" aria-controls="collapseTci">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Top Customer in sales amount</span>
                </a>
                <div id="collapseTci" class="collapse" aria-labelledby="headingTci" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilih:</h6>
                        <a class="collapse-item" href="#">Top_Customers_10</a>
                        <a class="collapse-item" href="#">Top_Customers_20</a>
                        <a class="collapse-item" href="#">Top_Customers_30</a>
                        <a class="collapse-item" href="#">Top_Customers_40</a>
                        <a class="collapse-item" href="#">Top_Customers_50</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTce"
                    aria-expanded="true" aria-controls="collapseTce">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Top Customer Event Sales</span>
                </a>
                <div id="collapseTce" class="collapse" aria-labelledby="headingTce" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilih:</h6>
                        <a class="collapse-item" href="#">TC_Event_Sales_10</a>
                        <a class="collapse-item" href="#">TC_Event_Sales_20</a>
                        <a class="collapse-item" href="#">TC_Event_Sales_30</a>
                        <a class="collapse-item" href="#">TC_Event_Sales_40</a>
                        <a class="collapse-item" href="#">TC_Event_Sales_50</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTpi"
                    aria-expanded="true" aria-controls="collapseTpi">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Top Products In Sales Amount</span>
                </a>
                <div id="collapseTpi" class="collapse" aria-labelledby="headingTpi" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilih:</h6>
                        <a class="collapse-item" href="#">TP_Event_Sales_10</a>
                        <a class="collapse-item" href="#">TP_Event_Sales_20</a>
                        <a class="collapse-item" href="#">TP_Event_Sales_30</a>
                        <a class="collapse-item" href="#">TP_Event_Sales_40</a>
                        <a class="collapse-item" href="#">TP_Event_Sales_50</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMsp"
                    aria-expanded="true" aria-controls="collapseMsp">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Most Sold Products</span>
                </a>
                <div id="collapseMsp" class="collapse" aria-labelledby="headingMsp" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilih:</h6>
                        <a class="collapse-item" href="#">Most_Sold_Products_10</a>
                        <a class="collapse-item" href="#">Most_Sold_Products_20</a>
                        <a class="collapse-item" href="#">Most_Sold_Products_30</a>
                        <a class="collapse-item" href="#">Most_Sold_Products_40</a>
                        <a class="collapse-item" href="#">Most_Sold_Products_50</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTps"
                    aria-expanded="true" aria-controls="collapseTps">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Top Products In Sales Amount</span>
                </a>
                <div id="collapseTps" class="collapse" aria-labelledby="headingTps" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilih:</h6>
                        <a class="collapse-item" href="#">Top_Products_10</a>
                        <a class="collapse-item" href="#">Top_Products_20</a>
                        <a class="collapse-item" href="#">Top_Products_30</a>
                        <a class="collapse-item" href="#">Top_Products_40</a>
                        <a class="collapse-item" href="#">Top_Products_50</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Customer Segmentation -->
            <div class="sidebar-heading">
                Customer Segmentation
            </div>

            <!-- Nav Item - Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseC"
                    aria-expanded="true" aria-controls="collapseC">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Chart Customer Segmentation</span>
                </a>
                <div id="collapseC" class="collapse" aria-labelledby="headingC" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilih:</h6>
                        <a class="collapse-item" href="#">chart_3_clusters</a>
                        <a class="collapse-item" href="#">chart_5_clusters</a>
                        <a class="collapse-item" href="#">chart_7_clusters</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseK"
                    aria-expanded="true" aria-controls="collapseK">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Kmeans Elbow</span>
                </a>
                <div id="collapseK" class="collapse" aria-labelledby="headingK" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilih:</h6>
                        <a class="collapse-item" href="#">kmeans_cluster_plot</a>
                        <a class="collapse-item" href="#">kmeans_elbow_plot</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>DBSCAN</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseS"
                    aria-expanded="true" aria-controls="collapseS">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Silhoutte Score 3 5 7 </span>
                </a>
                <div id="collapseS" class="collapse" aria-labelledby="headingS" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilih:</h6>
                        <a class="collapse-item" href="#">Cluster Silhouette</a>
                        <a class="collapse-item" href="#">Result Clusters</a>
                    </div>
                </div>
            </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- RFM Analysis -->
        <div class="sidebar-heading">
            RFM Analysis
        </div>

        <!-- Nav Item - Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseQ"
                aria-expanded="true" aria-controls="collapseQ">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>QQ Plot RFM</span>
            </a>
            <div id="collapseQ" class="collapse" aria-labelledby="headingQ" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Pilih:</h6>
                    <a class="collapse-item" href="#">QQ_plot_frequency</a>
                    <a class="collapse-item" href="#">QQ_plot_monetory</a>
                    <a class="collapse-item" href="#">QQ_plot Recency</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapserfmB"
                aria-expanded="true" aria-controls="collapserfmB">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>RFM Boxplot</span>
            </a>
            <div id="collapserfmB" class="collapse" aria-labelledby="headingrfmB" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Amount:</h6>
                    <a class="collapse-item" href="#">chart_amount_3_clusters</a>
                    <a class="collapse-item" href="#">chart_amount_5_clusters</a>
                    <a class="collapse-item" href="#">chart_amount_7_clusters</a>
                </div>
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Frequency:</h6>
                    <a class="collapse-item" href="#">chart_frequency_3_clusters</a>
                    <a class="collapse-item" href="#">chart_frequency_5_clusters</a>
                    <a class="collapse-item" href="#">chart_frequency_7_clusters</a>
                </div>
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Recency:</h6>
                    <a class="collapse-item" href="#">chart_recency_3_clusters</a>
                    <a class="collapse-item" href="#">chart_recency_5_clusters</a>
                    <a class="collapse-item" href="#">chart_recency_7_clusters</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapserfmc"
                aria-expanded="true" aria-controls="collapserfmc">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>RFM Chart</span>
            </a>
            <div id="collapserfmc" class="collapse" aria-labelledby="headingrfmc" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Pilih:</h6>
                    <a class="collapse-item" href="#">Frequency vs Amount</a>
                    <a class="collapse-item" href="#">Receny vs Amount</a>
                    <a class="collapse-item" href="#">RFM Log 3D</a>
                    <a class="collapse-item" href="#">Freq-Log vs Amount-Log </a>
                    <a class="collapse-item" href="#">Rec-Log vs Amount-Log</a>
                </div>
            </div>
        </li>

                <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Market Basket Analysis -->
        <div class="sidebar-heading">
            Market Basket Analysis
        </div>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Apriori 7 cluster</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>FP-Growth</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Eclat 7 cluster</span></a>
        </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Dataset Terbentuk -->
         <div class="sidebar-heading">
             Dataset Terbentuk
         </div>
 
         <li class="nav-item">
             <a class="nav-link" href="#">
                 <i class="fas fa-fw fa-chart-area"></i>
                 <span>Dataset RFM 7 Cluster</span></a>
         </li>
 
         <li class="nav-item">
             <a class="nav-link" href="#">
                 <i class="fas fa-fw fa-chart-area"></i>
                 <span>Dataset RFM 7 Cluster</span></a>
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
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
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
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
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
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
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
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
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
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
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
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
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
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
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

                <div class="container">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        @yield('container')
                    </div>
                </div>
    
            </div>
            <!-- End of Main Content -->


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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    

</body>

</html>