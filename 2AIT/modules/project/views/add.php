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
                                    Add Services
                            </div>
                    </div>
                    <div class="portlet-body form">
                    <?=form_open_multipart("project/add", array('class' => 'form-horizontal'))?>
                            <div class="form-body">
                                    <div class="form-group">
                                        <label for="inputSuccess" class="col-md-3">Service Name*</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="project_id"  required> <!-- input-sm m-bot15  -->
                                                <option value="">Select Service</option>
                                                <option value="1">Air Charter</option>
                                                <option value="2">Aircraft Ground Handling</option>
                                                <option value="3">Aviation Equipment</option>
                                                <option value="4">Student Counseling</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label class="col-md-3 control-label">Title</label>
                                            <div class="col-md-9">
                                                    <?php echo form_input($title);?>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                            <label class="col-md-3 control-label">Subtitle</label>
                                            <div class="col-md-9">
                                                    <?php echo form_input($designation);?>
                                            </div>
                                    </div>
                                      <div class="form-group">
                                            <label class="col-md-3 control-label">Description:</label>
                                            <div class="col-md-9">
                                                    <?php echo form_textarea($word);?>
                                            </div>
                                    </div>

                                    <div class="form-group ">
                                        <label class="control-label col-md-3">Image</label>
                                        <div class="col-md-9">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 200px;">
                                                    <img src="uploads/extra/users/corezit.png" alt=""/>
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">

                                                </div>

                                                <div>
                                                    <span class="btn default btn-file">
                                                    <span class="fileinput-new">
                                                    Select image </span>
                                                    <span class="fileinput-exists">
                                                    Change </span>
                                                    <input type="file" name="image">
                                                    </span>
                                                    <a href="#" class="btn red fileinput-exists" data-dismiss="fileinput">
                                                    Remove </a>
                                                </div>

                                            </div>
                                            <div class="clearfix margin-top-10">
                                                <span class="label label-danger">
                                                    NOTE! 
                                                </span>
                                                 &nbsp; Please Upload JPG or PNG files only. Maximum file size is 2MB or 2048KB.
                                            </div>
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


