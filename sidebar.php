<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<aside id="kratos-widget-area" class="col-md-4 hidden-xs hidden-sm scrollspy">
<div id="sidebar">
	<aside id="kratos_about-3" class="widget amadeus_about clearfix">
		<div class="photo-background">
			<div class="photo-background" style="background:url(https://www.vtrois.com/wp-content/uploads/2017/02/bgi.jpg) no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;"></div>
		</div>
		<div class="photo-wrapper clearfix">
			<div class="photo-wrapper-tip text-center">
				<a href="<?php $this->options->siteUrl(); ?>admin"><img src="<?php $this->options->themeUrl('images/avatar.jpg'); ?>" class="about-photo"></a>
			</div>
		</div>
		<div class="textwidget">
			<p class="text-left"><?php $this->options->description() ?></p>
		</div>
	</aside>
	<aside class="widget widget_kratos_poststab">
		<ul id="tabul" class="nav nav-tabs nav-justified visible-lg">
			<li class="active"><a href="#newest" data-toggle="tab"> 最新文章</a></li>
			<li><a href="#hot" data-toggle="tab">最热回复</a></li>
		</ul>
		<ul id="tabul" class="nav nav-tabs nav-justified visible-md">
			<li class="active"><a href="#newest" data-toggle="tab"> 最新</a></li>
			<li><a href="#hot" data-toggle="tab">最热</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane fade in active" id="newest">
				<ul class="list-group">
					<?php $this->widget('Widget_Contents_Post_Recent')->parse('<a class="list-group-item visible-md visible-lg" title="{title}" href="{permalink}"><i class="fa  fa-book"></i> {title}</a>'); ?>
				</ul>
			</div>
			<div class="tab-pane fade" id="hot">
				<ul class="list-group">
					<?php $this->widget('Widget_Contents_Post_Recent')->parse('<a class="list-group-item visible-md visible-lg" title="{title}" href="{permalink}"><i class="fa  fa-book"></i> {title}</a>'); ?>
				</ul>
			</div>
		</div>
	</aside>

</div>
</aside>