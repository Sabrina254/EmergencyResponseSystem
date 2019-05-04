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
    <link rel="icon" href="../favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Introduction - Documentation - tabler.github.io - a responsive, flat and full featured admin template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="../assets/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: '..'
      });
    </script>
    <!-- Dashboard Core -->
    <link href="../assets/css/dashboard.css" rel="stylesheet" />
    <script src="../assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="../assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="../assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="../assets/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="../assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="../assets/plugins/input-mask/plugin.js"></script>
  </head>
  <body class="">
    <div class="page">
      <div class="page-main">
        <div class="header py-4">
          <div class="container">
            <div class="d-flex">
              <a class="header-brand" href="../home.php">
                <img src="../demo/brand/tabler.svg" class="header-brand-img" alt="tabler logo">
              </a>
              <div class="d-flex order-lg-2 ml-auto">
                <div class="nav-item d-none d-md-flex">
                  <a href="https://github.com/tabler/tabler" class="btn btn-sm btn-outline-primary" target="_blank">Source code</a>
                </div>
                <div class="dropdown d-none d-md-flex">
                  <a class="nav-link icon" data-toggle="dropdown">
                    <i class="fe fe-bell"></i>
                    <span class="nav-unread"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/male/41.jpg)"></span>
                      <div>
                        <strong>Nathan</strong> pushed new commit: Fix page load performance issue.
                        <div class="small text-muted">10 minutes ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/1.jpg)"></span>
                      <div>
                        <strong>Alice</strong> started new task: Tabler UI design.
                        <div class="small text-muted">1 hour ago</div>
                      </div>
                    </a>
                    <a href="#" class="dropdown-item d-flex">
                      <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/18.jpg)"></span>
                      <div>
                        <strong>Rose</strong> deployed new version of NodeJS REST Api V3
                        <div class="small text-muted">2 hours ago</div>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item text-center text-muted-dark">Mark all as read</a>
                  </div>
                </div>
                <div class="dropdown">
                  <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <span class="avatar" style="background-image: url(../demo/faces/female/25.jpg)"></span>
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">Jane Pearson</span>
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
                    <a href="../home.php" class="nav-link"><i class="fe fe-home"></i> Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i> Interface</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="../cards.php" class="dropdown-item ">Cards design</a>
                      <a href="../charts.php" class="dropdown-item ">Charts</a>
                      <a href="../pricing-cards.php" class="dropdown-item ">Pricing cards</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-calendar"></i> Components</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="../maps.php" class="dropdown-item ">Maps</a>
                      <a href="../icons.php" class="dropdown-item ">Icons</a>
                      <a href="../store.php" class="dropdown-item ">Store</a>
                      <a href="../blog.php" class="dropdown-item ">Blog</a>
                      <a href="../carousel.php" class="dropdown-item ">Carousel</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i> Pages</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="../profile.php" class="dropdown-item ">Profile</a>
                      <a href="../index.php" class="dropdown-item ">Login</a>
                      <a href="../register.php" class="dropdown-item ">Register</a>
                      <a href="../forgot-password.php" class="dropdown-item ">Forgot password</a>
                      <a href="../400.php" class="dropdown-item ">400 error</a>
                      <a href="../401.php" class="dropdown-item ">401 error</a>
                      <a href="../403.php" class="dropdown-item ">403 error</a>
                      <a href="../404.php" class="dropdown-item ">404 error</a>
                      <a href="../500.php" class="dropdown-item ">500 error</a>
                      <a href="../503.php" class="dropdown-item ">503 error</a>
                      <a href="../email.php" class="dropdown-item ">Email</a>
                      <a href="../empty.php" class="dropdown-item ">Empty page</a>
                      <a href="../rtl.php" class="dropdown-item ">RTL mode</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="../form-elements.php" class="nav-link"><i class="fe fe-check-square"></i> Forms</a>
                  </li>
                  <li class="nav-item">
                    <a href="../gallery.php" class="nav-link"><i class="fe fe-image"></i> Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a href="../docs/index.php" class="nav-link active"><i class="fe fe-file-text"></i> Documentation</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="my-3 my-md-5">
          <div class="container">
            <div class="page-header">
              <h1 class="page-title">
                Documentation
              </h1>
            </div>
            <div class="row">
              <div class="col-lg-3 order-lg-1 mb-4">
                <a href="https://github.com/tabler/tabler" class="btn btn-block btn-primary mb-6">
                  <i class="fe fe-github mr-2"></i>Browse source code
                </a>
                <!-- Getting started -->
                <div class="list-group list-group-transparent mb-0">
                  <a href="../docs/index.php" class="list-group-item list-group-item-action active"><span class="icon mr-3"><i class="fe fe-flag"></i></span>Introduction</a>
                </div>
                <!-- Components -->
                <div class="list-group list-group-transparent mb-0">
                  <a href="../docs/alerts.php" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-alert-triangle"></i></span>Alerts</a>
                  <a href="../docs/avatars.php" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-user"></i></span>Avatars</a>
                  <a href="../docs/buttons.php" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-plus-square"></i></span>Buttons</a>
                  <a href="../docs/colors.php" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-feather"></i></span>Colors</a>
                  <a href="../docs/cards.php" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-image"></i></span>Cards</a>
                  <a href="../docs/charts.php" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-pie-chart"></i></span>Charts</a>
                  <a href="../docs/form-components.php" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-check-square"></i></span>Form components</a>
                  <a href="../docs/tags.php" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-tag"></i></span>Tags</a>
                  <a href="../docs/typography.php" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-type"></i></span>Typography</a>
                </div>
                <div class="d-none d-lg-block mt-6">
                  <a href="https://github.com/tabler/tabler/edit/dev/src/_docs/index.md" class="text-muted">Edit this page</a>
                </div>
              </div>
              <div class="col-lg-9">
                <div class="card">
                  <div class="card-body">
                    <div class="text-wrap p-lg-6">
                      <h2 class="mt-0 mb-4">Introduction</h2>
                      <p>We’ve created this admin panel for everyone who wants to create any templates based on our ready components. Our mission is to deliver a user-friendly, clear and easy administration panel, that can be used by both, simple websites and sophisticated systems. The only requirement is a basic HTML and CSS knowledge—as a reward, you’ll be able to manage and visualize different types of data in the easiest possible way!</p>
                      <h3 id="setup-environment">Setup environment</h3>
                      <p>To use our build system and run our documentation locally, you’ll need a copy of Tabler’s source files and Node. Follow these steps:</p>
                      <ol>
                        <li><a href="https://nodejs.org/download/">Download and install Node.js</a>, which we use to manage our dependencies.</li>
                        <li>Navigate to the root <code class="highlighter-rouge">/tabler</code> directory and run <code class="highlighter-rouge">npm install</code> to install our local dependencies listed in <code class="highlighter-rouge">package.json</code>.</li>
                        <li>
                          <p><a href="https://www.ruby-lang.org/en/documentation/installation/">Install Ruby</a>, install <a href="https://bundler.io/">Bundler</a> with <code class="highlighter-rouge">gem install bundler</code>, and finally run <code class="highlighter-rouge">bundle install</code>. This will install all Ruby dependencies, such as Jekyll and plugins.</p>
                          <p><strong>Windows users:</strong> Read <a href="https://jekyllrb.com/docs/windows/">this guide</a> to get Jekyll up and running without problems.</p>
                        </li>
                      </ol>
                      <p>When completed, you’ll be able to run the various commands provided from the command line.</p>
                      <h3 id="build-tabler-locally">Build Tabler locally</h3>
                      <ol>
                        <li>From the root <code class="highlighter-rouge">/tabler</code> directory, run <code class="highlighter-rouge">npm run serve</code> in the command line.</li>
                        <li>Open <a href="http://localhost:4000">http://localhost:4000</a> in your browser, and voilà.</li>
                        <li>Any change in <code class="highlighter-rouge">/src</code> directory will build application and refresh the page.</li>
                      </ol>
                      <div class="alert alert-warning">
                        <strong>Warning!</strong> all changes made in <code>_site/</code> folder would be overwriten on application build.
                      </div>
                      <h3 id="bugs-and-feature-requests">Bugs and feature requests</h3>
                      <p>Have a bug or a feature request? <a href="https://github.com/tabler/tabler/issues/new">Please open a new issue</a>.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">First link</a></li>
                    <li><a href="#">Second link</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Third link</a></li>
                    <li><a href="#">Fourth link</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Fifth link</a></li>
                    <li><a href="#">Sixth link</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Other link</a></li>
                    <li><a href="#">Last link</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
              Premium and Open Source dashboard template with responsive and high quality UI. For Free!
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
                    <li class="list-inline-item"><a href="../docs/index.php">Documentation</a></li>
                    <li class="list-inline-item"><a href="../faq.php">FAQ</a></li>
                  </ul>
                </div>
                <div class="col-auto">
                  <a href="https://github.com/tabler/tabler" class="btn btn-outline-primary btn-sm">Source code</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
              Copyright © 2018 <a href="..">Tabler</a>. Theme by <a href="https://codecalm.net" target="_blank">codecalm.net</a> All rights reserved.
            </div>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>