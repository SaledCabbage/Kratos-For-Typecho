<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments" class="comments-area">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
    <h4><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h4>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond comment-respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    <div id="respond" class="comment-respond">
        <h4 id="response"><?php _e('添加新评论'); ?></h4>
        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
            <p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
                <div class="comment-form-author form-group has-feedback"><div class="input-group"><div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" name="author" id="author" class="text form-control" value="<?php $this->remember('author'); ?>" required />
                <span class="form-control-feedback required">*</span></div></div>
            <div class="comment-form-email form-group has-feedback"><div class="input-group"><div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
                <input type="email" name="mail" id="mail" class="text form-control" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
            <span class="form-control-feedback required">*</span></div></div>
            <div class="comment-form-url form-group has-feedback"><div class="input-group"><div class="input-group-addon"><i class="fa fa-link"></i></div>
                <input type="url" name="url" id="url" class="text form-control" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
            </div></div>
            <?php endif; ?>
            <p>
                <div class="comment form-group has-feedback"><div class="input-group">
                <textarea rows="6" cols="120%" name="text" id="textarea" class="textarea form-control" required ><?php $this->remember('text'); ?></textarea>
            </div></div>
            <p>
                <button type="submit" class="submit"><?php _e('提交评论'); ?></button>
            </p>
        </form>
    </div>
    <?php else: ?>
    <h4><?php _e('评论已关闭'); ?></h4>
    <?php endif; ?>
</div>