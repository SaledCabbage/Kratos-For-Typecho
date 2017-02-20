<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments" class="comments-area">
    <?php $this->comments()->to($comments); ?>
    <ol class="comment-list">
    <?php while($comments->next()): ?>
    	<li class="comment even thread-even depth-1" id="<?php $comments->theId(); ?>">
    	<div id="<?php $comments->theId(); ?>" class="comment-body">
		<div class="comment-author vcard">
			<?php $comments->gravatar('50', ''); ?><cite class="fn"><a href="<?php $comments->permalink(); ?>" rel='external nofollow' class='url'><?php $comments->author(); ?></a></cite><span class="says">说道：</span>
		</div>
		<div class="comment-meta commentmetadata">
			<a href="<?php $comments->trackbackUrl(); ?>"><?php $comments->date('Y-m-d'); ?>  <?php $comments->date('h:i a'); ?></a>
		</div>
		<p><?php $comments->content(); ?></p>
		<div class="reply "><span class="comment-reply-link"><?php $comments->reply(); ?></span></div>
	</div>
    	</li>
    <?php endwhile; ?>
    <div class="comments-nav">
            <?php $comments->pageNav('<span class="page-numbers">&laquo; 前一页</span>', '<span class="page-number">后一页 &raquo;</span>'); ?>
          </div>
    </ol>
    <!-- 判断设置是否允许对当前文章进行评论 -->
 <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="comment-respond">    
    	<h4 id="reply-title"><?php _e('添加新评论'); ?></h4>
    	<div class="cancel-comment-reply">
    	<small><?php $comments->cancelReply(); ?></small>
              </div>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<div class="comment-form-author form-group has-feedback"><div class="input-group"><div class="input-group-addon"><i class="fa fa-user"></i></div>
    			<input type="text" name="author" id="author" class="form-control" value="<?php $this->remember('author'); ?>" required placeholder="昵称" />
    		</div></div>
    		<div class="comment-form-email form-group has-feedback"><div class="input-group"><div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
    			<input type="email" name="mail" id="mail" class="form-control" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> placeholder="e-mail" />
    		</div></div>
    		<div class="comment-form-url form-group has-feedback"><div class="input-group"><div class="input-group-addon"><i class="fa fa-link"></i></div>
    			<input type="url" name="url" id="url" class="form-control" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</div></div>
            <?php endif; ?>
    		<p>
                <label for="textarea" class="required"><?php _e('内容'); ?></label>
                <textarea rows="5" name="text" id="textarea" class="form-control" required ><?php $this->remember('text'); ?></textarea>
            </p>
    		<p>
                <button type="submit" class="submit"><?php _e('提交评论'); ?></button>
            </p>
    	</form>
    </div>
    <?php else: ?>
    <h4><?php _e('评论已关闭'); ?></h4>
    <?php endif; ?>
</div>