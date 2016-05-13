<?php
/**
 * @package     Clementine
 * @subpackage  Template File
 *
 * @copyright   Copyright (C) 2005 - 2016 Joomlashack. Meritage Assets.  All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * Do not edit this file directly. You can copy it and create a new file called
 * 'custom.php' in the same folder, and it will override this file. That way
 * if you update the template ever, your changes will not be lost.
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

?>
<doctype>
<html>
	<head>
		<w:head />
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
	</head>
	<body class="<?php echo $wrightBodyClass . $sidebarsExist . $voyageView . ' mode-' . $wrightContainerClass; ?>">

		<?php
			if ($this->countModules('lateral-menu'))
				:
		?>
		<div id="lateral-menu" class="span4 pull-none bg_color_six">
			<div id="lateral-menu-container">
				<w:module type="none" wrapClass="inner-menu" name="lateral-menu" chrome="xhtml" />
			</div>
		</div>
		<?php
			endif;
		?>

		<div class="total relative">
			<div class="bg_color_one padding-none shadow-bottom">
				<?php
					if ($this->countModules('toolbar'))
						:
				?>
				<div class="wrappToolbar <?php  echo $wrappToolbarClass; ?>">
		             <w:nav containerClass="<?php echo $containerToolbarClass . $wrightContainerClass; ?>" wrapClass="navbar-fixed-top" type="toolbar" name="toolbar" />
				</div>
				<?php
					endif;
				?>

				<?php
					if (!$clementineToolbarDisplayed)
						:
				?>
                <div class="visible-desktop top-menu-toggler relative <?php echo $wrightContainerClass; ?>">
                    <button class="toolbar-collapse-btn">
                    	<i class="icon-angle-down"></i>
                    </button>
                </div>
				<?php
					endif;
				?>

				<?php
					if ($this->countModules('lateral-menu'))
					:
				?>
				<div class="<?php echo $wrightContainerClass; ?> trigger-lateral-menu">
					<a class="btn btn-navbar pull-right" id="trigger-lateral-menu">
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </a>
				</div>
				<?php
					endif;
				?>
				<!-- header -->
				<header id="header">
					<div class="<?php echo $wrightContainerClass; ?>">
						<div class="row-fluid clearfix <?php echo $logoClass; ?>">
							<w:logo name="top" />
							<div class="clear"></div>
						</div>
					</div>
				</header>
				<!-- featured -->
				<?php
					if ($this->countModules('featured'))
						:
				?>
				<div id="featured">
				    <div class="bg-wrapp">
			            <div class="bg-wrapp-inner">
			                <img id="bg-header" src="<?php echo JURI::root(true) . $bg ?>" />
			            </div>
			        </div>
					<div class="<?php echo $wrightContainerClass; ?>">
						<div class="row-fluid">
							<w:module type="none" name="featured" chrome="xhtml" />
						</div>
					</div>
				</div>
				<?php
					endif;
				?>

				<!-- grid-top -->
				<?php
					if ($this->countModules('grid-top'))
					:
				?>
				<div class="<?php echo $wrightContainerClass; ?>">
					<div id="grid-top">
						<w:module type="row-fluid" name="grid-top" chrome="wrightflexgrid" />
					</div>
				</div>
				<?php
					endif;
				?>
			</div>
			<div class="bg_color_five <?php echo $containerGridTop2Content; ?>">
				<div class="<?php echo $wrightContainerClass; ?>">
					<?php
						if ($this->countModules('grid-top2'))
							:
					?>
					<!-- grid-top2 -->
					<div id="grid-top2">
						<w:module type="row-fluid" name="grid-top2" chrome="wrightflexgrid" />
					</div>
					<?php
						endif;
					?>

			        <?php
						if ($wrightSingleArticleDisplay)
							:
					?>
		            <div class="full-image">
		                <img src="<?php echo $wrightSingleArticleImage ?>" alt="<?php echo $wrightSingleArticleAlt ?>" />
		            </div>
		            <?php
						endif;
					?>
		           </div>
				<?php
					if ($showContainerMain)
						:
				?>
				<div class="<?php echo $wrightContainerClass; ?> container-main">
				<?php
					endif;
				?>
					<div id="main-content" class="row-fluid">
						<!-- sidebar1 -->
						<aside id="sidebar1">
							<w:module name="sidebar1" chrome="xhtml" />
						</aside>
						<!-- main -->
						<section id="main">
							<?php
								if ($voyageView == ' category' || $voyageView == ' featured')
									:
							?>
							<div class="<?php echo $wrightContainerClass; ?>">

							<?php
								endif;
							?>

							<?php
								if ($this->countModules('above-content'))
									:
							?>
							<!-- above-content -->
							<div id="above-content">
								<w:module type="none" name="above-content" chrome="xhtml" />
							</div>
							<?php
								endif;
							?>

							<?php
								if ($this->countModules('breadcrumbs'))
									:
							?>
							<!-- breadcrumbs -->
							<div id="breadcrumbs">
									<w:module type="single" name="breadcrumbs" chrome="none" />
							</div>

							<?php
								endif;
							?>
							<?php
								if ($voyageView == ' category' || $voyageView == ' featured')
									:
							?>
					        </div>
							<?php
								endif;
							?>

							<!-- component -->
							<w:content />
							<?php
								if ($this->countModules('below-content'))
									:
							?>
							<!-- below-content -->
							<div id="below-content">
								<w:module type="none" name="below-content" chrome="xhtml" />
							</div>
							<?php
								endif;
							?>
						</section>
						<!-- sidebar2 -->
						<aside id="sidebar2">
							<w:module name="sidebar2" chrome="xhtml" />
						</aside>
					</div>
				<?php
					if ($showContainerMain)
						:
				?>
				</div>
				<?php
					endif;
				?>
			</div>

			<?php
				if ($this->countModules('grid-bottom'))
					:
			?>
            <div class="shadow-top">
                <div class="bg_color_two">
                    <div class="<?php echo $wrightContainerClass; ?>">
                        <div class="row-fluid">
                            <div id="grid-bottom">
                                <w:module type="row-fluid" name="grid-bottom" chrome="wrightflexgrid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php
				endif;
			?>
			<?php
				if ($this->countModules('grid-bottom2'))
					:
			?>
			<div class="bg_color_one">
				<div class="<?php echo $wrightContainerClass; ?>">
					<div class="row-fluid">
						<div id="grid-bottom2" >
							<w:module type="row-fluid" name="grid-bottom2" chrome="wrightflexgrid" />
						</div>
					</div>
				</div>
			</div>
			<?php
				endif;
			?>

		</div>
		<div class="wrapper-footer">
		   <footer id="footer" <?php
			if ($this->params->get('stickyFooter', 1))
				:
				?> class="sticky"<?php
			endif;
				?>>

				<div class="bg_color_three">
					<?php
						if ($this->countModules('bottom-menu'))
						:
					?>
					<!-- bottom-menu -->
					<w:nav containerClass="<?php echo $wrightContainerClass ?>" rowClass="row-fluid" name="bottom-menu" wrapClass="navbar-transparent dropup" />
					<?php
						endif;
					?>
					<div class="<?php echo $wrightContainerClass; ?> footer-content">
						<?php
							if ($this->countModules('footer'))
							:
						?>
								<w:module type="row-fluid" name="footer" chrome="wrightflexgrid" />
						<?php
							endif;
						?>
							<w:footer />
					</div>
				</div>
		   </footer>
		</div>
		<script type='text/javascript' src='<?php echo JURI::root(true) ?>/templates/js_clementine/js/jclementine.js'></script>
	<?php $browser = JBrowser::getInstance();

	if ($browser->getBrowser() == 'msie')
	{
	$major = $browser->getMajor();

	if ((int) $major <= 9)
	{
	echo
	"<script type='text/javascript' src='" . JURI::root() . "templates/" . $this->document->template . "/js/jquery.equalheights.js'></script>";
	echo "<script type='text/javascript' src='" . JURI::root() . "templates/" . $this->document->template . "/js/fallback.js'></script>";
	}
	}
	?>
	</body>
</html>
