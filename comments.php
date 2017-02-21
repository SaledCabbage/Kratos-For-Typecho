<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments" class="comments-area">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<h4><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h4>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>
    <?php if($this->allow('comment')): ?>
    <div id="respond" class="comment-respond">
    <h4 id="reply-title" class="comment-reply-title">发表评论</h4>
    <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
    <?php if($this->user->hasLogin()): ?>
            <p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    <div class="comment-form-author form-group has-feedback"><div class="input-group"><div class="input-group-addon"><i class="fa fa-user"></i></div><input class="form-control" placeholder="昵称" id="author" name="author" type="text" value="" size="30"/><span class="form-control-feedback required">*</span></div></div>
    <div class="comment-form-email form-group has-feedback"><div class="input-group"><div class="input-group-addon"><i class="fa fa-envelope-o"></i></div><input class="form-control" placeholder="邮箱" id="email" name="email" type="text" value=""  size="30" /><span class="form-control-feedback required">*</span></div></div>
    <div class="comment-form-url form-group has-feedback"><div class="input-group"><div class="input-group-addon"><i class="fa fa-link"></i></div><input class="form-control" placeholder="网站" id="url" name="url" type="text" value=""  size="30" /></div></div>
    <?php endif; ?>
    <div class="comment form-group has-feedback"><div class="input-group"><textarea class="form-control" id="comment" placeholder=" " name="comment" rows="5" cols="120%" aria-required="true" required  onkeydown="if(event.ctrlKey){if(event.keyCode==13){document.getElementById(\'submit\').click();return false}};"></textarea></div></div>
    <button type="submit" class="submit"><?php _e('发表评论'); ?></button>
    </form>
    <?php else: ?>
    <h4><?php _e('评论已关闭'); ?></h4>
    <?php endif; ?>
</div>
