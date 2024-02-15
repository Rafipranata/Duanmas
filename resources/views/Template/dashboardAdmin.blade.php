<!DOCTYPE html>

<html lang="en" class="light-style layout-compact  layout-menu-fixed     " dir="ltr" data-theme="theme-default"
    data-assets-path="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/"
    data-base-url="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1"
    data-framework="laravel" data-template="horizontal-menu-theme-default-light">


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/layouts/horizontal by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 03:53:19 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard</title>
    <meta name="description"
        content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="0eCEBTosT4fUoOUBm1mZC5xlQ6QVoufdLxSNbJCn">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-laravel-admin-template/">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"
        href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico" />


    <!-- Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');
    </script>
    <!-- End Google Tag Manager -->


    <!-- Include Styles -->
    <!-- $isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
    <!-- BEGIN: Theme CSS-->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../../demo/assets/vendor/fonts/boxiconsc4a7.css?id=87122b3a3900320673311cebdeb618da" />
    <link rel="stylesheet"
        href="../../demo/assets/vendor/fonts/fontawesome8a69.css?id=a2997cb6a1c98cc3c85f4c99cdea95b5" />
    <link rel="stylesheet"
        href="../../demo/assets/vendor/fonts/flag-icons80a8.css?id=121bcc3078c6c2f608037fb9ca8bce8d" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="../../demo/assets/vendor/css/rtl/corea8ac.css?id=55b2a9dfaa009c41df62ca8d16e913a8"
        class="template-customizer-core-css" />
    <link rel="stylesheet"
        href="../../demo/assets/vendor/css/rtl/theme-default4c4b.css?id=9182924a7b965439eca5e189ba43eba1"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../demo/assets/css/demob77a.css?id=69dfc5e48fce5a4ff55ff7b593cdf93d" />
    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="../../demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbare482.css?id=73d641bb8db2475ecafc6c68461ed01b" />
    <link rel="stylesheet"
        href="../../demo/assets/vendor/libs/typeahead-js/typeahead05d2.css?id=de339ead5e9c9e36f12e46cbef7aaffd" />

    <!-- Vendor Styles -->
    <link rel="stylesheet" href="../../demo/assets/vendor/libs/apex-charts/apex-charts.css">


    <!-- Page Styles -->

    <!-- Include Scripts for customizer, helper, analytics, config -->
    <!-- $isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->
    <!-- laravel style -->
    <script src="../../demo/assets/vendor/js/helpers.js"></script>
    <!-- beautify ignore:start -->
  
  <script src="../../demo/assets/vendor/js/template-customizer.js"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../../demo/assets/js/config.js"></script>

  <script>
      window.templateCustomizer = new TemplateCustomizer({
          cssPath: '',
          themesPath: '',
          defaultStyle: "light",
          defaultShowDropdownOnHover: "true", // true/false (for horizontal layout only)
          displayCustomizer: "true",
          lang: 'en',
          pathResolver: function(path) {
              var resolvedPaths = {
                  // Core stylesheets
                  'core.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core.css?id=55b2a9dfaa009c41df62ca8d16e913a8',
                  'core-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core-dark.css?id=d98ae2a03b5b1b05651411ee58ef81a6',

                  // Themes
                  'theme-default.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default.css?id=9182924a7b965439eca5e189ba43eba1',
                  'theme-default-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default-dark.css?id=ae30991ef3f62e7c03ca6f8930843e80',
                  'theme-bordered.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered.css?id=a4f95a927b1e2bcdfd57a3bbfb2bd3d9',
                  'theme-bordered-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered-dark.css?id=2a668deb480284f975db82d0a7277156',
                  'theme-semi-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark.css?id=9c02fb39c47f91b2d198f343fa8b4df7',
                  'theme-semi-dark-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark-dark.css?id=c4b1950a14ffd431f752917b97a0ee51',
              }
              return resolvedPaths[path] || path;
          },
          'controls': ["style", ],
      });
  </script>
</head>

<body>
  
      <!-- Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    

  <!-- Layout Content -->
  <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
  <div class="layout-container">

    <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="container-xxl">
      
      <!--  Brand demo (display only for navbar-full and hide on below xl) -->
            <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1" class="app-brand-link gap-2">
          <span class="app-brand-logo demo"><svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <defs>
    <path d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z" id="path-1"></path>
    <path d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z" id="path-3"></path>
    <path d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z" id="path-4"></path>
    <path d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z" id="path-5"></path>
  </defs>
  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
      <g id="Icon" transform="translate(27.000000, 15.000000)">
        <g id="Mask" transform="translate(0.000000, 8.000000)">
          <mask id="mask-2" fill="white">
            <use xlink:href="#path-1"></use>
          </mask>
          <use fill="var(--bs-primary)" xlink:href="#path-1"></use>
          <g id="Path-3" mask="url(#mask-2)">
            <use fill="var(--bs-primary)" xlink:href="#path-3"></use>
            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
          </g>
          <g id="Path-4" mask="url(#mask-2)">
            <use fill="var(--bs-primary)" xlink:href="#path-4"></use>
            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
          </g>
        </g>
        <g id="Triangle" transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
          <use fill="var(--bs-primary)" xlink:href="#path-5"></use>
          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
        </g>
      </g>
    </g>
  </g>
