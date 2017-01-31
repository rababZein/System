<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('exam/edit/'.$exams_item['Exam_Id']); ?>
    <table>
        <tr>
            <td><label for="Exam_Name">Name</label></td>
            <td><input type="input" name="Exam_Name" size="50" value="<?php echo $exams_item['Exam_Name'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="Exam_Desc">Description</label></td>
            <td><textarea name="Exam_Desc" rows="10" cols="40"><?php echo $exams_item['Exam_Desc'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit Exam" /></td>
        </tr>
    </table>
</form>