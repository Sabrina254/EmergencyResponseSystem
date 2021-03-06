<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Admin - Cases | Emergency Response System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="./assets/js/require.min.js"></script>
    <script>
        requirejs.config({
            baseUrl: '.'
        });
    </script>
    <!-- Dashboard Core -->
    <link href="./assets/css/dashboard.css" rel="stylesheet" />
    <script src="./assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="./assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="./assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="./assets/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="./assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="./assets/plugins/input-mask/plugin.js"></script>
</head>
<body class="">
<div class="page">
    <div class="page-main">
        <div class="header py-4">
            <div class="container">
                <div class="d-flex">
                    <!--Brand That appears on the navbar-->
                    <a class="header-brand" href="home.php">
                        Emergency Response
                    </a>
                    <div class="d-flex order-lg-2 ml-auto">
                        <!--<div class="nav-item d-none d-md-flex">
                          <a href="https://github.com/tabler/tabler" class="btn btn-sm btn-outline-primary" target="_blank">Source code</a>
                        </div>-->
                        <!-- Notifications-->
                        <div class="dropdown d-none d-md-flex">
                            <a class="nav-link icon" data-toggle="dropdown">
                                <i class="fe fe-bell"></i>
                                <span class="nav-unread"></span>
                            </a>
                            <!--Notifications from the system-->
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a href="#" class="dropdown-item d-flex">
                                    <div>
                                        <strong>Team001</strong> was unable to respond to an emergency.
                                        <div class="small text-muted">10 minutes ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item d-flex">
                                    <div>
                                        <strong>Team389</strong> was unable to respond to an emergency
                                        <div class="small text-muted">1 hour ago</div>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item text-center text-muted-dark">Mark all as read</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                                <span class="avatar avatar-pink">KK</span>
                                <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">Karim K. Kanji</span>
                      <small class="text-muted d-block mt-1">Administrator</small>
                    </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-user"></i> Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-settings"></i> Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <span class="float-right"><span class="badge badge-primary">6</span></span>
                                    <i class="dropdown-icon fe fe-mail"></i> Inbox
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-send"></i> Message
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-help-circle"></i> Need help?
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="dropdown-icon fe fe-log-out"></i> Sign out
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                        <span class="header-toggler-icon"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 ml-auto">
                        <form class="input-icon my-3 my-lg-0">
                            <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                            <div class="input-icon-addon">
                                <i class="fe fe-search"></i>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg order-lg-first">
                        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                            <li class="nav-item">
                                <a href="home.php" class="nav-link"><i class="fe fe-home"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="cases.php" class="nav-link active"><i class="fe fe-box"></i> Cases</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-calendar"></i>Manual intervention</a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <a href="./maps.php" class="dropdown-item ">Maps</a>
                                    <a href="./icons.php" class="dropdown-item ">Icons</a>
                                    <a href="./store.php" class="dropdown-item ">Store</a>
                                    <a href="./blog.php" class="dropdown-item ">Blog</a>
                                    <a href="./carousel.php" class="dropdown-item ">Carousel</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i>Users </a>
                                <div class="dropdown-menu dropdown-menu-arrow">
                                    <a href="./profile.php" class="dropdown-item ">Profile</a>
                                    <a href="index.php" class="dropdown-item ">Login</a>
                                    <a href="./register.php" class="dropdown-item ">Register</a>
                                    <a href="./forgot-password.php" class="dropdown-item ">Forgot password</a>
                                    <a href="./400.php" class="dropdown-item ">400 error</a>
                                    <a href="./401.php" class="dropdown-item ">401 error</a>
                                    <a href="./403.php" class="dropdown-item ">403 error</a>
                                    <a href="./404.php" class="dropdown-item ">404 error</a>
                                    <a href="./500.php" class="dropdown-item ">500 error</a>
                                    <a href="./503.php" class="dropdown-item ">503 error</a>
                                    <a href="./email.php" class="dropdown-item ">Email</a>
                                    <a href="./empty.php" class="dropdown-item ">Empty page</a>
                                    <a href="./rtl.php" class="dropdown-item ">RTL mode</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="./form-elements.php" class="nav-link"><i class="fe fe-check-square"></i> Forms</a>
                            </li>
                            <li class="nav-item">
                                <a href="./gallery.php" class="nav-link"><i class="fe fe-image"></i> Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a href="./docs/index.php" class="nav-link"><i class="fe fe-file-text"></i> Documentation</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-3 my-md-5">
            <div class="container">
                <div class="page-header">
                    <h1 class="page-title" id="queue">
                        Queue
                    </h1>
                </div>
                <div class="col-2 sticky-top float-right">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title"><b>Menu</b></h2>
                        </div>
                        <table class="table card-table">
                            <tbody><tr>
                                <td><a href="#queue">Queue</a></td>
                            </tr>
                            <tr>
                                <td><a href="#current">Current</a></td>
                            </tr>
                            <tr>
                                <td><a href="#successful">Successful</a></td>
                            </tr>
                            <tr>
                                <td><a href="#failed">Failed</a></td>
                            </tr>
                            </tbody></table>
                    </div>
                </div>
                <div class="row row-cards row-deck">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
                                    <thead>
                                    <tr>
                                        <th class="text-center w-1"><i class="icon-people"></i></th>
                                        <th>User</th>
                                        <th>Usage</th>
                                        <th class="text-center">Payment</th>
                                        <th>Activity</th>
                                        <th class="text-center">Satisfaction</th>
                                        <th class="text-center"><i class="icon-settings"></i></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/26.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Elizabeth Martin</div>
                                            <div class="small text-muted">
                                                Registered: Mar 19, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>42%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-yellow" role="progressbar" style="width: 42%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-visa"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>4 minutes ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.42" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">42%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/17.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Michelle Schultz</div>
                                            <div class="small text-muted">
                                                Registered: Mar 2, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>0%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-red" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-googlewallet"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>5 minutes ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.0" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">0%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/21.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Crystal Austin</div>
                                            <div class="small text-muted">
                                                Registered: Apr 7, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>96%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-green" role="progressbar" style="width: 96%" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-mastercard"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>a minute ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.96" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">96%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/male/32.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Douglas Ray</div>
                                            <div class="small text-muted">
                                                Registered: Jan 15, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>6%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-red" role="progressbar" style="width: 6%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-shopify"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>a minute ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.06" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">6%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/12.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Teresa Reyes</div>
                                            <div class="small text-muted">
                                                Registered: Mar 4, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>36%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-red" role="progressbar" style="width: 36%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-ebay"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>2 minutes ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.36" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">36%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/4.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Emma Wade</div>
                                            <div class="small text-muted">
                                                Registered: Mar 20, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>7%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-red" role="progressbar" style="width: 7%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-paypal"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>a minute ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.07" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">7%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/27.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Carol Henderson</div>
                                            <div class="small text-muted">
                                                Registered: Feb 22, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>80%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-green" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-visa"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>9 minutes ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.8" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">80%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/male/20.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Christopher Harvey</div>
                                            <div class="small text-muted">
                                                Registered: Jan 22, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>83%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-green" role="progressbar" style="width: 83%" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-googlewallet"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>8 minutes ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.83" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">83%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-header">
                    <h1 class="page-title" id="current">
                        Being attended
                    </h1>
                </div>
                <div class="row row-cards row-deck">
                    <div class="col-10">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
                                    <thead>
                                    <tr>
                                        <th class="text-center w-1"><i class="icon-people"></i></th>
                                        <th>User</th>
                                        <th>Usage</th>
                                        <th class="text-center">Payment</th>
                                        <th>Activity</th>
                                        <th class="text-center">Satisfaction</th>
                                        <th class="text-center"><i class="icon-settings"></i></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/26.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Elizabeth Martin</div>
                                            <div class="small text-muted">
                                                Registered: Mar 19, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>42%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-yellow" role="progressbar" style="width: 42%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-visa"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>4 minutes ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.42" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">42%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/17.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Michelle Schultz</div>
                                            <div class="small text-muted">
                                                Registered: Mar 2, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>0%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-red" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-googlewallet"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>5 minutes ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.0" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">0%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/21.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Crystal Austin</div>
                                            <div class="small text-muted">
                                                Registered: Apr 7, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>96%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-green" role="progressbar" style="width: 96%" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-mastercard"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>a minute ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.96" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">96%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/male/32.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Douglas Ray</div>
                                            <div class="small text-muted">
                                                Registered: Jan 15, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>6%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-red" role="progressbar" style="width: 6%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-shopify"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>a minute ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.06" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">6%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/12.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Teresa Reyes</div>
                                            <div class="small text-muted">
                                                Registered: Mar 4, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>36%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-red" role="progressbar" style="width: 36%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-ebay"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>2 minutes ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.36" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">36%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/4.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Emma Wade</div>
                                            <div class="small text-muted">
                                                Registered: Mar 20, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>7%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-red" role="progressbar" style="width: 7%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-paypal"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>a minute ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.07" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">7%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/27.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Carol Henderson</div>
                                            <div class="small text-muted">
                                                Registered: Feb 22, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>80%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-green" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-visa"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>9 minutes ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.8" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">80%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/male/20.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Christopher Harvey</div>
                                            <div class="small text-muted">
                                                Registered: Jan 22, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>83%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-green" role="progressbar" style="width: 83%" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-googlewallet"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>8 minutes ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.83" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">83%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-header">
                    <h1 class="page-title" id="successful">
                        Successfully Attended
                    </h1>
                </div>
                <div class="row row-cards row-deck">
                    <div class="col-10">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
                                    <thead>
                                    <tr>
                                        <th class="text-center w-1"><i class="icon-people"></i></th>
                                        <th>User</th>
                                        <th>Usage</th>
                                        <th class="text-center">Payment</th>
                                        <th>Activity</th>
                                        <th class="text-center">Satisfaction</th>
                                        <th class="text-center"><i class="icon-settings"></i></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/26.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Elizabeth Martin</div>
                                            <div class="small text-muted">
                                                Registered: Mar 19, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>42%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-yellow" role="progressbar" style="width: 42%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-visa"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>4 minutes ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.42" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">42%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/17.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Michelle Schultz</div>
                                            <div class="small text-muted">
                                                Registered: Mar 2, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>0%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-red" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-googlewallet"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>5 minutes ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.0" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">0%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/21.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Crystal Austin</div>
                                            <div class="small text-muted">
                                                Registered: Apr 7, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>96%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-green" role="progressbar" style="width: 96%" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-mastercard"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>a minute ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.96" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">96%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/male/32.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Douglas Ray</div>
                                            <div class="small text-muted">
                                                Registered: Jan 15, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>6%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-red" role="progressbar" style="width: 6%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-shopify"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>a minute ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.06" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">6%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/12.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Teresa Reyes</div>
                                            <div class="small text-muted">
                                                Registered: Mar 4, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>36%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-red" role="progressbar" style="width: 36%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-ebay"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>2 minutes ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.36" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">36%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/4.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Emma Wade</div>
                                            <div class="small text-muted">
                                                Registered: Mar 20, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>7%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-red" role="progressbar" style="width: 7%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-paypal"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>a minute ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.07" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">7%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/27.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Carol Henderson</div>
                                            <div class="small text-muted">
                                                Registered: Feb 22, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>80%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-green" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-visa"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>9 minutes ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.8" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">80%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/male/20.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Christopher Harvey</div>
                                            <div class="small text-muted">
                                                Registered: Jan 22, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>83%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-green" role="progressbar" style="width: 83%" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-googlewallet"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>8 minutes ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.83" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">83%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-header">
                    <h1 class="page-title" id="failed">
                        Failed to be Attended
                    </h1>
                </div>
                <div class="row row-cards row-deck">
                    <div class="col-10">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
                                    <thead>
                                    <tr>
                                        <th class="text-center w-1"><i class="icon-people"></i></th>
                                        <th>User</th>
                                        <th>Usage</th>
                                        <th class="text-center">Payment</th>
                                        <th>Activity</th>
                                        <th class="text-center">Satisfaction</th>
                                        <th class="text-center"><i class="icon-settings"></i></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/26.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Elizabeth Martin</div>
                                            <div class="small text-muted">
                                                Registered: Mar 19, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>42%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-yellow" role="progressbar" style="width: 42%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-visa"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>4 minutes ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.42" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">42%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/17.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Michelle Schultz</div>
                                            <div class="small text-muted">
                                                Registered: Mar 2, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>0%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-red" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-googlewallet"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>5 minutes ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.0" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">0%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/21.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Crystal Austin</div>
                                            <div class="small text-muted">
                                                Registered: Apr 7, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>96%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-green" role="progressbar" style="width: 96%" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-mastercard"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>a minute ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.96" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">96%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/male/32.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Douglas Ray</div>
                                            <div class="small text-muted">
                                                Registered: Jan 15, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>6%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-red" role="progressbar" style="width: 6%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-shopify"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>a minute ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.06" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">6%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/12.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Teresa Reyes</div>
                                            <div class="small text-muted">
                                                Registered: Mar 4, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>36%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-red" role="progressbar" style="width: 36%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-ebay"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>2 minutes ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.36" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">36%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/4.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Emma Wade</div>
                                            <div class="small text-muted">
                                                Registered: Mar 20, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>7%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-red" role="progressbar" style="width: 7%" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-paypal"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>a minute ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.07" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">7%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/female/27.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Carol Henderson</div>
                                            <div class="small text-muted">
                                                Registered: Feb 22, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>80%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-green" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-visa"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>9 minutes ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.8" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">80%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <div class="avatar d-block" style="background-image: url(demo/faces/male/20.jpg)">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div>Christopher Harvey</div>
                                            <div class="small text-muted">
                                                Registered: Jan 22, 2018
                                            </div>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left">
                                                    <strong>83%</strong>
                                                </div>
                                                <div class="float-right">
                                                    <small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small>
                                                </div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-green" role="progressbar" style="width: 83%" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <i class="payment payment-googlewallet"></i>
                                        </td>
                                        <td>
                                            <div class="small text-muted">Last login</div>
                                            <div>8 minutes ago</div>
                                        </td>
                                        <td class="text-center">
                                            <div class="mx-auto chart-circle chart-circle-xs" data-value="0.83" data-thickness="3" data-color="blue"><canvas width="70" height="70" style="height: 40px; width: 40px;"></canvas>
                                                <div class="chart-circle-value">83%</div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="item-action dropdown">
                                                <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-edit-2"></i> Another action </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-message-square"></i> Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-link"></i> Separated link</a>
                                                </div>
                                            </div>
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
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-auto ml-lg-auto">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <ul class="list-inline list-inline-dots mb-0">
                                    <li class="list-inline-item"><a href="./docs/index.php">Documentation</a></li>
                                    <li class="list-inline-item"><a href="./faq.php">FAQ</a></li>
                                </ul>
                            </div>
                            <!--<div class="col-auto">
                              <a href="https://github.com/tabler/tabler" class="btn btn-outline-primary btn-sm">Source code</a>
                            </div>-->
                        </div>
                    </div>
                    <div class="col-10 col-lg-auto mt-3 mt-lg-0 text-center">
                        Copyright © 2019 <a href=".">Emergency Response</a>.
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>