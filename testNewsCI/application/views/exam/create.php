<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('exam/create'); ?>    
    <table>
        <tr>
            <td><label for="Exam_Name">Name</label></td>
            <td><input type="input" name="Exam_Name" size="50" /></td>
        </tr>
        <tr>
            <td><label for="Exam_Desc">Description</label></td>
            <td><textarea name="Exam_Desc" rows="10" cols="40"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create Exam" /></td>
        </tr>
    </table>    
</form>