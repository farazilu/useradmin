<?php
defined('SYSPATH') or die('No direct script access.');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
   <title><?php echo $title ?></title>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
   <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), "\n" ?>
   <?php foreach ($scripts as $file) echo HTML::script($file), "\n" ?>
   <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
</head>
<body>
   <div id="page">
      <div id="header"><h1>Useradmin for Kohana</h1></div>
      <div id="navigation">
         <ul class="menu">

			<?php
			$session = Session::instance();
			$registerEnabled = Kohana::$config->load('useradmin.register_enabled');

			if (Auth::instance()->logged_in()){
				echo '<li>'.HTML::anchor('admin_user', 'User admin').'</li>';
				echo '<li>'.HTML::anchor('user/profile', 'My profile').'</li>';
				echo '<li>'.HTML::anchor('user/logout', 'Log out').'</li>';
			} else {
				if($registerEnabled)
					echo '<li>'.HTML::anchor('user/register', 'Register').'</li>';
				echo '<li>'.HTML::anchor('user/login', 'Log in').'</li>';
			}
           ?>
         </ul>
      </div>
   <div id="content">
    <?php
     // output messages
     if(Message::count() > 0) {
       echo '<div class="block">';
       echo '<div class="content" style="padding: 10px 15px;">';
       echo Message::output();
       echo '</div></div>';
     }
     echo $content ?>
   </div>
</div>
   
<?=$profile?>
</body>
</html>
