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
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/pest_template/css/style.css" type="text/css" />

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
				<div id="site_title">
					P<span class="orange">E</span>ST
				</div>
			</div>
			<div id="header-right">
				<div id="header-languages">
					<?php if($this->countModules('topheader')) : ?>
						<jdoc:include type="modules" name="topheader" style="xhtml" />
					<?php endif; ?>
				</div>
				<br />
				<div id="social">
					<?php if($this->countModules('bottomheader')) : ?>
							<jdoc:include type="modules" name="bottomheader" style="xhtml" />
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div id="content">
		<div id="menu">
			<?php if($this->countModules('topcontent')) : ?>
					<jdoc:include type="modules" name="topcontent" style="xhtml" />
			<?php endif; ?>
		</div>
		<div id="content-left-column">
			<div id="logo">
				
			</div>
			<div id="component">
				<jdoc:include type="component" />
			</div>
			
		</div>
		<div id="content-right-column">
			<?php if($this->countModules('rightsidebar')) : ?>
				
					<jdoc:include type="modules" name="rightsidebar" style="xhtml" />	
				
			<?php endif; ?>
		</div>
		
		<div id="archive">
			<?php if($this->countModules('bottompanel1')) : ?>
					<jdoc:include type="modules" name="bottompanel1" style="xhtml" />
			<?php endif; ?>
			
		</div>
		<div id="links">
			<?php if($this->countModules('bottompanel2')) : ?>
					<jdoc:include type="modules" name="bottompanel2" style="xhtml" />
			<?php endif; ?>
		</div>	
    </div>
	<div id="footer">
		<div id="footer-content">
			<div id="footer-left">
				<?php if($this->countModules('lFooter')) : ?>
					<jdoc:include type="modules" name="lFooter" style="xhtml" />
				<?php endif; ?>
		    </div>	
			<div id="footer-right">
				<?php if($this->countModules('rFooter')) : ?>
					<jdoc:include type="modules" name="rFooter" style="xhtml" />
				<?php endif; ?>
		    </div>
			<div id="footer-center">
				<?php if($this->countModules('cFooter')) : ?>
					<jdoc:include type="modules" name="cFooter" style="xhtml" />
			    <?php endif; ?>
				
		    </div>
		</div>
    </div>
	<div id="content-company-name">
		<div id="company-name">
			Сделано в студии REDSTAR
		</div>
	</div>
</div> 


<jdoc:include type="modules" name="debug" />

</body>
</html>
