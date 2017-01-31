<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('answer/create'); ?>    
    <table>
        <tr>
            <td><label for="A_Name">Name</label></td>
            <td><input type="input" name="A_Name" size="50" /></td>
        </tr>
       
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create Answer" /></td>
        </tr>
    </table>    
</form>