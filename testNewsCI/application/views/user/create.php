<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('user/create'); ?>    
    <table>
        <tr>
            <td><label for="User_Name">Name</label></td>
            <td><input type="input" name="User_Name" size="50" /></td>
        </tr>
       
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create User" /></td>
        </tr>
    </table>    
</form>