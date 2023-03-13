<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Advanced form elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="../plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="../plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <div class="nav-link">
        <div class="user-panel d-flex">
          <!-- <div class="info"> -->
            <!-- <a href="#">Alexander Pierce</a> -->
          <!-- </div> -->
          <div class="align-center">
            <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
        </div>
      </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="../../index3.html" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="./dashboard.html" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul> -->
          </li>
          <li class="nav-item" >
            <a href="./monitoring.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Monitoring
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./live-chat.html" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Live Chat
                <!-- <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span> -->
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Messageing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-sidebar-custom.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar <small>+ Custom Area</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul> -->
          </li>
          <li class="nav-item">
            <a href="./messaging.html" class="nav-link active">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
               Messaging
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li>
            </ul> -->
          </li>
          <li class="nav-item">
            <a href="./agent-profile.html" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Agent Profile
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li>
            </ul> -->
          </li>
          <li class="nav-item">
            <a href="./user-profile.html" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
               User Profile
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/advanced.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul> -->
          </li>
          <li class="nav-item">
            <a href="./groups.html" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
               Gropus
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./DirectChat.html" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
               Direct Chat
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./contacts.html" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
               Contacts
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="../calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../kanban.html" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Kanban Board
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/e-commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project-add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project-edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project-detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/faq.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FAQ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/contact-us.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact us</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login & Register v1
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../examples/login.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/register.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/forgot-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/recover-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password v1</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login & Register v2
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../examples/login-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/register-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/forgot-password-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/recover-password-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password v2</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="../examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/legacy-user-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/language-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/500.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/pace.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/blank.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../starter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Search
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../search/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Search</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../search/enhanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enhanced</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="../../iframe.html" class="nav-link">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>Tabbed IFrame Plugin</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">MULTI LEVEL EXAMPLE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   <section class="content">
   <div class="container-fluid">
   <!-- Content Header (Page header) -->

   <div class="row py-3">
     <div class="col"></div>
     <div class="col-auto">
       <div class="row">
         <div class="col-auto">
     <button type="submit" onclick="createTicket()" class="btn btn-primary"><i class="fas fa-plus"></i> New Ticket</button>
         </div>
         <div class="col-auto pr-0">
            <input type="text" name="group" id="group" class="form-control" id="exampleInputEmail1" placeholder="Search Groups">
         </div>
         <div onclick="showMoreFilter()" class="col-auto bg-color">
           <i  class="fas fa-caret-down"></i>
         </div>
         <div class="col-auto pl-0">
         <button class="btn btn-primary"> <i class="fas fa-search"></i></button>
        </div>
       </div>
     </div>
   </div>
   <div class="row">
     <div class="col-sm-12">
          <div id="show-more" style="display: none;" class="card card-light ">
  
 
      
            <div class="card-body">
              <div class="form-group">
                <div class="row">
                  <div class="col-6">
                    <input type="text" name="group" id="group" class="form-control" id="exampleInputEmail1" placeholder="Min # of Msg">
                  </div>
                  <div class="col-6">
                    <select class="form-control" style="width: 100%;" placeholder="Status">
                     <!-- <option selected="selected">All</option> -->
                     <option>Open</option>
                     <option>Pending</option>
                     <option>Closed</option>
                   </select>
                  </div>
                </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-6">
                  <div class="input-group " id="reservationdate" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
                </div>
                <div class="col-6">
                  <div class="input-group " id="reservationdate1" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate1"/>
                    <div class="input-group-append" data-target="#reservationdate1" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
                </div>
              </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-6">
                <select class="form-control" style="width: 100%;" placeholder="Status">
                 <option selected="selected">All</option>
                 <option>Assigned</option>
                 <option>Unassigned</option>
                 <option>Me(User)</option>
               </select>
              </div>
              <div class="col-6">
                <input type="text" name="group" id="group" class="form-control" id="exampleInputEmail1" placeholder="Tags">
              </div>
            </div>
        </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-default">Close</button>
              <button class="btn btn-secondary">Reset</button>
              <button class="btn btn-primary">Search</button>
            </div>
          </div>
     </div>
   </div>
   <div class="row">
    <div class="col-sm-12">
         <div id="create-ticket" style="display: none;" class="card card-light ">
          <div class="card-header">
 
            <h3 class="card-title">Create New Ticket</h3>

          </div>
    
           <div class="card-body">
             <form id="createTicket">
              <div class="form-group">
                <div class="row">
                 <div class="col-6">
                   <label> Properties</label>
                   <select class="form-control" style="width: 100%;" placeholder="Properties">
                    <option selected="selected">All</option>
                    <option>User</option>
                    <option>User 1</option>
                  </select>
                 </div>
                  <div class="col-6">
                    <label>Recipient Name</label>
                    <input type="text" name="name" id="name" class="form-control" id="exampleInputEmail1" placeholder="Min # of Msg">
                  </div>
           
                </div>
            </div>
 <div class="form-group">
   <div class="row">
     <div class="col-6">
       <label>Recipient Email</label>
       <input type="email" name="email" id="email" class="form-control" id="exampleInputEmail1" placeholder="Recipient Email">
     </div>
     <div class="col-6">
       <label>Subject</label>
       <input type="text" name="subject" id="subject" class="form-control" id="exampleInputEmail1" placeholder="Subject">
     </div>
   </div>
 </div>
          <div class="form-group">
            <div class="row">
             <div class="col-6">
               <label>Message</label>
               <input type="text" name="message" id="message" class="form-control" id="exampleInputEmail1" placeholder="Tags">
             </div>
              <div class="col-6">
               <label>Assign to</label>
                <select class="form-control" style="width: 100%;" placeholder="Status">
                 <!-- <option selected="selected">All</option> -->
                 <option>Me(User)</option>
                 <option>User 2</option>
               </select>
              </div>
            </div>
        </div>
        <div class="form-group">
         <div class="row">
           <div class="col-6">
            <label>Priority</label>
             <select class="form-control" style="width: 100%;" placeholder="Status">
              <!-- <option selected="selected">All</option> -->
              <option>Highest</option>
              <option>High</option>
              <option>Medium</option>
              <option>Low</option>
              <option>Lowest</option>
            </select>
           </div>
           <div class="col-6">
             <label>Tags</label>
             <input type="text" name="tag" id="tag" class="form-control" id="exampleInputEmail1" placeholder="Tags">
            </div>
         </div>
     </div>
     <div class="form-group">
       <div class="row">
         <div class="col-6">
          <label>Attachment</label>
          <div class="custom-file">
           <input type="file" class="custom-file-input" id="customFile">
           <label class="custom-file-label" for="customFile">Choose file</label>
         </div>
         </div>
       </div>
   </div>
             </form>

             <div style="display: none;" id="required-fields">
               <span style="color:red">please enter name , email , subject</span>
             </div>

           </div>
           <div class="card-footer">
            <button onclick="cancelCreateTicket()" class="btn btn-default">Cancel</button>
            <button onclick="CreateTicket()" class="btn btn-primary">Create</button>
          </div>
         </div>
    </div>
  </div>
  <div class="row">

    <div class="col-sm-12">
 
  
      <div id="ticket" style="display: none;"  class="card card-light ">
  
        <div class="card-header">
              <span>#1 : User </span>
          <div class="card-tools">
            <button class="btn btn-tool">
              <i class="fas fa-info-circle"></i>
            </button>
            <button onclick="closeticketDetails()" class="btn btn-tool">
              <i class="fas fa-window-close"></i>
            </button>
          </div>
        </div>
  
        <div class="card-body">
          <!-- <div id="showFilter">
          </div> -->
          <div class="row">
            <div class="col-8">
            <div class="card">
              <div class="card-body">
                <div class="direct-chat-messages"  id="message-area">
                  <div class="date-container">
                    <div class="line"></div>
                    <div class="date">Tuesday</div>
                  </div>
                  <div class="direct-chat-msg">
                    <p> <b>Me</b></p>
                    <!-- <div class="clear"></div> -->
                    <div class="direct-chat-infos clearfix">
                      <div class="direct-chat-name float-left">Hello</div>
                      <div class="direct-chat-timestamp float-right">14:05</div>
                    </div>
  
                    <div class="direct-chat-infos clearfix">
                      <div class="direct-chat-name float-left">Good Morning</div>
                      <div class="direct-chat-timestamp float-right">16:15</div>
                    </div>
  
                  </div>
                  <div class="date-container">
                    <div class="line"></div>
                    <div class="date">Today</div>
                  </div>
                  <div class="direct-chat-msg">
                    <p> <b>Me</b></p>
                    <!-- <div class="clear"></div> -->
                    <div class="direct-chat-infos clearfix">
                      <div class="direct-chat-name float-left">How are you ?</div>
                      <div class="direct-chat-timestamp float-right">14:05</div>
                    </div>
                  </div>
                </div>
           
              </div>
              <div class="card-footer">
                <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill" href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home" aria-selected="true">Message</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-content-above-profile-tab" data-toggle="pill" href="#custom-content-above-profile" role="tab" aria-controls="custom-content-above-profile" aria-selected="false">Notes</a>
                  </li>
                </ul>
               
                <div class="tab-content" id="custom-content-above-tabContent">
                  <div class="tab-pane fade show active" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
                    <div class="input-group">
                      <input type="text" id="typing-box" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-append">
                        <button   class="btn btn-primary" onclick="sendMessage()">Send</button>
                      </span>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel" aria-labelledby="custom-content-above-profile-tab">
                    <div class="input-group">
                      <input type="text" id="note" name="note" placeholder="Add Private Note ..." class="form-control">
                      <span class="input-group-append">
                        <button   class="btn btn-primary" onclick="sendNote()">Send</button>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- <div class="input-group">
                  <input type="text" id="typing-box" name="message" placeholder="Type Message ..." class="form-control">
                  <span class="input-group-append">
                    <button   class="btn btn-primary" onclick="sendMessage()">Send</button>
                  </span>
                </div> -->
            </div>
            </div>
            </div>
            <div class="col-4">
              <div class="card" style="height: 475px;">
                <div class="card-body">
             
                  <div class="row py-1" >
                    <div class="col-4">
                      <b>Name </b>
                    </div>
                    <div class="col-1">
                      :
                    </div>
                    <div class="col-7">
                      <span>User</span>
                    </div>
                  </div>
                  <div class="row py-1">
                    <div class="col-4">
                      <b>Email  </b>
                    </div>
                    <div class="col-1">
                      :
                    </div>
                    <div class="col-7">
                      <span>user@gmail.com</span>
                    </div>
                  </div>
          
                  <div class="row py-1">
                    <div class="col-4">
                      <b>Created On  </b>
                    </div>
                    <div class="col-1">
                      :
                    </div>
                    <div class="col-7">
                      <span>August 27 2021, 10:59</span>
                    </div>
                  </div>
                  <div class="row py-1">
                    <div class="col-4">
                      <b>Created By  </b>
                    </div>
                    <div class="col-1">
                      :
                    </div>
                    <div class="col-7">
                      <span>User</span>
                    </div>
                  </div>
                  <div class="row py-1">
                    <div class="col-4">
                      <b>Status  </b>
                    </div>
                    <div class="col-1">
                      :
                    </div>
                    <div class="col-7">
                      <select class="form-control" style="width: 100%;" placeholder="Status">
                        <!-- <option selected="selected">All</option> -->
                        <option>Open</option>
                        <option>Pending</option>
                        <option>Closed</option>
                      </select>
                    </div>
                  </div>
                  <div class="row py-1">
                    <div class="col-4">
                      <b>Priority  </b>
                    </div>
                    <div class="col-1">
                      :
                    </div>
                    <div class="col-7">
                      <select class="form-control" style="width: 100%;" placeholder="Status">
                        <!-- <option selected="selected">All</option> -->
                        <option>Highest</option>
                        <option>High</option>
                        <option>Medium</option>
                        <option>Low</option>
                        <option>Lowest</option>
                      </select>
                    </div>
                  </div>
                  <div class="row py-1">
                    <div class="col-4">
                      <b>Assignee  </b>
                    </div>
                    <div class="col-1">
                      :
                    </div>
                    <div class="col-7">
                      <select class="form-control" style="width: 100%;" placeholder="Properties">
                        <option selected="selected">All</option>
                        <option>User</option>
                        <option>User 1</option>
                      </select>
                    </div>
                  </div>
  
                </div>
              </div>
       
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </div>
   <div id="ticket-table" class="row">

   <div class="col-sm-12">

 
     <div class="card card-light ">
 
       <div class="card-header">
 <div class="row">
   <div class="col">
    <div class="row">
      <div class="col">
        <span>All</span>
      </div>
      <div class="col">
       <span>Mine</span>
     </div>
    </div>
   </div>
   <div class="col-auto">
    <div class="form-check">
      <input class="form-check-input" type="checkbox">
      <label class="form-check-label">Chat</label>
    </div>

   </div>
   <div class="col-auto">
     
    <div class="form-check">
      <input class="form-check-input" type="checkbox">
      <label class="form-check-label">Ticket</label>
    </div>
   </div>
   <div class="col-auto float-right">
    <select class="form-control form-control-sm" style="width: 100%;" placeholder="Status">
      <!-- <option selected="selected">All</option> -->
      <option>Any</option>
      <option>Pending</option>
      <option>Closed</option>
    </select>
   </div>
   <div class="col-auto  float-right">
     <span>open</span>
   </div>
   <div class="col-auto  float-right">
    <select class="form-control form-control-sm" style="width: 100%;" placeholder="Status">
      <!-- <option selected="selected">All</option> -->
      <option>Updated On</option>
      <option>Created On</option>
      <option>Priority</option>
    </select>
   </div>
   <!-- <div class="col-auto">
    <div class="card-tools">
           
      <button onclick="filter()" class="btn btn-tool">
          
        <i class="fas fa-filter"></i>
      </button>
      <button onclick="sleepmode()" class="btn btn-tool">
        <i class="fas fa-moon"></i>
      </button>
    </div>
   </div> -->
 </div>
     
 
      
       </div>
       <div id="message-table" style="display: block;" class="card-body align-center">
        <table class="table">
       
          <tbody>
            <tr onclick="openTicketDetails()" class="border-0">
              <td class="border-0"><img src="../dist/img/user2-160x160.jpg" style="height: 24px;width: 24px;" class="img-circle" alt="User Image"></td>
              <td class="border-0"><b> User </b> user@gmail.com </td>
          <td class="border-0"><i class="fas fa-ticket-alt"></i></td>
           
              <td class="border-0"><span class="badge bg-danger">Open</span></td>
              <td class="border-0">13.34</td>
            </tr>
          </tbody>
        </table>
      </div>
       <div id="noMessage" style="display: none;" class="card-body align-center">
      <span> 
         No Open Messages
      </span>       </div>
     </div>
   </div>
 </div>
