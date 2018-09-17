@php

    $levelAmount = 'level';

    if (Auth::User()->level() >= 2) {
        $levelAmount = 'levels';

    }

@endphp

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
                @role('admin')
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
                @endrole

            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
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
                                <h3 class="card-title">1</h3>
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
                                    <?php
                                    require_once('assets/TwitterAPIExchange.php');

                                    /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
                                    $settings = array(
                                        'oauth_access_token' => "1261301210-TDuNrXxEqAlKigPmHvBTeu4UDcdx0pEgUeen7zt",
                                        'oauth_access_token_secret' => "qhUcyi2DrdVx2eZLyQOa1ymaRfbT1ZZVs6GRwohm0e973",
                                        'consumer_key' => "gRxzBSnRiyugM5NLGhmwOgdDy",
                                        'consumer_secret' => "xv1MwvVHhyvUfP5tuFTmxsfi0vWqzdFZ9zbrW4W9KkotgatcMY"
                                    );

                                    $ta_url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
                                    $getfield = '?screen_name=sgc_logistics';
                                    $requestMethod = 'GET';
                                    $twitter = new TwitterAPIExchange($settings);
                                    $follow_count=$twitter->setGetfield($getfield)
                                        ->buildOauth($ta_url, $requestMethod)
                                        ->performRequest();
                                    $data = json_decode($follow_count, true);
                                    $followers_count=$data[0]['user']['followers_count'];
                                    echo $followers_count;
                                    ?>
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
                                <table class="table">
                                                <thead class=" text-primary">
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
                                                <tbody>
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
