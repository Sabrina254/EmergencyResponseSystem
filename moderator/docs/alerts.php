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
    <title>Alerts - Documentation - tabler.github.io - a responsive, flat and full featured admin template</title>
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
              <a class="header-brand" href="../index.html">
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
                    <a href="../index.html" class="nav-link"><i class="fe fe-home"></i> Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i> Interface</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="../cards.html" class="dropdown-item ">Cards design</a>
                      <a href="../charts.html" class="dropdown-item ">Charts</a>
                      <a href="../pricing-cards.html" class="dropdown-item ">Pricing cards</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-calendar"></i> Components</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="../maps.html" class="dropdown-item ">Maps</a>
                      <a href="../icons.html" class="dropdown-item ">Icons</a>
                      <a href="../store.html" class="dropdown-item ">Store</a>
                      <a href="../blog.html" class="dropdown-item ">Blog</a>
                      <a href="../carousel.html" class="dropdown-item ">Carousel</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i> Pages</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="../profile.html" class="dropdown-item ">Profile</a>
                      <a href="../login.html" class="dropdown-item ">Login</a>
                      <a href="../register.html" class="dropdown-item ">Register</a>
                      <a href="../forgot-password.html" class="dropdown-item ">Forgot password</a>
                      <a href="../400.html" class="dropdown-item ">400 error</a>
                      <a href="../401.html" class="dropdown-item ">401 error</a>
                      <a href="../403.html" class="dropdown-item ">403 error</a>
                      <a href="../404.html" class="dropdown-item ">404 error</a>
                      <a href="../500.html" class="dropdown-item ">500 error</a>
                      <a href="../503.html" class="dropdown-item ">503 error</a>
                      <a href="../email.html" class="dropdown-item ">Email</a>
                      <a href="../empty.html" class="dropdown-item ">Empty page</a>
                      <a href="../rtl.html" class="dropdown-item ">RTL mode</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="../form-elements.html" class="nav-link"><i class="fe fe-check-square"></i> Forms</a>
                  </li>
                  <li class="nav-item">
                    <a href="../gallery.html" class="nav-link"><i class="fe fe-image"></i> Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a href="../docs/index.html" class="nav-link active"><i class="fe fe-file-text"></i> Documentation</a>
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
                  <a href="../docs/index.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-flag"></i></span>Introduction</a>
                </div>
                <!-- Components -->
                <div class="list-group list-group-transparent mb-0">
                  <a href="../docs/alerts.html" class="list-group-item list-group-item-action active"><span class="icon mr-3"><i class="fe fe-alert-triangle"></i></span>Alerts</a>
                  <a href="../docs/avatars.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-user"></i></span>Avatars</a>
                  <a href="../docs/buttons.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-plus-square"></i></span>Buttons</a>
                  <a href="../docs/colors.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-feather"></i></span>Colors</a>
                  <a href="../docs/cards.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-image"></i></span>Cards</a>
                  <a href="../docs/charts.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-pie-chart"></i></span>Charts</a>
                  <a href="../docs/form-components.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-check-square"></i></span>Form components</a>
                  <a href="../docs/tags.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-tag"></i></span>Tags</a>
                  <a href="../docs/typography.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-type"></i></span>Typography</a>
                </div>
                <div class="d-none d-lg-block mt-6">
                  <a href="https://github.com/tabler/tabler/edit/dev/src/_docs/alerts.md" class="text-muted">Edit this page</a>
                </div>
              </div>
              <div class="col-lg-9">
                <div class="card">
                  <div class="card-body">
                    <div class="text-wrap p-lg-6">
                      <h2 class="mt-0 mb-4">Alerts</h2>
                      <p>Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.</p>
                      <div class="alert alert-primary mt-5 mb-6">
                        <div><strong>Work in progress!</strong> More detailed documentation is coming soon.</div>
                      </div>
                      <h3 id="default-alerts">Default alerts</h3>
                      <p>Add color contextual class.</p>
                      <div class="example">
                        <div class="alert alert-primary" role="alert">
                          This is a primary alert—check it out!
                        </div>
                        <div class="alert alert-secondary" role="alert">
                          This is a secondary alert—check it out!
                        </div>
                        <div class="alert alert-success" role="alert">
                          This is a success alert—check it out!
                        </div>
                        <div class="alert alert-info" role="alert">
                          This is a info alert—check it out!
                        </div>
                        <div class="alert alert-warning" role="alert">
                          This is a warning alert—check it out!
                        </div>
                        <div class="alert alert-danger" role="alert">
                          This is a danger alert—check it out!
                        </div>
                      </div>
                      <div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-primary"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  This is a primary alert—check it out!
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-secondary"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  This is a secondary alert—check it out!
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  This is a success alert—check it out!
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  This is a info alert—check it out!
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  This is a warning alert—check it out!
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  This is a danger alert—check it out!
<span class="nt">&lt;/div&gt;</span></code></pre>
                      </div>
                      <h3 id="alert-with-icon">Alert with icon</h3>
                      <p>Add <code class="highlighter-rouge">.alert-icon</code> class.</p>
                      <div class="example">
                        <div class="alert alert-icon alert-primary" role="alert">
                          <i class="fe fe-bell mr-2" aria-hidden="true"></i> You have done 5 actions. 
                        </div>
                        <div class="alert alert-icon alert-success" role="alert">
                          <i class="fe fe-check mr-2" aria-hidden="true"></i> The page has been added. 
                        </div>
                        <div class="alert alert-icon alert-danger" role="alert">
                          <i class="fe fe-alert-triangle mr-2" aria-hidden="true"></i> The daily report has failed. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                      </div>
                      <div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-icon alert-primary"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-bell mr-2"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/i&gt;</span> You have done 5 actions. 
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-icon alert-success"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-check mr-2"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/i&gt;</span> The page has been added. 
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-icon alert-danger"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-alert-triangle mr-2"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/i&gt;</span> The daily report has failed. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
<span class="nt">&lt;/div&gt;</span></code></pre>
                      </div>
                      <h3 id="alert-dismissible">Alert dismissible</h3>
                      <p>Add a dismiss button and the <code class="highlighter-rouge">.alert-dismissible</code> class, which adds extra padding to the right of the alert and positions the <code class="highlighter-rouge">.close</code> button. On the dismiss button, add the <code class="highlighter-rouge">data-dismiss="alert"</code> attribute, which triggers the JavaScript functionality. Be sure to use the <code class="highlighter-rouge">&lt;button&gt;</code> element with it for proper behavior across all devices.</p>
                      <div class="example">
                        <div class="alert alert-warning alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert"></button>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                      </div>
                      <div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning alert-dismissible"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span><span class="nt">&gt;&lt;/button&gt;</span>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
