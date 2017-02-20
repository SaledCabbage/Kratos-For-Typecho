<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php');?>
<div class="kratos-start">
	<div class="kratos-overlay"></div>
	<div class="kratos-cover kratos-topimg text-center" style="background-image: url('<?php $this->options->themeUrl('images/404.jpg'); ?>')">
		<div class="desc desc3">
			<h2>这里已经是废墟，什么东西都没有...</h2>
			<span>That page can not be found</span>
			<span><a href="<?php $this->options->siteUrl(); ?>"><div class="btn btn-star">返回首页</div></a></span>
		</div>
	</div>
</div>
<?php $this->need('footer.php');?>
