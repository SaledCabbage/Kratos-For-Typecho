<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
	// The Template for displaying the header
	?>
<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="<?php $this->options->charset(); ?>">
		<title><?php $this->archiveTitle(array(
			'category' => _t('分类 %s 下的文章'),
			'search' => _t('包含关键字 %s 的文章'),
			'tag' => _t('标签 %s 下的文章'),
			'author' => _t('%s 发布的文章')
			),'',' _ '); ?><?php $this->options->title(); ?> _ <?php $this->options->description(); ?> </title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Cache-Control" content="no-transform" />
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<?php $this->header("generator=&template=&wlw=&xmlrpc=&commentReply=&rss1=&atom="); ?>
		<?php if ( $this->options->site_bw ) : ?>
			<style type="text/css">html{filter: grayscale(100%);-webkit-filter: grayscale(100%);-moz-filter: grayscale(100%);-ms-filter: grayscale(100%);-o-filter: grayscale(100%);filter: progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);filter: gray;-webkit-filter: grayscale(1); }
			</style>
		<?php endif; ?>
		<link rel='stylesheet' id='animate-style-css'  href='<?php $this->options->themeUrl('css/animate.min.css?ver=3.5.1'); ?>' type='text/css' media='all' />
		<link rel='stylesheet' id='awesome-style-css'  href='<?php $this->options->themeUrl('css/font-awesome.min.css?ver=4.7.0'); ?>' type='text/css' media='all' />
		<link rel='stylesheet' id='bootstrap-style-css'  href='<?php $this->options->themeUrl('css/bootstrap.min.css?ver=3.3.7'); ?>' type='text/css' media='all' />
		<link rel='stylesheet' id='superfish-style-css'  href='<?php $this->options->themeUrl('css/superfish.min.css?ver=r7'); ?>' type='text/css' media='all' />
		<link rel='stylesheet' id='kratos-style-css'  href='<?php $this->options->themeUrl('style.css?ver=2.5.1'); ?>' type='text/css' media='all' />
		<link rel='stylesheet' id='kratos-diy-style-css'  href='<?php $this->options->themeUrl('css/kratos.diy.css?ver=2.5.1'); ?>' type='text/css' media='all' />
	</head>
	<?php flush(); ?>
	<body data-spy="scroll" data-target=".scrollspy">
		<div class="kratos-wrapper">
			<div id="kratos-page">
				<div class="kratos-header">
					<header id="kratos-header-section">
						<div class="container">
							<div class="nav-header">
									<a href="#" class="js-kratos-nav-toggle kratos-nav-toggle"><i></i></a>
									<h1 id="kratos-logo"><a href="<?php echo $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></h1>
								<nav id="kratos-menu-wrap" class="menu-menu-container">
									<ul id="kratos-primary-menu" class="sf-menu">
										<li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
										<?php $this->widget('Widget_Contents_Page_List')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
									</ul>
								</nav>
								
							</div>
						</div>
					</header>
				</div>