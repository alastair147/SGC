<!doctype html>
<html lang="en">
<?php require('common/header.php');
require("common/sqlconnect.php");
require("common/alerts.php");
require('assets/steamauth/steamauth.php');?>?>
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../public/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../public/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Home | SGC Logistics
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!-- EXTRA HEADER -->

    <!-- Main Style Sheet -->
    <link href="{{ URL::asset('assets/css/material-dashboard.css?v=2.1.0') }}" rel="stylesheet" />
    <!-- Fonts and Icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!--   Core JS Files   -->
    <script src="{{ URL::asset('assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="{{ URL::asset('assets/js/plugins/chartist.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ URL::asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ URL::asset('assets/js/material-dashboard.min.js?v=2.1.0') }}" type="text/javascript"></script>
</head>

    <body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="green" data-background-color="white">
            <!--
              Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

              Tip 2: you can also add an image using data-image tag
          -->
            <div class="logo">
                <a href="#" class="simple-text logo-normal">
                    <img src="{{ URL::asset('assets/img/logoasdfasdf.png') }}" width="200px">
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active  ">
                        <a class="nav-link" href="dashboard">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="downloads">
                            <i class="material-icons">get_app</i>
                            <p>Downloads</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="submit">
                            <i class="material-icons">label</i>
                            <p>Submit a Job</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="loggedjobs">
                            <i class="material-icons">view_headline</i>
                            <p>Logged Jobs</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="loa">
                            <i class="material-icons">weekend</i>
                            <p>Holiday / Leave Form</p>
                        </a>
                    </li>
                    <!-- ADMIN ONLY SECTION -->
                    <li class="nav-item">
                        <a class="nav-link" href="users">
                            <i class="material-icons">people</i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="leaveforms">
                            <i class="material-icons">directions_walk</i>
                            <p>Leave Forms</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#pablo">Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <?php echo $notice; ?>
                                </a>
                            </li>
                            <!-- your navbar here -->
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-rose card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">content_copy</i>
                                    </div>
                                    <p class="card-category">Registered Users</p>
                                    <h3 class="card-title"><?php

                                        $connection = new Connection();
                                        $conn = $connection->getConnection();

                                        $sql = $conn->prepare("SELECT id FROM users");
                                        $sql->execute();

                                        $count = $sql->rowCount();
                                        echo $count;

                                        ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> Tracked via SGC Logistics Hub
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">attach_money</i>
                                    </div>
                                    <p class="card-category">SGC Logistics Revenue</p>
                                    <h3 class="card-title">$0</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> All time!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">info_outline</i>
                                    </div>
                                    <p class="card-category">Reported Accidents</p>
                                    <h3 class="card-title">0</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> Tracked via SGC Logistics Hub
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                    <p class="card-category">Followers</p>
                                    <h3 class="card-title">
                                       You currently have {{ \App\Models\User::getTwitterFollower('sgc_logistics') }} followers
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header card-header-warning">
                                    <h4 class="card-title">Employees Stats</h4>
                                    <p class="card-category">Top Drivers for SGC Logistics</p>
                                </div>
                                <div class="card-body table-responsive">
                                    <?php
                                    $connection = new Connection();
                                    $conn = $connection->getConnection();

                                    $sql = $conn->prepare("SELECT id, username, date, leaving, reason FROM loa");
                                    $sql->execute();
                                    $result = $sql->fetchAll();

                                    if ($sql->rowCount() > 0) {
                                        echo "<table class=\"table\">
                                                <thead class=\" text-primary\">
                                                <th>
                                                    Name:
                                                </th>
                                                <th>
                                                    Date
                                                </th>
                                                <th>
                                                    Leaving SGC
                                                </th>
                                                <th>
                                                    Reason
                                                </th>
                                                <th>
                                                    Remove
                                                </th>
                                                </thead>
                                                <tbody>";
                                        // output data of each row
                                        foreach ($result as $row) {
                                            echo "<tr><td>".$row["username"]."</td><td>".$row["date"]."</td><td>".$row["leaving"]."</td><td>".$row["reason"]."</td><td><a href='common/deleteloaform.php?id={$row['id']}'>Delete</a></td>";
                                        }
                                        echo "</tr></table>";
                                    } else {
                                        echo "0 results";
                                    }
                                    return null;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </body>
</html>