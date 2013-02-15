<?php
/**
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/pest_template/css/tmplate.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/pest_template/css/my_style.css" type="text/css" />

<!--[if lte IE 6]>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ieonly.css" rel="stylesheet" type="text/css" />
<![endif]-->
<?php if($this->direction == 'rtl') : ?>
	<link href="<?php echo $this->baseurl ?>/templates/pest_template/css/template_rtl.css" rel="stylesheet" type="text/css" />
<?php endif; ?>

</head>
<body>
<a name="up" id="up"></a>

<div id="container">
  
   <div id="header">
		<div id="header-content">
		
			<div id="header-left">
				<div id="site_title">P<font class="orange">E</font>ST</div>
			</div>
			<div id="header-right">
				<div id="header-languages">
					<a href="#"><img src="templates/pest_template/img/english.jpg"></a>
					<a href="#"><img src="templates/pest_template/img/russian.jpg"></a>
				<?php if($this->countModules('topheader')) : ?>
						<jdoc:include type="modules" name="topheader" style="xhtml" />
				<?php endif; ?>
				</div>
				<br>
				<div id="social">
					<a href="#"><img src="templates/pest_template/img/facebook.jpg"></a>
					<a href="#"><img src="templates/pest_template/img/g+.jpg"></a>
					<a href="#"><img src="templates/pest_template/img/vk.jpg"></a>
					<a href="#"><img src="templates/pest_template/img/twit.jpg"></a>
				
				
					<?php if($this->countModules('bottomheader')) : ?>
							
							<jdoc:include type="modules" name="bottomheader" style="xhtml" />
							<a href="#"><img src="templates/pest_template/img/facebook.jpg"></a>
							<a href="#"><img src="templates/pest_template/img/g+.jpg"></a>
							<a href="#"><img src="templates/pest_template/img/vk.jpg"></a>
							<a href="#"><img src="templates/pest_template/img/twit.jpg"></a>
						
					<?php endif; ?>
				</div>
					
				
			</div>
		</div>
   </div>
   
   <div id="content">
		<?php if($this->countModules('topcontent')) : ?>
				<div id="menu">
					<jdoc:include type="modules" name="topcontent" style="xhtml" />
				</div>
		<?php endif; ?>
    
	
	
				
		
	<div id="content-left-column">
		<div id="logo">
			<img src="templates/pest_template/img/logo.jpg">
		</div>
		<div id="component">
			<jdoc:include type="component" />
		</div>
		
		<div class="news">
			<div class="news-left">
				<img src="templates/pest_template/img/board.jpg">
			</div>
			<div class="news-right">
				<div class="news-right-title">
				Финал AMA Supercross
				</div>
				<div class="news-right-text">
				Вот и закончился чемпионат.....
				</div>
			</div>
		</div>
		<div class="news">
			<div class="news-left">
				<img src="templates/pest_template/img/drift.jpg">
			</div>
			<div class="news-right">
				<div class="news-right-title">
				Финал AMA Supercross
				</div>
				<div class="news-right-text">
				Вот и закончился чемпионат.....
				</div>
			</div>
		</div>
		<div class="news">
			<div class="news-left">
				<img src="templates/pest_template/img/drift.jpg">
			</div>
			<div class="news-right">
				<div class="news-right-title">
				Финал AMA Supercross
				</div>
				<div class="news-right-text">
				Вот и закончился чемпионат.....
				</div>
			</div>
		</div>
		
	</div>
	
	
	<?php if($this->countModules('rightsidebar')) : ?>
		<div id="content-right-column">
					
			<div id="calendar-title">
				<img src="templates/pest_template/img/orange_square_big.jpg">
				Календарь событий
			</div>
			<div id="calendar">
				<jdoc:include type="modules" name="rightsidebar" style="xhtml" />	
			</div>
			<div id="registration">
				<font class="orange">Вход | Регистрация</font>
			</div>
			<div id="popular-title">
				<img src="templates/pest_template/img/orange_square_big.jpg">
				Популярные
			</div>
			<div id="popular">
				
			</div>
		</div>						
	<?php endif; ?>
	
	
	
	
	
	
	
	<div id="news-archive">
		<div id="news-archive-title">
		Архив новостей
		</div>
		<?php if($this->countModules('bottompanel1')) : ?>
				<div id="news-archive-module">	
					<jdoc:include type="modules" name="bottompanel1" style="xhtml" />
				</div>
		<?php endif; ?>
		<br><br><br><br>
	</div>
	<br><br>
	<div id="links">
		<div id="links-left">
			<a href="#"><img src="templates/pest_template/img/wifi.jpg"></a>
		</div>
		
		<?php if($this->countModules('bottompanel2')) : ?>
				<div id="links-right">
					<jdoc:include type="modules" name="bottompanel2" style="xhtml" />
				</div>
		<?php endif; ?>
	</div>
	
	
		
   </div>



   <div id="footer">
		<div id="footer-content">
			<?php if($this->countModules('lFooter')) : ?>
				<div id="footer-left">
					<jdoc:include type="modules" name="lFooter" style="xhtml" />
				</div>
			<?php endif; ?>
			<?php if($this->countModules('rFooter')) : ?>
				<div id="footer-right">
					<jdoc:include type="modules" name="rFooter" style="xhtml" />
				</div>
			<?php endif; ?>
			<?php if($this->countModules('cFooter')) : ?>
				<div id="footer-center">
					<jdoc:include type="modules" name="cFooter" style="xhtml" />
				</div>
			<?php endif; ?>
		</div>
   </div>
   
  </div> 









<jdoc:include type="modules" name="debug" />

</body>
</html>