</svg>
</span>
          <span class="app-brand-text demo menu-text fw-bold">Sneat</span>
        </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
          <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
              </div>
      
      <!-- ! Not required for layout-without-menu -->
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none  ">
              <span class="app-brand-text demo menu-text fw-bold">duanmas</span>
      </div>
      
      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

        
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        




                <!-- Style Switcher -->
        <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <i class='bx bx-sm'></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
            <li>
              <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                <span class="align-middle"><i class='bx bx-sun me-2'></i>Light</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                <span class="align-middle"><i class="bx bx-moon me-2"></i>Dark</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                <span class="align-middle"><i class="bx bx-desktop me-2"></i>System</span>
              </a>
            </li>
          </ul>
        </li>

        </ul>
      </div>

      <!-- Search Small Screens -->
      <div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
        <input type="text" class="form-control search-input  border-0" placeholder="Search..." aria-label="Search...">
        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
      </div>

          </div>
      </nav>
  <!-- / Navbar -->
        <!-- END: Navbar-->


    <!-- Layout page -->
    <div class="layout-page">

      
      

      <!-- Content wrapper -->
      <div class="content-wrapper">
<!--/ Horizontal Menu -->
        
        <!-- Content -->
                  <div class="container-xxl flex-grow-1 container-p-y">
            
            <div class="row">
  <div class="col-lg-8 mb-4 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">Aduan Masyarakat Desa Banjardawa</h5>
            <p class="mb-4">Informasi yang lengkap akan membantu pihak berwenang dalam menanggapi aduan dengan lebih baik.</p>

            
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="../../demo/assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4  order-1">
    <div class="row">
      
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <span class="avatar-initial rounded bg-label-success">
                  <i class='bx bx-check'></i>
              </span>
              </div>
            </div>
            <span>Aduan Diterima</span>
            <h3 class="card-title text-nowrap mb-1">{{ $diterima }} </h3>
            
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between ">
              <div class="avatar flex-shrink-0">
                <span class="avatar-initial rounded bg-label-danger">
                  <i class='bx bx-x'></i>
              </span>
              </div>

            </div>
            <span>Aduan Ditolak</span>
            <h3 class="card-title text-nowrap mb-1">{{ $cancel }}</h3>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Total Revenue -->
  <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Isi Aduan</h5>
      </div>
      <div class="row row-bordered g-0">
        <div class="card-body">
          <form action="{{ route('aduan') }}" method="POST">
            @csrf
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"for="basic-default-name">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" required  name="nama"  id="basic-default-name" placeholder="John Doe" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label"  for="basic-default-company">NIK</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" required  name="nik"  id="basic-default-company" placeholder="ACME Inc." />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-phone">No Telp</label>
              <div class="col-sm-10">
                <input type="text" id="basic-default-phone" required  name="no_tlp"  class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-default-phone" />
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Alamat</label>
              <div class="col-sm-10">
                <textarea id="basic-default-message" required name="alamat" class="form-control"
                    placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?"
                    aria-describedby="basic-icon-default-message2"></textarea>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Aduan</label>
              <div class="col-sm-10">
                <textarea id="basic-default-message" required name="aduan" class="form-control"
                    placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?"
                    aria-describedby="basic-icon-default-message2" style="height: 100px"></textarea>
              </div>
            </div>
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Send</button>
              </div>
            </div>
          </form>
        </div>
       
      </div>
    </div>
  </div>

</div>
<div class="row">
  <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-1">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Search</h5>
      </div>
      <div class="row row-bordered g-0">
        <div class="card-body">
          <form class="d-flex" method="GET" action="{{ route('search') }}">
            <input class="form-control me-2" required type="search" name="query" placeholder="Isi Dengan Nik" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit" >Search</button>
          </form>

          @yield('search')

        </div>
        
      </div>
    </div>
  </div>
  
</div>

          </div>
          <!-- / Content -->

          <!-- Footer -->
                    <!-- Footer-->

<!--/ Footer-->
                    <!-- / Footer -->
          <div class="content-backdrop fade"></div>
        </div>
        <!--/ Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>
    <!-- / Layout Container -->

        <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->
    <!--/ Layout Content -->

  
  
  

  <!-- Include Scripts -->
  <!-- $isFront is used to append the front layout scripts only on the front layout otherwise the variable will be blank -->
  <!-- BEGIN: Vendor JS-->
<script src="../../demo/assets/vendor/libs/jquery/jquery1e84.js?id=0f7eb1f3a93e3e19e8505fd8c175925a"></script>
<script src="../../demo/assets/vendor/libs/popper/popper0a73.js?id=baf82d96b7771efbcc05c3b77135d24c"></script>
<script src="../../demo/assets/vendor/js/bootstrapcfc4.js?id=4648227467e3fd3f4cf976cfb0e43aea"></script>
<script
    src="../../demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar6188.js?id=44b8e955848dc0c56597c09f6aebf89a">
</script>
<script src="../../demo/assets/vendor/libs/hammer/hammer2de0.js?id=0a520e103384b609e3c9eb3b732d1be8"></script>
<script src="../../demo/assets/vendor/libs/typeahead-js/typeahead60e7.js?id=f6bda588c16867a6cc4158cb4ed37ec6"></script>
<script src="../../demo/assets/vendor/js/menu2dc9.js?id=c6ce30ded4234d0c4ca0fb5f2a2990d8"></script>
<script src="../../demo/assets/vendor/libs/apex-charts/apexcharts.js"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="../../demo/assets/js/maind63d.js?id=6bea3f2e092d5fe7327c226f3242f31b"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
<script src="../../demo/assets/js/dashboards-analytics.js"></script>
<!-- END: Page JS-->

</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/layouts/horizontal by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 03:53:21 GMT -->
</html>
