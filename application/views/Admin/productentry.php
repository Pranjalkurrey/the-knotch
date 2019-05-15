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
    <link href="<?=base_url()?>theme/admin/css/plugins/uploadmultipleimage/upload.css" rel="stylesheet">
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
               <form role="form">
                        <div class="row">
                            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Category Entry</h3>
                              <div><label>SubCategory</label><select class="form-control m-b" name="account">
                                        <option>SubCategory...</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                    </select>   </div>
                              
                                <div class="form-group"><label>Product</label> <input type="text" placeholder="enter product name.." class="form-control"></div>
                                 <div class="form-group"><label>Price</label> <input type="text" placeholder="enter product price " class="form-control"></div>
                                <div class="form-group"><label>Quantity</label> <input type="text" placeholder="enter product quantity" class="form-control"></div>
                                 <div class="form-group"><label>Size</label> <input type="text" placeholder="enter product size " class="form-control"></div>
                                 <div class="form-group"><label>Description</label> <input type="text" placeholder="enter productdescription.." class="form-control"></div>
                                    <div>
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Add</strong></button>    
                                    </div>
                            </div>
                        
                                   <div class="col-md-6">
                                    <div class="container">
                                     <div class="row">
                                     <div class="col-sm-2 imgUp">
                                       <div class="imagePreview"></div>
                                     <label class="btn btn-primary">
		       Upload Image<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
				    </label>
                               </div><!-- col-2 -->
                           <i class="fa fa-plus imgAdd"></i>
                           </div><!-- row -->
                          </div><!-- container -->
                                   </div>
                           
               </form>
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
    <script>
    
    $(".imgAdd").click(function(){
  $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-2 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
});
$(document).on("click", "i.del" , function() {
	$(this).parent().remove();
});
$(function() {
    $(document).on("change",".uploadFile", function()
    {
    		var uploadFile = $(this);
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){ // set image data as background of div
                //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
            }
        }
      
    });
});
</script>
</body>
</html>
