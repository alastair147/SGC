<!doctype html>
<html lang="en">
<?php require('common/header.php'); ?>
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../public/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../public/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
      User Database | SGC Logistics
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
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
            <img src="../../public/assets/img/logoasdfasdf.png" width="200px">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="downloads.php">
                  <i class="material-icons">get_app</i>
                  <p>Downloads</p>
                </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="submit.php">
                  <i class="material-icons">label</i>
                  <p>Submit a Job</p>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="loggedjobs.php">
                  <i class="material-icons">view_headline</i>
                  <p>Logged Jobs</p>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="loa.php">
                  <i class="material-icons">weekend</i>
                  <p>Holiday / Leave Form</p>
              </a>
          </li>
            <!-- ADMIN ONLY SECTION -->
          <li class="nav-item active-pro active">
              <a class="nav-link" href="users.php">
                  <i class="material-icons">people</i>
                  <p>Users</p>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="leaveforms.php">
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
            <a class="navbar-brand" href="#pablo">SGC UserData</a>
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
                  <i class="material-icons">notifications</i> Notifications
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
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">SGC Logistics User Database</h4>
                                    <p class="card-category"> List of users registered on the SGC Logistics Hub</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class=" text-primary">
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Country
                                            </th>
                                            <th>
                                                City
                                            </th>
                                            <th>
                                                Salary
                                            </th>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    Dakota Rice
                                                </td>
                                                <td>
                                                    Niger
                                                </td>
                                                <td>
                                                    Oud-Turnhout
                                                </td>
                                                <td class="text-primary">
                                                    $36,738
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    Minerva Hooper
                                                </td>
                                                <td>
                                                    Curaçao
                                                </td>
                                                <td>
                                                    Sinaai-Waas
                                                </td>
                                                <td class="text-primary">
                                                    $23,789
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    Sage Rodriguez
                                                </td>
                                                <td>
                                                    Netherlands
                                                </td>
                                                <td>
                                                    Baileux
                                                </td>
                                                <td class="text-primary">
                                                    $56,142
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    4
                                                </td>
                                                <td>
                                                    Philip Chaney
                                                </td>
                                                <td>
                                                    Korea, South
                                                </td>
                                                <td>
                                                    Overland Park
                                                </td>
                                                <td class="text-primary">
                                                    $38,735
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    Doris Greene
                                                </td>
                                                <td>
                                                    Malawi
                                                </td>
                                                <td>
                                                    Feldkirchen in Kärnten
                                                </td>
                                                <td class="text-primary">
                                                    $63,542
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    6
                                                </td>
                                                <td>
                                                    Mason Porter
                                                </td>
                                                <td>
                                                    Chile
                                                </td>
                                                <td>
                                                    Gloucester
                                                </td>
                                                <td class="text-primary">
                                                    $78,615
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
        <?php
            echo $footer;
        ?>
    </div>
  </div>
</body>

</html>