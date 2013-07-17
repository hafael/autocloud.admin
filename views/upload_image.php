<?php echo form_open_multipart('upload/do_upload');?>
 
    <!-- make sure you give an array (userfile[]) to the "name" attribute and have attribute "multiple" on it --> 
    <?php echo form_input( array( 'name'=>'userfile[]', 'multiple'=>true ) ); ?><br />
 
    <!-- just, another submit button --> 
    <?php echo form_submit('submit', 'Upload'); ?>

<!-- well, close the form -->
<?php echo form_close();?>