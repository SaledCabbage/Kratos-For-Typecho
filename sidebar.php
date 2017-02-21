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
					<?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
					<?php while($comments->next()): ?>
						<li><?php $comments->author(false); ?>: <a class="list-group-item visible-md visible-lg" href="<?php $comments->permalink(); ?>"><i class="fa  fa-book"></i><?php $comments->excerpt(10, '[...]'); ?></a></li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</aside>
	<?php if($this->options->tags_switch) {?>
	<aside id="kratos_tags-2" class="widget widget_kratos_tags clearfix"><h4 class="widget-title">标签聚合</h4><div class="tag_clouds">
	<?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=20')->to($tags); ?>
	<?php if($tags->have()): ?>
	<?php while($tags->next()): ?>
		<a style="color: rgb(<?php echo(rand(0, 255)); ?>, <?php echo(rand(0,255)); ?>, <?php echo(rand(0, 255)); ?>)" href="<?php $tags->permalink(); ?>" title='<?php $tags->name(); ?>'><?php $tags->name(); ?></a>
	<?php endwhile; ?>
	<?php else: ?>
		<a href="javascript:void(0);"><?php _e('没有任何标签'); ?></a>
	<?php endif; ?>
	</div>
	</aside>
	<?php }  ?>

</div>
</aside>