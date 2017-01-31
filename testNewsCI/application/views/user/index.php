<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Name</strong></td>
        <td><strong>Action</strong></td>
    </tr>
<?php foreach ($users as $users_item): ?>
        <tr>
            <td><?php echo $users_item['User_Name']; ?></td>
            <td>
                <a href="<?php echo site_url('user/'.$users_item['User_Id']); ?>">View</a> | 
                <a href="<?php echo site_url('user/edit/'.$users_item['User_Id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('user/delete/'.$users_item['User_Id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>