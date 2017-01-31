<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('question/create'); ?>    
    <table>
        <tr>
            <td><label for="Q_Name">Name</label></td>
            <td><input type="input" name="Q_Name" size="50" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create Question" /></td>
        </tr>
    </table>    
</form>