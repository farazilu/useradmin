
<div class="block">
   <h1><?php echo __('Forgot password or username'); ?></h1>
   <div class="content">
      <p><?php echo __('Please send me a link to reset my password.'); ?></p>
<?php
echo FORM::open('user/forgot');
echo '<p>'.__('Your email address:').' '.FORM::input('reset_email', '', array('class' => 'text')).'</p>';
?>

<?php
echo FORM::submit(NULL, __('Reset password'));
echo FORM::close();
?>
   </div>
</div>
