
<?php if (! empty($admin) && is_array($admin)) : ?>
<?php foreach ($admin as $admin_item): ?>

        <h3><?= $admin_item['account'] ?></h3>

        <h3><?= $admin_item['password'] ?></h3>
        

<?php endforeach; ?>

<?php else : ?>
    
<h3>No admin</h3>

<p>Unable to find any admin for you.</p>

<?php endif ?>