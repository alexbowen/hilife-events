<?php include_once (APP_ROOT . '/lib/notify.php'); ?>

<ul class="notifications">
<?php foreach (Notify::queue() as $notification) { ?>
  <li class="notification <?php echo $notification['type']; ?>"><?php echo $notification['message']; ?></li>
<?php } ?>
</ul>

<?php Notify::flush(); ?>
