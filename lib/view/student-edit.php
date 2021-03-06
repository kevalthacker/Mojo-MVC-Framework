<?php
/*********************************
MANAGEMANT SYSTEM : CUSTOM MVC FRAMWORK
VERSION : 1.0 BETA
DEVELOPED BY : KEVAL THACKER
WEBSITE : http://adroittechnosys.com/
***********/
?>
<div class="span12">
    <section class="widget">
        <div class="widget-title">
            <span>Edit Student</span>
        </div>

        <div class="widget-content">
			<form class="form-horizontal" method="post">
                <fieldset>
                	<?php echo $msg; ?>
                    <div class="control-group">
                      <label class="control-label" for="focusedInput">Student Name</label>
                      <div class="controls">
                       	<input class="input-xlarge focused" id="s_name" type="text" value="<?php echo $student[0]['student_name'];?>" name="s_name">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="focusedInput">Student Email ID</label>
                      <div class="controls">
                       	<input class="input-xlarge focused" id="s_email_id" type="text" value="<?php echo $student[0]['student_email_id'];?>" name="s_email_id">
                      </div>
                    </div>                     
                    <div class="form-actions">
                       <button type="submit" class="btn btn-primary" name="student_edit" style="width:150px;">Edit Student</button>
                    </div>                    
                 </fieldset>
             </form>         
        </div>
    </section>
</div>
</div>