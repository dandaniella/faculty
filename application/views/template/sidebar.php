<body data-sidebar="dark">

  <!-- <body data-layout="horizontal" data-topbar="dark"> -->
  <!-- Begin page -->
  <div id="layout-wrapper">
    <header id="page-topbar">
      <div class="navbar-header">
        <div class="d-flex">
          <!-- LOGO -->
          <div class="navbar-brand-box">
            <a href="index.html" class="logo logo-dark">
              <span class="logo-sm">
                <img src="<?php echo base_url('assets') ?>/images/logo.svg" alt="" height="22">
              </span>
              <span class="logo-lg">
                <img src="<?php echo base_url('assets') ?>/images/logo-dark.png" alt="" height="17">
              </span>
            </a>

            <a href="index.html" class="logo logo-light">
              <span class="logo-sm">
                <img src="<?php echo base_url('assets') ?>/images/pup/PUPlogo.png" alt="" height="22">
              </span>
              <span class="logo-lg">
                <img src="<?php echo base_url('assets') ?>/images/pup/PUPlogo.png" alt="" height="19">
                <span class="text-white ">PUPQC Faculty Monitoring</span>
              </span>
            </a>
          </div>

          <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
            <i class="fa fa-fw fa-bars"></i>
          </button>
        </div>


        <div class="d-flex">

          <div class="dropdown d-inline-block">

            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <!-- <img class="rounded-circle header-profile-user" src="<?php echo base_url('assets') ?>/images/users/avatar-1.jpg" alt="Header Avatar"> -->
              <i class="fas fa-user-circle"></i>
              <span class=" d-xl-inline-block ms-1" key="t-henry"><?php echo $this->session->userdata('USER_NAME') ?></span>
              <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
              <!-- item-->
              <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="../"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
            </div>
          </div>

          <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
              <i class="bx bx-cog bx-spin"></i>
            </button>
          </div>

        </div>
      </div>
    </header>


    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

      <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
          <!-- Left Menu Start -->
          <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title" key="t-menu">Menu</li>
            <!-- far fa-window-minimize -->
            <li>
              <a href="<?php echo base_url('SystemSetup/dashboard') ?>" class="waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-dashboards">Dashboards</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url('SystemSetup/profile') ?>" class="waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-dashboards">Faculty Profile</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url('SystemSetup/schedule') ?>" class="waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-dashboards">Shedules</span>
              </a>
            </li>
            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-layout"></i>
                <span key="t-layouts">Faculty Performance </span>
              </a>
              <ul class="sub-menu" aria-expanded="true">
                <li>
                  <a href="<?php echo base_url('SystemSetup/research') ?>" class="waves-effect">
                    <i class="bx bx-home-circle"></i>
                    <span key="t-dashboards">Research</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('SystemSetup/extension') ?>" class="waves-effect">
                    <i class="bx bx-home-circle"></i>
                    <span key="t-dashboards">Extension</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('SystemSetup/awards') ?>" class="waves-effect">
                    <i class="bx bx-home-circle"></i>
                    <span key="t-dashboards">Awards</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('SystemSetup/study') ?>" class="waves-effect">
                    <i class="bx bx-home-circle"></i>
                    <span key="t-dashboards">Professional Studies</span>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-layout"></i>
                <span key="t-layouts">Faculty Attendance </span>
              </a>
              <ul class="sub-menu" aria-expanded="true">
                <li>
                  <a href="<?php echo base_url('SystemSetup/rfdp') ?>" class="waves-effect">
                    <i class="bx bx-home-circle"></i>
                    <span key="t-dashboards">RFDP</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('SystemSetup/training') ?>" class="waves-effect">
                    <i class="bx bx-home-circle"></i>
                    <span key="t-dashboards">Trainings</span>
                  </a>
                </li>
                <li>
                  <a href="<?php echo base_url('SystemSetup/university') ?>" class="waves-effect">
                    <i class="bx bx-home-circle"></i>
                    <span key="t-dashboards">University Funcitons</span>
                  </a>
                </li>
              </ul>
            </li>

            <!-- SYSTEM SETUPS -->
            <li class="menu-title" key="t-apps">System Setups</li>
            <!-- User -->
            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="fas fa-minus"></i>
                <span key="t-layouts">User Setups </span>
              </a>
              <ul class="sub-menu" aria-expanded="true">
                <li>
                  <a href="javascript: void(0);" class="has-arrow" key="t-vertical">

                    <i class="fas fa-minus"></i>
                    <span key="t-layouts">User Credentials </span></a>
                  <ul class="sub-menu" aria-expanded="true">
                    <li><a href="<?php echo base_url('SystemSetup/user_cred') ?>" key="t-horizontal">Faculty</a></li>
                    <!-- <li><a href="layouts-hori-topbar-light.html" key="t-topbar-light">Client</a></li> -->
                  </ul>
                </li>
              </ul>
            </li>

            <li>
              <a href="javascript: void(0);" class="has-arrow" key="t-vertical">

                <i class="fas fa-minus"></i>
                <span key="t-layouts">Category</span></a>
              <ul class="sub-menu" aria-expanded="true">
                <li><a href="<?php echo base_url('SystemSetup/classification') ?>" key="t-horizontal">Classification</a></li>
                <!-- <li><a href="layouts-hori-topbar-light.html" key="t-topbar-light">Client</a></li> -->
              </ul>
            </li>


          </ul>
          </li>
          </ul>
        </div>
        <!-- Sidebar -->
      </div>
    </div>
    <!-- Left Sidebar End -->