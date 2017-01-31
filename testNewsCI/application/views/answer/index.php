<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Name</strong></td>
        <td><strong>Action</strong></td>
    </tr>
<?php foreach ($answers as $answers_item): ?>
        <tr>
            <td><?php echo $answers_item['A_Name']; ?></td>
            <td>
                <a href="<?php echo site_url('answer/'.$answers_item['A_Id']); ?>">View</a> | 
                <a href="<?php echo site_url('answer/edit/'.$answers_item['A_Id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('answer/delete/'.$answers_item['A_Id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>