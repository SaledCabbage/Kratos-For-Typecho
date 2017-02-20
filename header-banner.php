<?php
/**
 * The template for displaying the header
 *
 * @package Vtrois
 * @version 2.3
 */

switch ($this->options->background_mode) {
	case 'image':
		if($this->options->background_image!=''){
			echo '<div class="kratos-start kratos-hero-2"><div class="kratos-overlay"></div><div class="kratos-cover kratos-cover_2 text-center" style="background-image: url('.$this->options->background_image.');"><div class="desc desc2 animate-box"><h2>'.$this->options->background_image_text1.'</h2><span>'.$this->options->background_image_text2.'</span></div></div></div>';
		}
		else{
			echo '<div class="kratos-start kratos-hero-2 kratos-post-header"><div class="kratos-overlay kratos-post" style="background:#222831"></div></div>';
		}
	break;
	case 'color':
		if($this->options->background_color!=''){
			echo '<div class="kratos-start kratos-hero-2 kratos-post-header"><div class="kratos-overlay kratos-post" style="background:'.$this->options->background_color.'"></div></div>';
		}
		else{
			echo '<div class="kratos-start kratos-hero-2 kratos-post-header"><div class="kratos-overlay kratos-post" style="background:#222831"></div></div>';
		}
	break;
	default:
		echo '<div class="kratos-start kratos-hero-2 kratos-post-header"><div class="kratos-overlay kratos-post" style="background:#222831"></div></div>';
	break;
}
?>