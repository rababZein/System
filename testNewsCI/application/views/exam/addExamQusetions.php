<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('exam/addExamQusetions/1'); ?>    
    <table>
        <tr>
            <td><label for="Q_Name">Question</label></td>
            <td><input type="input" name="Q_Name" size="50" /></td>
        </tr>
        <tr>
            <td><label for="A1_Name">First Answer</label></td>
            <td><input type="input" name="A1_Name" size="50" /></td>
        </tr>
        <tr>
            <td><label for="A2_Name">Second Answer</label></td>
            <td><input type="input" name="A2_Name" size="50" /></td>
        </tr>
        <tr>
            <td><label for="A3_Name">Third Answer</label></td>
            <td><input type="input" name="A3_Name" size="50" /></td>
        </tr>
         <tr>
            <td><label for="A4_Name">Fourth Answer</label></td>
            <td><input type="input" name="A4_Name" size="50" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Next Question" /></td>
        </tr>
    </table>    
     <a href="<?php echo site_url('exam'); ?>">Finish</a>
</form>