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
                     <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Category Entry</h3>
                                
                                <form role="form">
                                    <div class="form-group"><label>Category Name</label> <input type="text" placeholder="Enter category..." class="form-control"></div>
                                    <div class="form-group"><label>SubCategory Name</label> <input type="text" placeholder="Enter subcategory..." class="form-control"></div>
                                    <div>
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Insert</strong></button>
                                       
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-6"><h4>Do You Want to Add New Product?</h4>
                                <p>Go ahead..</p>
                                <p class="text-center">
                                    <a href="<?=base_url('AdminController/product_entry')?>"><i class="fa fa-sign-in big-icon"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>  
                    
            
            <?php
                    include 'layouts/footer.php';
            ?>
        </div>         
    <!-- Mainly scripts -->
    <script src="<?=base_url()?>theme/admin/js/jquery-2.1.1.js"></script>
    <script src="<?=base_url()?>theme/admin/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>theme/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?=base_url()?>theme/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?=base_url()?>theme/admin/js/plugins/jquery-ui/jquery-ui.min.js"></script>
   
</body>
</html>
