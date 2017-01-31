<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('user/edit/'.$users_item['User_Id']); ?>
    <table>
        <tr>
            <td><label for="User_Name">Name</label></td>
            <td><input type="input" name="User_Name" size="50" value="<?php echo $users_item['User_Name'] ?>" /></td>
        </tr>
      
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit User" /></td>
        </tr>
    </table>
</form>