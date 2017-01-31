<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('answer/edit/'.$answers_item['A_Id']); ?>
    <table>
        <tr>
            <td><label for="A_Name">Name</label></td>
            <td><input type="input" name="A_Name" size="50" value="<?php echo $answers_item['A_Name'] ?>" /></td>
        </tr>
      
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit Answer" /></td>
        </tr>
    </table>
</form>