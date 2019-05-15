<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Knotch</title>
    <link href="<?=base_url()?>theme/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>theme/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url()?>theme/admin/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>theme/admin/css/style.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <?php
                include 'layouts/sidebar.php';
        ?>
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
       <?php
                include 'layouts/header.php';
        ?>
        </div>
            <div class="wrapper wrapper-content">
        
        
        

            </div>
            <?php
                    include 'layouts/footer.php';
            ?>
        </div>
    </div>
    <!-- Mainly scripts -->
    <script src="<?=base_url()?>theme/admin/js/jquery-2.1.1.js"></script>
    <script src="<?=base_url()?>theme/admin/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>theme/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?=base_url()?>theme/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?=base_url()?>theme/admin/js/plugins/jquery-ui/jquery-ui.min.js"></script>
</body>
</html>
