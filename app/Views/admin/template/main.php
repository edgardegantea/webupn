<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Website</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/fontawesome-free/css/all.min.css'); ?>">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">

  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">

  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/jqvmap/jqvmap.min.css'); ?>">

  <link rel="stylesheet" href="<?= base_url('assets/adminlte/css/adminlte.min.css?v=3.2.0'); ?>">

  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">

  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/daterangepicker/daterangepicker.css'); ?>">

  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/summernote/summernote-bs4.min.css'); ?>">
  <script nonce="e5573e1d-b181-4bfe-a0cc-35eb2825c95f">
    try {
      (function(w, d) {
        ! function(lD, lE, lF, lG) {
          lD[lF] = lD[lF] || {};
          lD[lF].executed = [];
          lD.zaraz = {
            deferred: [],
            listeners: []
          };
          lD.zaraz.q = [];
          lD.zaraz._f = function(lH) {
            return async function() {
              var lI = Array.prototype.slice.call(arguments);
              lD.zaraz.q.push({
                m: lH,
                a: lI
              })
            }
          };
          for (const lJ of ["track", "set", "debug"]) lD.zaraz[lJ] = lD.zaraz._f(lJ);
          lD.zaraz.init = () => {
            var lK = lE.getElementsByTagName(lG)[0],
              lL = lE.createElement(lG),
              lM = lE.getElementsByTagName("title")[0];
            lM && (lD[lF].t = lE.getElementsByTagName("title")[0].text);
            lD[lF].x = Math.random();
            lD[lF].w = lD.screen.width;
            lD[lF].h = lD.screen.height;
            lD[lF].j = lD.innerHeight;
            lD[lF].e = lD.innerWidth;
            lD[lF].l = lD.location.href;
            lD[lF].r = lE.referrer;
            lD[lF].k = lD.screen.colorDepth;
            lD[lF].n = lE.characterSet;
            lD[lF].o = (new Date).getTimezoneOffset();
            if (lD.dataLayer)
              for (const lQ of Object.entries(Object.entries(dataLayer).reduce(((lR, lS) => ({
                  ...lR[1],
                  ...lS[1]
                })), {}))) zaraz.set(lQ[0], lQ[1], {
                scope: "page"
              });
            lD[lF].q = [];
            for (; lD.zaraz.q.length;) {
              const lT = lD.zaraz.q.shift();
              lD[lF].q.push(lT)
            }
            lL.defer = !0;
            for (const lU of [localStorage, sessionStorage]) Object.keys(lU || {}).filter((lW => lW
              .startsWith("_zaraz_"))).forEach((lV => {
              try {
                lD[lF]["z_" + lV.slice(7)] = JSON.parse(lU.getItem(lV))
              } catch {
                lD[lF]["z_" + lV.slice(7)] = lU.getItem(lV)
              }
            }));
            lL.referrerPolicy = "origin";
            lL.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(lD[lF])));
            lK.parentNode.insertBefore(lL, lK)
          };
          ["complete", "interactive"].includes(lE.readyState) ? zaraz.init() : lD.addEventListener(
            "DOMContentLoaded", zaraz.init)
        }(w, d, "zarazData", "script");
      })(window, document)
    } catch (e) {
      throw fetch("/cdn-cgi/zaraz/t"), e;
    };
  </script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> -->

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li> -->
      </ul>

      <ul class="navbar-nav ml-auto">

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

        <!--
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
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
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
  -->


      </ul>
    </nav>


    <aside class="main-sidebar sidebar-dark-primary elevation-4">

      <a href="index3.html" class="brand-link">
        <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8"> -->
        <span class="brand-text font-weight-light">Website UPN</span>
      </a>

      <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <!-- <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div> -->
          <div class="info">
            <a href="#" class="d-block"><?= session()->get('nombre'); ?></a>
          </div>
        </div>



        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


            <!-- 
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v3</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
  -->

            <li class="nav-item">
              <a href="<?= base_url('admin/publicaciones'); ?>" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Publicaciones
                </p>
              </a>
            </li>

              <li class="nav-item">
                  <a href="<?= base_url('admin/carousel'); ?>" class="nav-link">
                      <i class="nav-icon fas fa-image"></i>
                      <p>
                          Carousel
                      </p>
                  </a>
              </li>


            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Configuración
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('admin/usuarios'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Usuarios</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Top Navigation + Sidebar</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/layout/boxed.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Boxed</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Fixed Sidebar</p>
                  </a>
                </li>

              </ul>
            </li>
          </ul>
        </nav>
      </div>

    </aside>


    <div class="content-wrapper">


      <section class="content">
        <div class="container-fluid">

          <?= $this->renderSection('content') ?>

        </div>
      </section>

    </div>


    <aside class="control-sidebar control-sidebar-dark">

    </aside>


    <footer class="main-footer">
      <strong>Developed by edegantea for <a href="http://upn212tez.info">UPN 212 Teziutlán</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">

      </div>
    </footer>
  </div>

  <aside class="control-sidebar control-sidebar-dark">

  </aside>

  </div>


  <script src="<?= base_url('assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>

  <script src="<?= base_url('assets/adminlte/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>

  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>

  <script src="<?= base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

  <script src="<?= base_url('assets/adminlte/plugins/chart.js/Chart.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/sparklines/sparkline.js'); ?>"></script>

  <script src="<?= base_url('assets/adminlte/plugins/jqvmap/jquery.vmap.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script>

  <script src="<?= base_url('assets/adminlte/plugins/jquery-knob/jquery.knob.min.js'); ?>"></script>

  <script src="<?= base_url('assets/adminlte/plugins/moment/moment.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/daterangepicker/daterangepicker.js'); ?>"></script>

  <script src="<?= base_url('assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>">
  </script>

  <script src="<?= base_url('assets/adminlte/plugins/summernote/summernote-bs4.min.js'); ?>"></script>

  <script src="<?= base_url('assets/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>">
  </script>

  <script src="<?= base_url('assets/adminlte/js/adminlte.js?v=3.2.0'); ?>"></script>

  <script src="<?= base_url('assets/adminlte/js/pages/dashboard.js'); ?>"></script>
</body>

</html>