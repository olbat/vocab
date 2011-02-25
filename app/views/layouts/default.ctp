<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="Description" content="<?php echo Configure::read('Site.name') ?>" />
		<meta name="robots" content="all" />
		<title>
			<?php echo isset($title_for_content) ? $title_for_content . ' - ' : '' ?>
			<?php echo Configure::read('Site.name') .'!' ?>
		</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		
		<?php echo $html->css('application'); ?>
		<?php echo $javascript->link('analytics'); ?>
		<?php echo $scripts_for_layout; ?>
	</head>
	<body>
		<?php echo $this->renderElement('header') ?>
		<?php //$this->flashMessage(); ?>
		<div id="content">
		  <div class="wrapper" id="page_wrapper">
		  	<div id="flash_messages_wrapper">
		  		<?php echo $application->display_flash_messages() ?>
		  	</div>
		
		  	<div id="page">
		    	<div class="tr"></div>
		    	<div class="bl">
		      		<div id="pagecontent">
		        		<?php echo $content_for_layout ?>
		      		</div>
		      		<div class="br"></div>
		    	</div>
		  	</div>
		  </div>
		</div>
		
		<?php echo $this->renderElement('footer') ?>
	</body>
</html>