<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
//全局设置
    $background_index_color = new Typecho_Widget_Helper_Form_Element_Text('background_index_color',NULL,NULL,_t('设置网页背景颜色'),_t('为整个网页设定背景颜色，如#FFFFFF。'));
    $site_bw = new Typecho_Widget_Helper_Form_Element_Checkbox('site_bw',array('site_bw' => _t('开启站点黑白显示')),array('site_bw'),_t('<b>网站颜色设置</b>'),_t('黑白显示一般用于悼念日'));
    $site_tongji = new Typecho_Widget_Helper_Form_Element_Textarea('site_tongji',NULL,NULL,_t('站点统计代码'),_t('填写时需要去掉script标签'));
    $form->addInput($background_index_color);
    $form->addInput($site_bw->multiMode());
    $form->addInput($site_tongji);
//留言本链接设置
    $cd_gb = new Typecho_Widget_Helper_Form_Element_Checkbox('cd_gb',array('cd_gb' => _t('开启站点留言板')),array('cd_gb'),_t('<b>网站留言本设置</b>'),_t('开启站点留言板后请务必设置下方的留言板链接！'));
    $guestbook_links = new Typecho_Widget_Helper_Form_Element_Text('guestbook_links',NULL,NULL,_t('网站留言本链接'),_t('请输入以http或https开头，开启留言本选项请务必设置此项目。'));
    $form->addInput($cd_gb->multiMode());
    $form->addInput($guestbook_links);
//微信展示设置
    $cd_weixin = new Typecho_Widget_Helper_Form_Element_Checkbox('cd_weixin',array('cd_weixin' => _t('开启微信展示')),array('cd_weixin'),_t('<b>微信展示设置</b>'),_t('<b>开启微信展示前，请将您的微信二维码替换在主题目录下的images/weixin_code.png文件。</b>'));
    $form->addInput($cd_weixin->multiMode());
//顶部设置
    $background_mode = new Typecho_Widget_Helper_Form_Element_Select('background_mode',array('image' => '图片','color' => '颜色'),'color',_t('设置顶部显示类型'));
    $background_image = new Typecho_Widget_Helper_Form_Element_Text('background_image',NULL,NULL,_t('图片模式选项'),_t('请输入以http或https开头的图片网址，留空则为默认图片。'));
    $background_image_text1 = new Typecho_Widget_Helper_Form_Element_Text('background_image_text1',NULL,NULL,_t('图片文字-1'),_t('只有选择图片模式该选项才生效。'));
    $background_image_text2 = new Typecho_Widget_Helper_Form_Element_Text('background_image_text2',NULL,NULL,_t('图片文字-2'),_t('只有选择图片模式该选项才生效。'));
    $form->addInput($background_mode);
    $form->addInput($background_image);
    $form->addInput($background_image_text1);
    $form->addInput($background_image_text2);
    $background_color = new Typecho_Widget_Helper_Form_Element_Text('background_color',NULL,'#222831',_t('设置背景颜色'),_t('如#FFFFFF，只有选择颜色模式该选项才生效。'));
    $form->addInput($background_color);
//文章内容设置
    $page_cc = new Typecho_Widget_Helper_Form_Element_Checkbox('page_cc',array('page_cc' => _t('启用 CC BY-SA 4.0 声明')),array('page_cc'),_t('<b>版权声明</b>'));
    $form->addInput($page_cc->multiMode());
//404页面设置

//页脚配置
    $icp_num = new Typecho_Widget_Helper_Form_Element_Text('icp_num',NULL,NULL,_t('工信部备案信息'),_t('输入您的工信部备案号'));
    $gov_num = new Typecho_Widget_Helper_Form_Element_Text('gov_num',NULL,NULL,_t('公安网备案信息'),_t('输入您的公安网备案号'));
    $gov_link = new Typecho_Widget_Helper_Form_Element_Text('gov_link',NULL,NULL,_t('公安网备案链接'),_t('输入您的公安网备案链接地址'));
    $form->addInput($icp_num);
    $form->addInput($gov_num);
    $form->addInput($gov_link);
//社交组件
    $social_weibo = new Typecho_Widget_Helper_Form_Element_Text('social_weibo',NULL,NULL,_t('新浪微博'),_t('连接前要带有http://或https://'));
    $social_tweibo = new Typecho_Widget_Helper_Form_Element_Text('social_tweibo',NULL,NULL,_t('腾讯微博'),_t('连接前要带有http://或https://'));
    $social_twitter = new Typecho_Widget_Helper_Form_Element_Text('social_twitter',NULL,NULL,_t('Twitter'),_t('连接前要带有http://或https://'));
    $social_facebook = new Typecho_Widget_Helper_Form_Element_Text('social_facebook',NULL,NULL,_t('Facebook'),_t('连接前要带有http://或https://'));
    $social_linkedin = new Typecho_Widget_Helper_Form_Element_Text('social_linkedin',NULL,NULL,_t('Linkedin'),_t('连接前要带有http://或https://'));
    $social_github = new Typecho_Widget_Helper_Form_Element_Text('social_github',NULL,NULL,_t('Github'),_t('连接前要带有http://或https://'));
    $form->addInput($social_weibo);
    $form->addInput($social_tweibo);
    $form->addInput($social_twitter);
    $form->addInput($social_facebook);
    $form->addInput($social_linkedin);
    $form->addInput($social_github);
}