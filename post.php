<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php $this->need('header-banner.php'); ?>
<div id="kratos-blog-post" style="background:<?php echo $this->options->background_index_color; ?>">
	<div class="container">
		<div class="row">
			<section id="main" class='col-md-8'>
				<article itemscope itemtype="http://schema.org/BlogPosting">
					<div class="kratos-hentry kratos-post-inner clearfix">
						<header class="kratos-entry-header">
							<h1 class="kratos-entry-title text-center"><?php $this->title() ?></h1>
							<div class="kratos-post-meta text-right">
								<span><i class="fa fa-calendar"></i><?php $this->date('Y-m-d H:i'); ?>
								<?php $this->commentsNum('<i class="fa fa-commenting-o"></i> No Comment ','<i class="fa fa-commenting-o"></i> 1 Comment ','<i class="fa fa-commenting-o"></i> %d Comments '); ?></span>
								
							</div>
						</header>
						<div class="kratos-post-content"><?php $this->content(); ?></div>
						<footer class="kratos-entry-footer clearfix">
							<div class="post-like-donate text-center clearfix" id="post-like-donate">
								<?php if ( $this->options->page_like_donate ) : ?>
					   			<a href="<?php echo  $this->options->donate_links; ?>" class="Donate"><i class="fa fa-bitcoin"></i> 打赏</a>
					   			<?php endif; ?>
								<a href="javascript:;"  class="Share" ><i class="fa fa-share-alt"></i> 分享</a>
								<div class="share-wrap" style="display: none;">
									<div class="share-group">
										<a href="javascript:;" class="share-plain twitter" onclick="share('qq');" rel="nofollow">
											<div class="icon-wrap">
												<i class="fa fa-qq"></i>
											</div>
										</a>
										<a href="javascript:;" class="share-plain weibo" onclick="share('weibo');" rel="nofollow">
											<div class="icon-wrap">
												<i class="fa fa-weibo"></i>
											</div>
										</a>
										<a href="javascript:;" class="share-plain facebook style-plain" onclick="share('facebook');" rel="nofollow">
											<div class="icon-wrap">
												<i class="fa fa-facebook"></i>
											</div>
										</a>
										<a href="javascript:;" class="share-plain googleplus style-plain" onclick="share('googleplus');" rel="nofollow">
											<div class="icon-wrap">
												<i class="fa fa-google-plus"></i>
											</div>
										</a>
										<a href="javascript:;" class="share-plain weixin pop style-plain" rel="nofollow">
											<div class="icon-wrap">
												<i class="fa fa-weixin"></i>
											</div>
											<div class="share-int">
												<div class="qrcode" data-url="<?php $this->permalink() ?>"></div>
												<p>打开微信“扫一扫”，打开网页后点击屏幕右上角分享按钮</p>
											</div>
										</a>
									</div>
									<script type="text/javascript">
										function share(obj){
											var qqShareURL="http://connect.qq.com/widget/shareqq/index.html?";
											var weiboShareURL="http://service.weibo.com/share/share.php?";
											var facebookShareURL="https://www.facebook.com/sharer/sharer.php?";
											var twitterShareURL="https://twitter.com/intent/tweet?";
											var googleplusShareURL="https://plus.google.com/share?";
											var host_url="<?php $this->permalink() ?>";
											var title="【<?php $this->title() ?>】";
											var qqtitle="<?php $this->title() ?>";
											var excerpt="<?php echo $this->excerpt(50, '...'); ?>";
											var pic="<?php
								preg_match_all("/\<img.*?src\=(\'|\")(.*?)(\'|\")[^>]*>/i", $this->content, $matches);
$imgCount = count($matches[0]);
								if($imgCount >= 1){
								    $img = $matches[2][0];
								    echo $img;
								}else{
								 $this->options->themeUrl('images/default.jpg');} ?>";
											var appkey="sina_appkey";
											var _URL;
											if(obj=="qq"){
												_URL=qqShareURL+"url="+host_url+"&title="+qqtitle+"&pics="+pic+"&desc=&summary="+excerpt+"&site=vtrois";
											}else if(obj=="weibo"){
												_URL=weiboShareURL+"url="+host_url+"&appkey="+appkey+"&title="+title+excerpt+"&pic="+pic;
											}else if(obj=="facebook"){
										 		_URL=facebookShareURL+"u="+host_url;
											}else if(obj=="twitter"){
										 		_URL=twitterShareURL+"text="+title+excerpt+"&url="+host_url;
											}else if(obj=="googleplus"){
										 		_URL=googleplusShareURL+"url="+host_url;
											}
											window.open(_URL);
										}
									</script>
								</div>
							</div>
						</footer>
					</div>
					<?php if ( $this->options->page_cc) : ?>
						<div class="kratos-hentry kratos-copyright text-center clearfix">
							<img alt="知识共享许可协议" src="<?php $this->options->themeUrl('images/licenses.png'); ?>">
							<h5>本作品采用 <a rel="license nofollow" target="_blank" href="http://creativecommons.org/licenses/by-sa/4.0/">知识共享署名-相同方式共享 4.0 国际许可协议</a> 进行许可</h5>
						</div>
					<?php endif; ?>
				</article>
				<nav class="navigation post-navigation clearfix" role="navigation">
					<div class="nav-previous clearfix">
						<?php $this->thePrev('<a>上一篇：</a>%s','<a>没有了</a>'); ?>
					</div>
					<div class="nav-next">
						<?php $this->theNext('<a>下一篇：</a>%s','<a>没有了</a>'); ?>
					</div>
				</nav>
				<?php $this->need('comments.php'); ?>
			</section>
			<?php $this->need('sidebar.php'); ?>
		</div>
	</div>
</div>
<?php $this->need('footer.php'); ?>
