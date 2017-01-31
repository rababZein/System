

<?php
echo '<h2>'.$exams_item['Exam_Name'].'</h2>';
?>
<a id= "previous"  href="<?php echo site_url('exam/previousQuestion/'.$exams_item['Exam_Id'].'/'.$question_item['Q_Id']); ?>">Previous</a> 
<?php
echo $question_item['Q_Name'];

?>
<a id= "next" href="<?php echo site_url('exam/nextQuestion/'.$exams_item['Exam_Id'].'/'.$question_item['Q_Id']);?>">Next</a> 

 <?php
 if (isset($CHOOSEN_ANSWER_ID)) {
 
echo $CHOOSEN_ANSWER_ID['A_Id'];
}
 ?>


<form>
<select class = "ans" id = "c_v" name="Choosen_answer">
	<option value="NONE" ></option>
	<?php 
  foreach ($answers_item as $ans) {  ?>
    <option value="<?php echo $ans['A_Id'] ; ?>" > <?php echo $ans['A_Name'] ; ?> </option>
  
 <?php 	
}
?>
</select>

</form>
<?php
?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
  $("#c_v").val("<?php
 if (isset($CHOOSEN_ANSWER_ID)) {
 
echo $CHOOSEN_ANSWER_ID['A_Id'];
}
 ?>").prop('selected', true);
  });

// system.out.println('hh'); 
 $('#next').attr('href', "<?php echo site_url('exam/nextQuestion/'.$exams_item['Exam_Id'].'/'.$question_item['Q_Id']);?>" +"/"+ document.getElementById("c_v").value);
 $('#previous').attr('href', "<?php echo site_url('exam/previousQuestion/'.$exams_item['Exam_Id'].'/'.$question_item['Q_Id']);?>" +"/"+ document.getElementById("c_v").value);
  
    $('#c_v').change(function(){
        ch_value = $(this).val();

 alert (ch_value);
       $('#next').attr('href', "<?php echo site_url('exam/nextQuestion/'.$exams_item['Exam_Id'].'/'.$question_item['Q_Id']);?>" +"/"+ ch_value);
       $('#previous').attr('href', "<?php echo site_url('exam/previousQuestion/'.$exams_item['Exam_Id'].'/'.$question_item['Q_Id']);?>" +"/"+ ch_value);
    });
</script>



