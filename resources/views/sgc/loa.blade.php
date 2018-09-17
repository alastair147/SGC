<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../public/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../public/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
      Submit a LOA | SGC Logistics
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
          <li class="nav-item">
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
          <li class="nav-item active">
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
            <a class="navbar-brand" href="#pablo">Holiday / Leave Form</a>
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Leave form</h4>
                                <p class="card-category">Please submit this form if you are going inactive for 2 weeks or more.</p>
                            </div>
                            <div class="card-body">
                                <form action="../../public/common/submit_loa.php" method="post">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">SGC Logistics</label>
                                                <input type="text" class="form-control" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Username</label>
                                                <input type="text" class="form-control" name="username" maxlength="25">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Date (Supply today's date in your timezone)</label>
                                                <input type="text" class="form-control" name="date" maxlength="25">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Are you leaving SGC Logistics (Please type yes or no)</label>
                                                <input type="text" class="form-control" name="leaving" maxlength="10">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Reason for Leave?</label>
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Please supply a reason for leave. Please also supply the length of leave.</label>
                                                    <textarea class="form-control" rows="5" name="reason" maxlength="200"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right">Submit Form</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php
            echo $footer;
        @endphp
    </div>
  </div>
</body>

</html>