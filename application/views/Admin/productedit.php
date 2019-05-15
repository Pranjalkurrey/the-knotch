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
    <link href="css/plugins/footable/footable.core.css" rel="stylesheet">
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
           
                
                <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#tab-1"> Product list</a></li>
                               
                                <li class=""><a data-toggle="tab" href="#tab-3"> Discount</a></li>
                              
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">

                                           <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">

                           
                        </div>
                    </div>
                   </div>
                                               
                                               
                                     </div>

                                    </div>
                                </div>
                                
                                <div id="tab-3" class="tab-pane">
                                    <div class="panel-body">

                                        <div class="table-responsive">
                                            <table class="table table-stripped table-bordered">

                                                <thead>
                                                <tr>
                                                    <th>
                                                        Group
                                                    </th>
                                                    <th>
                                                        Quantity
                                                    </th>
                                                    <th>
                                                        Discount
                                                    </th>
                                                    <th style="width: 20%">
                                                        Date start
                                                    </th>
                                                    <th style="width: 20%">
                                                        Date end
                                                    </th>
                                                    <th>
                                                        Actions
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <select class="form-control" >
                                                            <option selected>Group 1</option>
                                                            <option>Group 2</option>
                                                            <option>Group 3</option>
                                                            <option>Group 4</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="10">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="$10.00">
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                            <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <select class="form-control" >
                                                            <option selected>Group 1</option>
                                                            <option>Group 2</option>
                                                            <option>Group 3</option>
                                                            <option>Group 4</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="10">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="$10.00">
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <select class="form-control" >
                                                            <option selected>Group 1</option>
                                                            <option>Group 2</option>
                                                            <option>Group 3</option>
                                                            <option>Group 4</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="10">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="$10.00">
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <select class="form-control" >
                                                            <option selected>Group 1</option>
                                                            <option>Group 2</option>
                                                            <option>Group 3</option>
                                                            <option>Group 4</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="10">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="$10.00">
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <select class="form-control" >
                                                            <option selected>Group 1</option>
                                                            <option>Group 2</option>
                                                            <option>Group 3</option>
                                                            <option>Group 4</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="10">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="$10.00">
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <select class="form-control" >
                                                            <option selected>Group 1</option>
                                                            <option>Group 2</option>
                                                            <option>Group 3</option>
                                                            <option>Group 4</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="10">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="$10.00">
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <select class="form-control" >
                                                            <option selected>Group 1</option>
                                                            <option>Group 2</option>
                                                            <option>Group 3</option>
                                                            <option>Group 4</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="10">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="$10.00">
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group date">
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="07/01/2014">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-white"><i class="fa fa-trash"></i> </button>
                                                    </td>
                                                </tr>

                                                </tbody>

                                            </table>
                                        </div>

                                    </div>
                                </div>
                               
                                
                                
                                
                                
                                
                                
                                
                                
                            </div>
                    </div>
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
  
   
    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- FooTable -->
    <script src="js/plugins/footable/footable.all.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();

        });

</body>
</html>
