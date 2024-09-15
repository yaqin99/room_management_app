<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Room Management App | Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  	<meta name="csrf-token" content="{{ csrf_token() }}">


  <!-- Favicons -->
  <link href="/AdminAssets/img/anu.png" rel="icon">
  <link href="/AdminAssets/img/anu.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <!-- Google Fonts -->
  
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="/AdminAssets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/AdminAssets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/AdminAssets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/AdminAssets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/AdminAssets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/AdminAssets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/AdminAssets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

  <!-- Template Main CSS File -->
  <link href="/AdminAssets/css/style.css" rel="stylesheet">

  <style>
    .swal-button--confirm {
      background-color: #DD6B55;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('admin.component.sideBar')
  @include('admin.component.navBar')
  <!-- End Sidebar-->
  @include('sweetalert::alert')

  @yield('main')
  

  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Fakultas Teknik
        Universitar Annuqayah</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
     
      Programed by <a >Daifal Manun</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/AdminAssets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/AdminAssets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/AdminAssets/vendor/chart.js/chart.umd.js"></script>
  <script src="/AdminAssets/vendor/echarts/echarts.min.js"></script>
  <script src="/AdminAssets/vendor/quill/quill.min.js"></script>
  <script src="/AdminAssets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/AdminAssets/vendor/tinymce/tinymce.min.js"></script>
  <script src="/AdminAssets/vendor/php-email-form/validate.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 
  <!-- Template Main JS File -->
  <script src="AdminAssets/js/main.js"></script>
  
  
</body>

</html>