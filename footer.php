<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php /*页脚文件*/ ?>
				<footer>
					<div id="footer">
						<div class="cd-tool visible-lg text-center">
							<?php if ( $this->options->cd_gb && $this->options->cd_weixin ) { ?>
						   		<a rel="nofollow" class="cd-gb-a" href="<?php $this->options->guestbook_links; ?>"><span class="fa fa-book"></span></a>	
						   	<?php } elseif( $this->options->cd_gb && $this->options->cd_weixin){ ?>
						   		<a rel="nofollow" class="cd-gb-b" href="<?php $this->options->guestbook_links; ?>"><span class="fa fa-book"></span></a>	
						   	<?php } ?>
						   	<?php if ( $this->options->cd_weixin ) : ?>
						   		<a id="weixin-img" class="cd-weixin"><span class="fa fa-weixin"></span><div id="weixin-pic"><img src="<?php $this->options->themeUrl('images/weixin.png') ?>"></div></a>
						   	<?php endif; ?>
						    <a class="cd-top cd-is-visible cd-fade-out"><span class="fa fa-chevron-up"></span></a>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 footer-list text-center">
									<p class="kratos-social-icons">
										<?php echo ($this->options->social_weibo=='') ? '' : '<a target="_blank" rel="nofollow" href="' . $this->options->social_weibo . '"><i class="fa fa-weibo"></i></a>'; ?>
										<?php echo ($this->options->social_tweibo=='') ? '' : '<a target="_blank" rel="nofollow" href="' . $this->options->social_tweibo . '"><i class="fa fa-tencent-weibo"></i></a>'; ?>
										<?php echo ($this->options->social_twitter=='') ? '' : '<a target="_blank" rel="nofollow" href="' . $this->options->social_twitter . '"><i class="fa fa-twitter"></i></a>'; ?>
										<?php echo ($this->options->social_facebook=='') ? '' : '<a target="_blank" rel="nofollow" href="' . $this->options->social_facebook . '"><i class="fa fa-facebook-official"></i></a>'; ?>
										<?php echo ($this->options->social_linkedin=='') ? '' : '<a target="_blank" rel="nofollow" href="' . $this->options->social_linkedin . '"><i class="fa fa-linkedin-square"></i></a>'; ?>
										<?php echo ($this->options->social_github=='') ? '' : '<a target="_blank" rel="nofollow" href="' . $this->options->social_github . '"><i class="fa fa-github"></i></a>'; ?>
									</p>
									<p>Copyright 2017 <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>. All Rights Reserved.<br>Theme <a href="https://github.com/vtrois/kratos" target="_blank" rel="nofollow">Kratos</a> made by <a href="https://www.vtrois.com/" target="_blank" rel="nofollow">Vtrois</a> transplant by <a href="http://smallest.com.cn/" target="_blank" rel="nofollow">Smallest</a>
										<?php if($this->options->icp_num!=''){?><br><a href="http://www.miitbeian.gov.cn/" rel="external nofollow" target="_blank"><?php echo $this->options->icp_num; } ?></a><?php if($this->options->gov_num!=''){?><br><a href="<?php echo $this->options->gov_link; ?>" rel="external nofollow" target="_blank"><i class="govimg"></i><?php echo $this->options->gov_num; ?></a><?php }?></p>
									<p><?php echo ($this->options->site_tongji=='') ? '' : '<script>' . $this->options->site_tongji . '</script>'; ?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
		<!-- 加载js -->
		<script type='text/javascript' src="<?php $this->options->themeUrl('js/jquery.min.js?ver=2.1.4') ?>"></script>
		<script type='text/javascript' src="<?php $this->options->themeUrl('js/jquery.easing.min.js?ver=1.3.0') ?>"></script>
		<script type='text/javascript' src="<?php $this->options->themeUrl('js/jquery.qrcode.min.js?ver=2.5.1') ?>"></script>
		<script type='text/javascript' src="<?php $this->options->themeUrl('js/modernizr.min.js?ver=2.6.2') ?>"></script>
		<script type='text/javascript' src="<?php $this->options->themeUrl('js/bootstrap.min.js?ver=3.3.7') ?>"></script>
		<script type='text/javascript' src="<?php $this->options->themeUrl('js/jquery.waypoints.min.js?ver=4.0.0') ?>"></script>
		<script type='text/javascript' src="<?php $this->options->themeUrl('js/jquery.stellar.min.js?ver=0.6.2') ?>"></script>
		<script type='text/javascript' src="<?php $this->options->themeUrl('js/hoverIntent.min.js?ver=r7') ?>"></script>
		<script type='text/javascript' src="<?php $this->options->themeUrl('js/superfish.js?ver=1.0.0') ?>"></script>
		<script type='text/javascript' src="<?php $this->options->themeUrl('js/kratos.js?ver=2.5.1') ?>"></script>
		<script type='text/javascript' src="<?php $this->options->themeUrl('js/kratos.diy.js?ver=2.5.1') ?>"></script>
			<script type="text/javascript">
				if ($("#main").height() > $("#sidebar").height()) {
					var footerHeight = 0;
					if ($('#page-footer').length > 0) {
						footerHeight = $('#page-footer').outerHeight(true);
					}
					$('#sidebar').affix({
						offset: {
							top: $('#sidebar').offset().top - 30,
							bottom: $('#footer').outerHeight(true) + footerHeight + 6
						}
					});
				}
			</script>
	</body>
</html>