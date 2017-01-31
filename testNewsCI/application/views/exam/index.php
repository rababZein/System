<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Name</strong></td>
        <td><strong>Description</strong></td>
        <td><strong>Action</strong></td>
    </tr>
<?php foreach ($exams as $exams_item): ?>
        <tr>
            <td><?php echo $exams_item['Exam_Name']; ?></td>
            <td><?php echo $exams_item['Exam_Desc']; ?></td>
            <td>
                <a href="<?php echo site_url('exam/'.$exams_item['Exam_Id']); ?>">View</a> | 
                <a href="<?php echo site_url('exam/edit/'.$exams_item['Exam_Id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('exam/delete/'.$exams_item['Exam_Id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>