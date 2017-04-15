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
            <span>Students&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo URL; ?>/students/add">Add Student</a></span>
        </div>

        <div class="widget-content">
			<table class="table">
            	<thead>
                	<th>Name</th>
                    <th>Email Id</th>
                    <th>Action</th>
                </thead>
                <?php
					foreach($students as $student) {
					?>
                    	<tr>
                        	<td><?php echo $student['student_name']; ?></td>
                        	<td><?php echo $student['student_email_id']; ?></td> 
                            <td><a href="<?php echo URL; ?>/students/edit/<?php echo $student['student_id']; ?>">Edit</a>&nbsp;&nbsp;<a href="<?php echo URL; ?>/students/delete/<?php echo $student['student_id']; ?>">Delete</a></td>                           
                        </tr>
                    <?php	
					}
				?>
            </table>
        </div>
    </section>

</div>
</div>