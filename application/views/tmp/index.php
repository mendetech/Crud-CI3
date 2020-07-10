<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title;?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/backend/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/backend/css/admin-lte.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/backend/css/datatables.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/backend/css/datepicker.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/backend/css/skins-lte.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/backend/css/all.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/backend/css/select2.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/backend/css/font-awesome.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=site_url('vendor/backend/pace/pace.css')?>">

    <link rel="icon" href="<?= site_url('assets/img/0ae9983880644431ae4317f3288a08c7.png'); ?>">

</head>
<body class="hold-transition skin-blue-light sidebar-mini">

    <div class="wrapper">
        <!-- Header Template -->
        <header class="main-header">
            <?php $this->load->view($header); ?>
        </header>
        <!-- End Header template -->

        <!-- Sidebar Template -->
        <aside class="main-sidebar">
            <?php $this->load->view($sidebar); ?>
        </aside>
        <!-- End Sidebar template -->

        <!-- Content -->
        <div class="content-wrapper">
            <?php $this->load->view($content); ?>
        </div>
        <!-- End Content -->

        <!-- Footer -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                Powered By <a href="https://mende.tech"><strong>Kelas</strong>Rekayasa</a>
            </div>
            <strong>Copyright &copy; 2020 <a href="<?=site_url()?>"><?=$this->config->item('client')?></a>.</strong> All rights reserved.
        </footer>
        <!-- End Footer -->
    </div>


    <!-- Script Javascript -->
    <script src="<?=site_url('vendor/backend/js/jquery.min.js')?>"></script>
    <script src="<?=site_url('vendor/backend/js/bootstrap.min.js')?>"></script>
    <script src="<?=site_url('vendor/backend/js/datatables.js')?>"></script>
    <script src="<?=site_url('vendor/backend/js/datepicker.js')?>"></script>
    <script src="<?=site_url('vendor/backend/js/adminlte.min.js')?>"></script>
    <script src="<?=site_url('vendor/backend/js/puguh.js')?>"></script>
    <script src="<?=site_url('vendor/backend/js/select2.min.js')?>"></script>
    <script src="<?=site_url('vendor/backend/pace/pace.min.js')?>"></script>
    
</body>
</html>