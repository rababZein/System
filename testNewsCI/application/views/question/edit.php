<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('question/edit/'.$questions_item['Q_Id']); ?>
    <table>
        <tr>
            <td><label for="Q_Name">Name</label></td>
            <td><input type="input" name="Q_Name" size="50" value="<?php echo $questions_item['Q_Name'] ?>" /></td>
        </tr>
      
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit Question" /></td>
        </tr>
    </table>
</form>