</div>
</section>
</div>
  <!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer> -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="../plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="../plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    $('#reservationdate1').datetimepicker({
        format: 'L'
    });
    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>

<script>

  function showMoreFilter() {
    console.log(document.getElementById('show-more').style.display);
    if(document.getElementById('show-more').style.display=="none"){
      document.getElementById('show-more').style.display="block"
      document.getElementById('create-ticket').style.display="none"
    }
    else {
      document.getElementById('show-more').style.display="none"
    }
  }
  
  function createTicket() {
    console.log(document.getElementById('create-ticket').style.display);
    if(document.getElementById('create-ticket').style.display=="none"){
      document.getElementById('create-ticket').style.display="block"
      document.getElementById('show-more').style.display="none"
    }
    // else {
    //   document.getElementById('create-ticket').style.display="none"
    // }
  }

  function cancelCreateTicket() {
    document.getElementById('create-ticket').style.display="none"
  }

  function CreateTicket() {
       var form = document.getElementById('createTicket')
   const name = form.elements['name'].value;
   const email = form.elements['email'].value;
   const subject = form.elements['subject'].value;

   if(name == "" && email == "" && subject == "" ) {
    document.getElementById('required-fields').style.display="block"

   }
   else {
   document.getElementById('message-table').style.display="block"

   document.getElementById('create-ticket').style.display="none"
   document.getElementById('noMessage').style.display="none"
   }

  }

  function closeticketDetails() {
    document.getElementById('ticket').style.display="none"
    document.getElementById('ticket-table').style.display="block"
  }

  function openTicketDetails() {
    document.getElementById('ticket').style.display="block"

document.getElementById('create-ticket').style.display="none"
document.getElementById('ticket-table').style.display="none"
  }
  function sendMessage() {
				var message = document.getElementById("typing-box").value;
				// var html = '<div class="message-box my-message-box">' +
				// 				'<div class="message my-message"> ' + message + ' </div>' +
				// 				'<div class="separator"></div>' +
				// 			'</div>';
        var today = new Date();
 
        if(message == "") {

        }
        else {
          var time = today.getHours() + ":" + today.getMinutes();
            var html   = '<div class="direct-chat-infos clearfix">' +
                    '<div class="direct-chat-name float-left">' + message +'</div>'+
                   '<div class="direct-chat-timestamp float-right">'+time+'</div>'+
                  '</div>'
							
				document.getElementById("message-area").innerHTML += html;
				document.getElementById("typing-box").value = "";
       
				console.log("message is",message , time)
        }
         

				// socket.emit('codeboard-message', message);
			}
  
      function sendNote() {
				var note = document.getElementById("note").value;
				// var html = '<div class="message-box my-message-box">' +
				// 				'<div class="message my-message"> ' + message + ' </div>' +
				// 				'<div class="separator"></div>' +
				// 			'</div>';
        var today = new Date();

        if(note == "") {

        }
        else {
          var time = today.getHours() + ":" + today.getMinutes();
            var html   = '<div class="direct-chat-infos clearfix">' +
                    '<div class="direct-chat-name note float-left">' + note +'</div>'+
                   '<div class="direct-chat-timestamp float-right">'+time+'</div>'+
                  '</div>'
							
				document.getElementById("message-area").innerHTML += html;
				document.getElementById("note").value = "";
       
				console.log("message is",message , time)
        }


				// socket.emit('codeboard-message', message);
			}
  
      
  </script>