<span class="nt">&lt;/div&gt;</span></code></pre>
                      </div>
                      <h3 id="alert-with-avatar">Alert with avatar</h3>
                      <div class="example">
                        <div class="alert alert-avatar alert-primary alert-dismissible">
                          <span class="avatar" style="background-image: url(../demo/faces/male/4.jpg)"></span>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                        <div class="alert alert-avatar alert-success alert-dismissible">
                          <span class="avatar" style="background-image: url(../demo/faces/male/35.jpg)"></span>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                      </div>
                      <div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-avatar alert-primary alert-dismissible"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/male/4.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-avatar alert-success alert-dismissible"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/male/35.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
<span class="nt">&lt;/div&gt;</span></code></pre>
                      </div>
                      <h3 id="alert-with-buttons">Alert with buttons</h3>
                      <div class="example">
                        <div class="alert alert-success alert-dismissible">
                          <button data-dismiss="alert" class="close"></button>
                          <h4>Some Message</h4>
                          <p>
                            Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim
                            voluptate.
                          </p>
                          <div class="btn-list">
                            <button class="btn btn-success" type="button">Okay</button>
                            <button class="btn btn-secondary" type="button">No, thanks</button>
                          </div>
                        </div>
                      </div>
                      <div class="highlight">
                        <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success alert-dismissible"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span> <span class="na">class=</span><span class="s">"close"</span><span class="nt">&gt;&lt;/button&gt;</span>
  <span class="nt">&lt;h4&gt;</span>Some Message<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p&gt;</span>
    Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim
    voluptate.
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-list"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-success"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Okay<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>No, thanks<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                      </div>
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
                    <li class="list-inline-item"><a href="../docs/index.html">Documentation</a></li>
                    <li class="list-inline-item"><a href="../faq.html">FAQ</a></li>
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