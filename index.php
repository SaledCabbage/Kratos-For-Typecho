<?php
/**
 *Kratos 是一款专注于个人博客的主题，提供了一套可自定义的积木式页面配置组件，可以通过使用小工具、导航、社交组件、站点标识、自定颜色等来个性化你的站点。这是一套由Wordpress移植过来的皮肤，本人非常喜欢。
 *
 *@package Typecho Kratos Theme
 *@author Hwang Sir(hwang.site) & VTROIS(vtrois.com)
 *@version 2.5.1
 *@link http://hwang.site
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');?>
<?php $this->need('header-banner.php'); ?>
<div id="kratos-blog-post" style="background:<?php echo $this->options->background_index_color; ?>">
	<div class="container">
		<div class="row">
			<section id="main" class="col-md-8">
				<?php if ($this->is('index')) {
					kratos_banner();
				} ?>
				<?php while($this->next()): ?>
					<article class="kratos-hentry clearfix">
						<div class="kratos-entry-border-new clearfix">
							<div class="kratos-entry-thumb-new">
								<a href="<?php $this->permalink();?>"><img src="<?php
								preg_match_all("/\<img.*?src\=(\'|\")(.*?)(\'|\")[^>]*>/i", $this->content, $matches);
$imgCount = count($matches[0]);
								if($imgCount >= 1){
								    $img = $matches[2][0];
								    echo $img;
								}else{
								 $this->options->themeUrl('images/default.jpg');} ?>" /></a>
							</div>
							<div class="kratos-post-inner-new">
								<header class="kratos-entry-header-new">
									<span class="label"><?php $this->category(',',false); ?><i class="label-arrow"></i></span>
									<h2 class="kratos-entry-title-new"><a href="<?php $this->permalink() ?>"><?php $this->title(20) ?></a></h2>
								</header>
								<div class="kratos-entry-content-new">
									<p><?php $this->excerpt(100, '...'); ?></p>
								</div>
							</div>
							<div class="kratos-post-meta-new">
								<span class="visible-lg visible-md visible-sm pull-left">
									<a href="<?php $this->permalink() ?>"><i class="fa fa-calendar"></i><?php $this->date('Y-m-d '); ?></a>
								</span>
								<span class="pull-left">
									<a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('<i class="fa fa-commenting-o"></i> No Comment ','<i class="fa fa-commenting-o"></i> 1 Comment ','<i class="fa fa-commenting-o"></i> %d Comments '); ?></a>
								</span>
								<span class="pull-right">
									<a class="read-more" href="<?php $this->permalink() ?>">阅读全文<i class="fa fa-chevron-circle-right"></i></a>
								</span>
							</div>
						</div>
					</article>
				<?php endwhile; ?>
				<div class="text-center" id="page-footer"><?php $this->pageNav('&laquo;', '&raquo;',3,"...",array('wrapTag' => 'ul', 'wrapClass' => 'pagination')); ?></div>
			</section>
			<?php $this->need('sidebar.php') ?>
		</div>
	</div>
</div>
<?php $this->need('footer.php'); ?>