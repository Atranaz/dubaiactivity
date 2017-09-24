<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-list"></i> Add New List
        <small>Add / Edit User</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <?php
                    $this->load->helper('form');
                    $this->load->library('form_validation');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
                
                
                
                <div class="box box-primary">
                    <!-- <div class="box-header">
                        <h3 class="box-title">Enter User Details</h3>
                    </div> --><!-- /.box-header -->
                    <!-- form start -->
                    
                <?php 

                echo form_open('cms/offer_list/addList' , 'class="addlist" id="listform"'); ?>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control title required" id="title" name="title" value="<?php set_value('title') ?>" maxlength="128" required="true">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" class="form-control slug required" id="slug"  name="slug" value="<?php set_value('slug') ?>" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select class="form-control required" id="category" name="category" required="true">
                                            <option value="" <?php echo  set_select('myselect', '0', TRUE); ?>>Select Category</option>
                                            <option value="1" <?php echo  set_select('myselect', '1'); ?>>Entertainment</option>
                                            <option value="2" <?php echo  set_select('myselect', '2'); ?>>Education</option>
                                            <option value="3" <?php echo  set_select('myselect', '3'); ?>>Knowledge Base</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="type">Type</label>
                                        <select class="form-control required" id="type" name="type" required="true">
                                            <option value="" <?php echo  set_select('myselect', '0'); ?>>Select Type</option>
                                            <option value="1" <?php echo  set_select('myselect', '1'); ?>>Kids Activities</option>
                                            <option value="2" <?php echo  set_select('myselect', '2'); ?>>Family Activities</option>
                                            <option value="3" <?php echo  set_select('myselect', '3'); ?>>Parent Activities without</option>
                                        </select>
                                    </div>
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category">Company</label>
                                        <select class="form-control required" id="company" name="company" required>
                                            <option value="" <?php echo  set_select('myselect', '0'); ?>>Select Company</option>
                                            <option value="1" <?php echo  set_select('myselect', '1'); ?>>Play It</option>
                                            <option value="2" <?php echo  set_select('myselect', '2'); ?>>Al Ehli Club</option>
                                            <option value="3" <?php echo  set_select('myselect', '3'); ?>>Farari Worl</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="number" class="form-control" id="price" name="price" value="<?php set_value('price') ?>">
                                    </div>
                                    
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                      <div class="form-group">
                                        <label for="description">Desc</label>
                                        <textarea class="form-control" id="description" rows="3" name="description" required="true"></textarea>
                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="options">Select Options</label><br>
                                        <label class="checkbox-inline">
                                          <input name="free" id="free" type="checkbox" value="1" <?php echo set_checkbox('free', '1'); ?> > Is Free
                                        </label>
                                        <label class="checkbox-inline">
                                          <input name="active" id="active" type="checkbox" value="1" required="true" <?php echo set_checkbox('active', '1'); ?>>  Is Active
                                        </label>
                                        <label class="checkbox-inline">
                                          <input name="featured" id="featured" type="checkbox" value="1" <?php echo set_checkbox('featured', '1'); ?>>Is Featured
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                   
                                </div>    
                            </div>
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Save it!" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                <?php echo form_close(); ?>
                </div>
            </div>
            
        </div>    
    </section>
    
</div>
<script type="text/javascript">
    
    function slugify(text) {
    // Source: https://gist.github.com/mathewbyrne/1280286
    return text.toString().toLowerCase()
        .replace(/\s+/g, '-')           // Replace spaces with -
        .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
        .replace(/\-\-+/g, '-')         // Replace multiple - with single -
        .replace(/^-+/, '')             // Trim - from start of text
        .replace(/-+$/, '')             // Trim - from end of text
        .replace(/[\s_-]+/g, '-');      // swap any length of whitespace, underscore, hyphen characters with a single -
}


$('.title').keyup(function(){
    console.log($(this).val());
    $slug = slugify($(this).val());
    $('.slug').val($slug);
});

</script>