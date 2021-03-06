<script type="text/javascript" src="assets/redactor/fontsize.js"></script>
<script type="text/javascript" src="assets/redactor/fontfamily.js"></script>
<script type="text/javascript" src="assets/redactor/fullscreen.js"></script>
<script type="text/javascript" src="assets/redactor/fontcolor.js"></script>

<script type="text/javascript" src="assets/redactor/redactor.min.js"></script>
<link rel="stylesheet" href="assets/redactor/css/redactor.css" />

<link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"/>
<script type="text/javascript" src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
    
    $(document).ready(function(){
            $('#redactor_content').redactor({
                    plugins: ['fontsize', 'fontfamily', 'fontcolor'],
                    imageUpload : '<?=site_url()?>fileupdown/image_upload'
            });
            $('.date-picker').datepicker();
            $("#add_attached_file").click(function(){
                $('<div class="form-group"><div class="col-md-offset-3 col-md-4"><?php echo form_input($attachedName);?></div><div class="col-md-5"><input type="file" name="attached[]"></div></div>').appendTo("#attached");
            });
        });
        
</script>
<script type="text/javascript">
	$(document).ready(
		function()
		{
			$('#redactor_content,#re').redactor({
                                plugins: ['fontsize', 'fontfamily', 'fontcolor'],
                                imageUpload : '<?=site_url()?>fileupdown/image_upload'
			});
		}
	);
</script>
<link rel="stylesheet" type="text/css" href="assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
<script type="text/javascript" src="assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>

<div class="row">    
    <div class="col-md-12 ">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet box blue">
                    <div class="portlet-title">
                            <div class="caption">
                                    Update Marquee
                            </div>
                    </div>
                    <div class="portlet-body form">
                              <?=form_open_multipart(uri_string(), array('class' => 'form-horizontal'))?>
                                    <div class="form-body">
                                            <div class="form-group">
                                                    <label class="col-md-3 control-label">Title</label>
                                                    <div class="col-md-9">
                                                            <?php echo form_input($title);?>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                    <label class="col-md-3 control-label">Words</label>
                                                    <div class="col-md-9">
                                                            <?php echo form_input($word);?>
                                                    </div>
                                            </div>
                                          
                                    </div>
                                    <div class="form-actions">
                                            <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" class="btn green">Submit</button>
                                                            <button type="reset" class="btn default">Reset</button>
                                                    </div>
                                            </div>
                                    </div>
                            <?php echo form_close();?>
                    </div>
            </div>
    </div>
</div>


