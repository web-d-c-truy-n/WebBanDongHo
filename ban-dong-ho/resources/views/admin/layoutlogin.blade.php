<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
        <meta name="author" content="Creative Tim">
        <title>Account Admin</title>
        <!-- Favicon -->
        <link rel="icon" href="{{asset('templateAdmin/assets/img/brand/favicon.png')}}" type="image/png">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <!-- Icons -->
        <link rel="stylesheet" href="{{asset('templateAdmin/assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('templateAdmin/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
        <!-- Argon CSS -->
        <link rel="stylesheet" href="{{asset('templateAdmin/assets/css/argon.css?v=1.2.0')}}" type="text/css">
        @yield('css')
      </head>
      <body class="bg-default g-sidenav-hidden">
        <!-- Navbar -->
        <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
          <div class="container">
            <a class="navbar-brand" href="dashboard.html">
              <img src="{{asset('templateAdmin/assets/img/brand/PT.png')}}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
              <div class="navbar-collapse-header">
                <div class="row">
                  <div class="col-6 collapse-brand">
                    <a href="{{URL::to('/admin/login')}}">
                      <img src="{{asset('templateAdmin/assets/img/brand/blue.png')}}">
                    </a>
                  </div>
                  <div class="col-6 collapse-close">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                      <span></span>
                      <span></span>
                    </button>
                  </div>
                </div>
              </div>
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a href="{{URL::to('/admin')}}" class="nav-link">
                    <span class="nav-link-inner--text">Trang chủ</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{URL::to('/admin/login')}}" class="nav-link">
                    <span class="nav-link-inner--text">Đăng nhập</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{URL::to('/admin/register')}}" class="nav-link">
                    <span class="nav-link-inner--text">Đăng kí</span>
                  </a>
                </li>
              </ul>
              <hr class="d-lg-none">
              <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                <li class="nav-item">
                  <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" data-original-title="Like us on Facebook">
                    <i class="fab fa-facebook-square"></i>
                    <span class="nav-link-inner--text d-lg-none">Facebook</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Instagram">
                    <i class="fab fa-instagram"></i>
                    <span class="nav-link-inner--text d-lg-none">Instagram</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Twitter">
                    <i class="fab fa-twitter-square"></i>
                    <span class="nav-link-inner--text d-lg-none">Twitter</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial" target="_blank" data-toggle="tooltip" data-original-title="Star us on Github">
                    <i class="fab fa-github"></i>
                    <span class="nav-link-inner--text d-lg-none">Github</span>
                  </a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
        <!-- Main content -->
        <div class="main-content">
          <!-- Header -->
          <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
            <div class="container">
              <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                  <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                    <h1 class="text-white">Xin chào!</h1>
                  </div>
                </div>
              </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
              <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
              </svg>
            </div>
          </div>
          <!-- Page content -->
          @yield('renderbody')
        </div>
        <!-- Footer -->
        <footer class="py-5" id="footer-main">
          <div class="container">
            <div class="row align-items-center justify-content-xl-between">
              <div class="col-xl-6">
                <div class="copyright text-center text-xl-left text-muted">
                  © 2021 <a href="#" class="font-weight-bold ml-1" target="_blank">AZ</a>
                </div>
              </div>
              <div class="col-xl-6">
                <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                 
                  <li class="nav-item">
                    <a href="#" class="nav-link" target="_blank">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link" target="_blank">Blog</a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </footer>
        <!-- Argon Scripts -->
        <!-- Core -->
        <script src="{{asset('templateAdmin/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('templateAdmin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('templateAdmin/assets/vendor/js-cookie/js.cookie.js')}}"></script>
        <script src="{{asset('templateAdmin/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
        <script src="{{asset('templateAdmin/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
        <!-- Argon JS -->
        <script src="{{asset('templateAdmin/assets/js/argon.js?v=1.2.0')}}"></script>
      <!-- Code injected by live-server -->
      <script type="text/javascript">
          // <![CDATA[  <-- For SVG support
          if ('WebSocket' in window) {
              (function () {
                  function refreshCSS() {
                      var sheets = [].slice.call(document.getElementsByTagName("link"));
                      var head = document.getElementsByTagName("head")[0];
                      for (var i = 0; i < sheets.length; ++i) {
                          var elem = sheets[i];
                          var parent = elem.parentElement || head;
                          parent.removeChild(elem);
                          var rel = elem.rel;
                          if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                              var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                              elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                          }
                          parent.appendChild(elem);
                      }
                  }
                  var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                  var address = protocol + window.location.host + window.location.pathname + '/ws';
                  var socket = new WebSocket(address);
                  socket.onmessage = function (msg) {
                      if (msg.data == 'reload') window.location.reload();
                      else if (msg.data == 'refreshcss') refreshCSS();
                  };
                  if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                      console.log('Live reload enabled.');
                      sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                  }
              })();
          }
          else {
              console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
          }
          // ]]>
      </script>
    @yield('js')
</body>
</html>