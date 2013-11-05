<div class="block">
   <h1><?php echo __('Password reset'); ?></h1>
   <div class="content">
<?php
echo FORM::open('user/reset');
?>
<ul>
   <li>
      <label><?php echo __('Account email address'); ?>:</label>
      <?php echo FORM::input('reset_email', '', array('class' => 'text')) ?>
   </li>
   <li>
      <label><?php echo __('Password reset token'); ?>:</label>
      <?php echo FORM::input('reset_token', '', array('class' => 'text')) ?>
   </li>
</ul>
<br style="clear:both;">
<?php echo FORM::submit(NULL, __('Reset password')); ?>

<?php echo FORM::close() ?>

   </div>
</div>