<style>
  .center {
      display: flex;
  -webkit-box-direction: normal;
  -webkit-box-orient: vertical;
  -moz-box-direction: normal;
  -moz-box-orient: vertical;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  height: 100%;
  margin: 0 auto;
  padding: 100px 30px 10px;
  max-width: 560px;
  box-sizing: border-box;
  overflow: hidden;
  }

  .fas-close-icon {
  height: 28px;
  line-height: 28px;
}




.align-center {
  text-align: center;
}

.bg-color {
  background-color: white;
  padding-top: 4px;
}

.agent-status-container {
      height: 30px;
      line-height: 32px;
      text-align: center;
      display: inline-block;
      vertical-align: top;
    }

    .agent-status.online {
      background: #54ce3c;
      display: inline-block;
      border-radius: 50%;
      margin-right: 7px;
      padding: 5px;
      width: auto !important;
    }

    .line {
      width: 100%;
      height: 3px;
      position: absolute;
      border-top: 1px solid #ddd;
      width: 100%;
      top: .6rem;
      margin: 0;
    }

    .date {
      color: #555459;
      width: 100px;
      text-align: center;
      margin: 0 auto;
      background: #fff;
      padding: 0 1rem;
      display: inline-block;
      position: relative;
    }

    .date-container {
      position: relative;
      text-align: center;
      background: #fff;
      width: 100%;
    }

    .direct-chat-messages {
      -webkit-transform: translate(0, 0);
      transform: translate(0, 0);
      height: 475px;
      overflow: auto;
      padding: 10px;
    }


    .conversation-block {
      padding: 10px 0;
      /* border-top: 1px dashed #d3d3d3; */
      white-space: pre-line;
    }

    .conversation-content {
      margin-right: 55px;
      word-wrap: break-word;
      padding-bottom: 4px;
    }

    .note {
      color : #007bff
    }


</style>
</body>
</html>
