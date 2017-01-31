<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Name</strong></td>
       
        <td><strong>Action</strong></td>
    </tr>
<?php foreach ($questions as $questions_item): ?>
        <tr>
            <td><?php echo $questions_item['Q_Name']; ?></td>
            <td>
                <a href="<?php echo site_url('question/'.$questions_item['Q_Id']); ?>">View</a> | 
                <a href="<?php echo site_url('question/edit/'.$questions_item['Q_Id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('question/delete/'.$questions_item['Q_Id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>