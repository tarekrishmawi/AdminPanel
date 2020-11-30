
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$this->fetch("title")?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <?=$this->Html->css([
    "/plugins/fontawesome-free/css/all.min.css",
    "/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css",
    "/plugins/jqvmap/jqvmap.min.css",
    "/dist/css/adminlte.min.css",
    "/plugins/overlayScrollbars/css/OverlayScrollbars.min.css",
    "/plugins/daterangepicker/daterangepicker.css",

])
?>

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- navbar -->
   <?=$this->element("top-nav");?>
  <!-- Sidebar -->
  <?=$this->element("left-sidebar");?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <?=$this->fetch("content")?>
  </div>
  <footer class="main-footer">
    <strong>Copyright &copy; <?php echo date("Y") ?> <a href="/AdminPage">Homepage</a>.</strong>
    All rights reserved by Eng. Tarek Rishmawi.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> Inspired by Admin lte - 3.0.2
    </div>
  </footer>

</div>
<!-- ./wrapper -->

<?=$this->Html->script(
    ["/plugins/jquery/jquery.min.js",
        "/plugins/jquery-ui/jquery-ui.min.js",
        "/plugins/bootstrap/js/bootstrap.bundle.min.js",
        "/plugins/moment/moment.min.js",
        "/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js",
        "/plugins/daterangepicker/daterangepicker.js",
        "/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js",
        "/dist/js/adminlte.js",
        "/dist/js/pages/dashboard.js",

    ]);

?>

</body>
</html>
