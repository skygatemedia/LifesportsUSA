<?php

$root = dirname(dirname(dirname(dirname(dirname(__FILE__)))));
if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} elseif ( file_exists( $root.'/wp-config.php' ) ) {
    require_once( $root.'/wp-config.php' );
}
header("Content-type: text/css; charset=utf-8");
?>
<?php if (!empty($qode_options_satellite['selection_color'])) { ?>
/* Webkit */
::selection {
    background: <?php echo $qode_options_satellite['selection_color'];  ?>;
}
<?php } ?>
<?php if (!empty($qode_options_satellite['selection_color'])) { ?>
/* Gecko/Mozilla */
::-moz-selection {
    background: <?php echo $qode_options_satellite['selection_color'];  ?>;
}
<?php } ?>
<?php if (!empty($qode_options_satellite['background_color']) || !empty($qode_options_satellite['text_color']) || !empty($qode_options_satellite['text_fontsize']) || $qode_options_satellite['google_fonts'] != "-1") { ?>
body {
	<?php if (!empty($qode_options_satellite['background_color'])) { ?> background-color:<?php echo $qode_options_satellite['background_color'];  ?>; <?php } ?>
	<?php if($qode_options_satellite['google_fonts'] != "-1"){ ?>
	<?php $font = str_replace('+', ' ', $qode_options_satellite['google_fonts']); ?>
	font-family: <?php echo $font; ?>, sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_satellite['text_color'])) { ?> color: <?php echo $qode_options_satellite['text_color'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_satellite['text_fontsize'])) { ?> font-size: <?php echo $qode_options_satellite['text_fontsize']; ?>px; <?php } ?>
}

<?php if (!empty($qode_options_satellite['background_color'])) { ?> 
.content{
	background-color:<?php echo $qode_options_satellite['background_color'];  ?>; 
}
<?php } ?>
<?php } ?>
<?php if (!empty($qode_options_satellite['background_color'])) { ?>
.wrapper{
	<?php if (!empty($qode_options_satellite['background_color'])) { ?> background-color:<?php echo $qode_options_satellite['background_color'];  ?>; <?php } ?>
}
<?php } ?>
<?php
$boxed = "no";
if (isset($qode_options_satellite['boxed']))
	$boxed = $qode_options_satellite['boxed'];
?>
<?php if($boxed == "yes"){ ?>
body.boxed .wrapper{
	<?php if (!empty($qode_options_satellite['background_color_box'])) { ?> background-color:<?php echo $qode_options_satellite['background_color_box'];  ?>; <?php } ?>
	
	<?php if($qode_options_satellite['pattern_background_image'] != ""){  ?>
		background-image: url('<?php echo $qode_options_satellite['pattern_background_image'] ?>');
		background-position: 0px 0px;
		background-repeat: repeat;
	<?php } ?>
	
	<?php if($qode_options_satellite['background_image'] != ""){  ?>
		background-image: url('<?php echo $qode_options_satellite['background_image'] ?>');
		background-attachment: fixed;
		background-position: center 0px;
		background-repeat: no-repeat;
	<?php } ?>
}

body.boxed .content{
	<?php if (!empty($qode_options_satellite['background_color'])) { ?> background-color:<?php echo $qode_options_satellite['background_color'];  ?>; <?php } ?>
}
<?php } ?>

<?php if (!empty($qode_options_satellite['first_color'])) { ?>
table th,
table tr:nth-child(odd) td,
.blog_holder article.blockquote .post_content_holder:hover .blockquote_holder,
.blog_holder article.link .post_content_holder:hover .link_holder,
.filter_holder ul li.active,
.button,
#submit_comment,
.load_more a,
.icon_inner,
.progress_bars_with_image_content .bar .bar_noactive, 
.progress_bars_with_image_content .bar .bar_active,
.highlight,
.tabs .tabs-nav li.active a,
.accordion_holder.accordion h3.ui-state-active > span,
.accordion_holder.accordion h3:hover > span,
.progress_bars .progress_content,
.price_table_inner.active,
.price_table_inner:hover,
.list.number_with_background ul>li:before,
.progress_bars_with_image_content .bar,
.footer_top .social_menu.transparent li a,
.pie_graf_legend ul li .color_holder,
.line_graf_legend ul li .color_holder,
.widget .tagcloud a:hover,
.mejs-overlay-loading,
.mejs-container .mejs-controls,
.mejs-captions-text,
.mejs-controls .mejs-sourcechooser-button .mejs-sourcechooser-selector,
.mejs-postroll-layer,
.mejs-postroll-close
{
	background-color: <?php echo $qode_options_satellite['first_color'];?>;
}

h2 a,
h3 a,
h5 a,
a:hover,
p a:hover,
.header_top #lang_sel ul > li:hover > a,
.header_top #lang_sel_click ul > li:hover > a,
.header_top #lang_sel ul li ul li a:hover,
.header_top #lang_sel_click ul li ul li a:hover,
.header_top #lang_sel_list ul li a,
.header_top #lang_sel_list ul li a:visited,
.header_top #lang_sel_list ul li a:hover,
.header_top #lang_sel_list ul li a.lang_sel_other:hover,
nav.main_menu > ul > li:hover > a,
nav.main_menu > ul > li.active > a,
.drop_down .second .inner ul li:hover a,
.drop_down .second .inner ul li.sub ul li:hover a,
.drop_down .wide .second ul li a,
.drop_down .wide .second .inner ul li h5,
.drop_down .wide .second ul li a:hover,
.drop_down .wide .second .inner ul li.sub ul li a:hover,
.drop_down .wide .second .inner ul li.sub .flexslider ul li a:hover,
.drop_down .wide .second ul li .flexslider ul li  a:hover,
.drop_down .wide .second .inner ul li .flexslider h5,
.drop_down .wide .second .inner ul li.sub .flexslider ul li  h5 a,
.drop_down .wide .second .inner ul li .flexslider ul li  h5 a,
.drop_down .wide.icons  .second i,
.blog_holder article .post_info .date,
.blog_holder article .post_info .blog_like:hover span,
.portfolio_like:hover span,
.blog_holder article .post_info .blog_like a.liked span,
.portfolio_like a.liked span,
.comment_holder .comment .text .replay, 
.comment_holder .comment .text .comment-reply-link,
.pagination ul li span,
.pagination ul li.next a:hover,
.pagination ul li.prev a:hover,
.pagination ul li.last a:hover,
.pagination ul li.first a:hover,
.pagination ul li a:hover,
.portfolio_navigation .portfolio_prev a:hover,
.portfolio_navigation .portfolio_next a:hover,
.counter_holder span.counter,
.percentage,
.progress_bars .progress_number,
.price_table_inner ul li.table_title,
.price_in_table .value,
.price_in_table .price,
.price_in_table .mark,
.dropcap,
.ordered ol li,
.list.circle ul>li,
.list.number ul>li,
.list.number_with_background ul>li,
.list.number ul>li:before,
.list.number_with_background ul>li:before,
.social_share_holder:hover .social_share_icon,
.social_share_dropdown ul li span.share_title,
.social_share_dropdown ul li:hover .share_text,
.latest_post_bottom .latest_post_like a.liked span,
.latest_post_bottom .latest_post_like a:hover span,
aside .widget li a:hover,
.widget.widget_rss li a.rsswidget:hover,
aside #lang_sel_list ul li a:hover,
aside #lang_sel_list a.lang_sel_sel:hover,
aside #lang_sel_list ul li a.lang_sel_sel,
aside #lang_sel ul li ul li:hover a,
aside #lang_sel_click ul li ul li:hover a,
aside #lang_sel_click a.lang_sel_sel:hover,
aside #lang_sel a.lang_sel_sel:hover,
.widget .tagcloud a,
.footer_top ul li a:hover,
.footer_top .widget li a:hover,
.widget.widget_rss li a.rsswidget:hover,
.footer_top #lang_sel_list ul li a:hover,
.footer_top #lang_sel_list a.lang_sel_sel:hover,
.footer_top #lang_sel_list ul li a.lang_sel_sel,
.footer_top #lang_sel ul li ul li:hover a,
.footer_top #lang_sel_click ul li ul li:hover a,
.footer_top #lang_sel_click a.lang_sel_sel:hover,
.footer_top #lang_sel a.lang_sel_sel:hover,
#lang_sel_footer ul li a.lang_sel_sel,
#lang_sel_footer ul li a:hover,
#lang_sel_footer ul li a.lang_sel_sel:hover
{
	color: <?php echo $qode_options_satellite['first_color'];?>;
}

.blog_holder article .post_info .blog_like:hover,
.portfolio_like:hover,
.blog_holder article.blockquote .blockquote_holder,
.blog_holder article.link .link_holder,
#respond textarea:focus,
#respond input[type='text']:focus,
.contact_form input[type='text']:focus,
.contact_form  textarea:focus,
.pagination ul li span,
.pagination ul li.next a:hover,
.pagination ul li.prev a:hover,
.pagination ul li.last a:hover,
.pagination ul li.first a:hover,
.filter_holder ul li.active,
.button.with_border,
.icon_holder,
.tabs .tabs-nav li.active a,
.accordion_holder.accordion h3 > span,
.price_table_inner,
.dropcap,
.list.number ul>li:before,
.list.number_with_background ul>li:before,
.message,
.call_to_action,
.social_menu li a,
.widget .tagcloud a,
.side_menu .widget.widget_search form.form_focus,
.widget.widget_search form.form_focus,
.header_top .searchform.form_focus,
.footer_top_inner .searchform.form_focus
{
	border-color: <?php echo $qode_options_satellite['first_color'];?>;
}
<?php } ?>
<?php if (!empty($qode_options_satellite['second_color'])) { ?>
.blog_holder.massonary article .post_text .inner,
.blog_holder.massonary article .post_text.border_top .inner,
.blog_holder.massonary article .post_info_bottom,
.blog_holder.massonary article .post_info_bottom .blog_like,
.blog_holder.massonary article.blockquote .blockquote_holder,
.blog_holder.massonary article.link .link_holder,
#respond textarea,
#respond input[type='text'],
.contact_form input[type='text'],
.contact_form  textarea,
.filter_holder ul li,
.filter_holder ul li:hover,
.tabs .tabs-nav li a,
.widget.widget_archive select, 
.widget.widget_categories select, 
.widget.widget_text select,
.widget.widget_search form,
.header_top .searchform,
.footer_top_inner .searchform,
.latest_post,
.latest_post_bottom,
.latest_post_bottom .latest_post_like
{
	border-color: <?php echo $qode_options_satellite['second_color'];?>;
}
<?php } ?>
<?php if (!empty($qode_options_satellite['third_color'])) { ?>

.tabs .tabs-nav li:hover a,
.social_share_dropdown ul
{
	background-color:<?php echo $qode_options_satellite['third_color'];?>;
}
<?php } ?>
<?php if (!empty($qode_options_satellite['text_color'])) { ?> 
.header_top #lang_sel ul > li a.lang_sel_sel,
.header_top #lang_sel_click ul > li a.lang_sel_sel,
.header_top #lang_sel_list ul li a.lang_sel_other,
.header_top #lang_sel ul li ul li a,
.header_top #lang_sel ul li ul li a:visited,
.header_top #lang_sel_click ul li ul li a,
.header_top #lang_sel_click ul li ul li a:visited,
aside #lang_sel_list ul li a,
aside #lang_sel_list ul li a:visited,
aside #lang_sel a.lang_sel_sel,
aside #lang_sel_click a.lang_sel_sel,
aside #lang_sel ul li ul li a,
aside #lang_sel_click ul li ul li a,
aside #lang_sel ul li ul li a:visited,
aside #lang_sel_click ul li ul li a:visited,
.footer_top #lang_sel ul li ul li a,
.footer_top #lang_sel_click ul li ul li a,
.footer_top #lang_sel ul li ul li a:visited,
.footer_top #lang_sel_click ul li ul li a:visited,
.footer_top #lang_sel a.lang_sel_sel,
.footer_top #lang_sel_click a.lang_sel_sel,
.footer_top #lang_sel_list ul li a,
.footer_top #lang_sel_list ul li a:visited

{
	color: <?php echo $qode_options_satellite['text_color'];  ?>;
}
 <?php } ?>
<?php if (!empty($qode_options_satellite['highlight_color'])) { ?>
span.highlight {
	background-color: <?php echo $qode_options_satellite['highlight_color'];  ?>;
}
<?php } ?>

<?php
	
	if(isset($qode_options_satellite['header_in_grid']) && $qode_options_satellite['header_in_grid'] == "no"){
?>
	header .header_top,
	header .header_bottom{
		padding: 0px 25px;
	}
<?php } ?>

<?php if (!empty($qode_options_satellite['header_background_color']) || $qode_options_satellite['header_background_transparency_initial'] != "") { 
	if(!empty($qode_options_satellite['header_background_color'])){
		$bg_color = hex2rgb($qode_options_satellite['header_background_color']);
	}else{
		$bg_color = hex2rgb('#ffffff');
	}
	if ($qode_options_satellite['header_background_transparency_initial'] != "") {
		$bg_color_transparency = $qode_options_satellite['header_background_transparency_initial'];
	}else{
		$bg_color_transparency = 1;
	}
	
?>
header,
.boxed .header_inner {
	background-color: rgba(<?php echo $bg_color[0]; ?>,<?php echo $bg_color[1]; ?>,<?php echo $bg_color[2]; ?>,<?php echo $bg_color_transparency; ?>);
}
<?php } ?>
<?php
if (!empty($qode_options_satellite['header_background_color_scroll']) || $qode_options_satellite['header_background_transparency_scroll'] != "") {
	
	if(!empty($qode_options_satellite['header_background_color_scroll'])){
		$bg_color_scroll = hex2rgb($qode_options_satellite['header_background_color_scroll']);
	}else{
		$bg_color_scroll = hex2rgb('#f0f2f2');
	}
	
	if ($qode_options_satellite['header_background_transparency_scroll'] != "") {
		$bg_color_scroll_transparency = $qode_options_satellite['header_background_transparency_scroll'];
	}else{
		$bg_color_scroll_transparency = 0.85;
	}
?>
header.scrolled,
.boxed header.scrolled .header_inner {
	background-color: rgba(<?php echo $bg_color_scroll[0]; ?>,<?php echo $bg_color_scroll[1]; ?>,<?php echo $bg_color_scroll[2]; ?>,<?php echo $bg_color_scroll_transparency; ?>);
}
<?php } ?>
<?php if (!empty($qode_options_satellite['header_height'])) { ?>
.logo_wrapper,
.side_menu_button
{
	height: <?php echo $qode_options_satellite['header_height'];  ?>px;
}
.content{
	margin-top: 130px;
}
.drop_down .second{
	top: <?php echo $qode_options_satellite['header_height'];  ?>px;
}
<?php } ?>

<?php if ($qode_options_satellite['header_background_transparency_initial'] != "") {?>
.content{
	margin-top: 0px !important;
}
.title .title_holder .container{
	vertical-align: bottom;
	padding: 0px 0px 20px 0px;
}
<?php
}
?>

<?php
$parallax_onoff = "on";
if (isset($qode_options_satellite['parallax_onoff']))
	$parallax_onoff = $qode_options_satellite['parallax_onoff'];
if ($parallax_onoff == "off"){
?>

	.touch .parallax section{
		height: auto !important;
		min-height: 300px;  
		background-position: center top !important;  
		background-attachment: scroll;
	}
		
	.touch	.parallax section.no_background{
		padding: 0px;
	}

<?php } ?>

<?php if (!empty($qode_options_satellite['header_height'])) { ?>
nav.main_menu > ul > li > a
{
	line-height: <?php echo $qode_options_satellite['header_height'];  ?>px;
}
<?php } ?>
<?php if (!empty($qode_options_satellite['dropdown_background_color'])) { ?>
.drop_down .second .inner ul,
.drop_down .second .inner ul li ul{
	background-color:<?php echo $qode_options_satellite['dropdown_background_color'];  ?>;
}
<?php } ?>
<?php if (!empty($qode_options_satellite['header_footer_separator_color'])) { ?>
	.header_top,
	footer,
	.footer_bottom,
	header,
	.boxed .header_inner,
	.drop_down .second
	{
		border-color:<?php echo $qode_options_satellite['header_footer_separator_color'];  ?>;
	}
<?php } ?>

<?php if (!empty($qode_options_satellite['mobile_color']) || !empty($qode_options_satellite['mobile_fontsize']) || !empty($qode_options_satellite['mobile_lineheight']) || !empty($qode_options_satellite['mobile_fontstyle']) || !empty($qode_options_satellite['mobile_fontweight']) || !empty($qode_options_satellite['mobile_letter_spacing']) || $qode_options_satellite['mobile_google_fonts'] != "-1") { ?>
nav.mobile_menu ul li a{
	<?php if (!empty($qode_options_satellite['mobile_color'])) { ?> color: <?php echo $qode_options_satellite['mobile_color'];  ?>; <?php } ?>
	<?php if($qode_options_satellite['mobile_google_fonts'] != "-1"){ ?>
	font-family: <?php echo str_replace('+', ' ', $qode_options_satellite['mobile_google_fonts']); ?>, sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_satellite['mobile_fontsize'])) { ?> font-size: <?php echo $qode_options_satellite['mobile_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_satellite['mobile_lineheight'])) { ?> line-height: <?php echo $qode_options_satellite['mobile_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_satellite['mobile_fontstyle'])) { ?> font-style: <?php echo $qode_options_satellite['mobile_fontstyle'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_satellite['mobile_fontweight'])) { ?> font-weight: <?php echo $qode_options_satellite['mobile_fontweight'];  ?>; <?php } ?>
	<?php if(!empty($qode_options_satellite['mobile_letter_spacing'])){ ?>
	letter-spacing: <?php echo $qode_options_satellite['mobile_letter_spacing'];  ?>px;
	<?php } ?>
}
<?php } ?>

<?php if (!empty($qode_options_satellite['mobile_hovercolor'])) { ?>
nav.mobile_menu ul li a:hover,
nav.mobile_menu ul li.active > a,
nav.mobile_menu ul li.current-menu-item > a{
	color: <?php echo $qode_options_satellite['mobile_hovercolor'];  ?>;
}
<?php } ?>
<?php if (!empty($qode_options_satellite['mobile_separator_color'])) { ?>
	nav.mobile_menu ul li a,
	nav.mobile_menu ul li ul li a,
	nav.mobile_menu ul li.open_sub > a:first-child{
		border-color: <?php echo $qode_options_satellite['mobile_separator_color'];  ?>;
	}
<?php } ?>
<?php if (!empty($qode_options_satellite['menu_color']) || !empty($qode_options_satellite['menu_fontsize']) || !empty($qode_options_satellite['menu_fontstyle']) || !empty($qode_options_satellite['menu_fontweight']) || !empty($qode_options_satellite['menu_letter_spacing']) || $qode_options_satellite['menu_google_fonts'] != "-1") { ?>
nav.main_menu > ul > li > a{
	<?php if (!empty($qode_options_satellite['menu_color'])) { ?> color: <?php echo $qode_options_satellite['menu_color'];  ?>; <?php } ?>
	<?php if($qode_options_satellite['menu_google_fonts'] != "-1"){ ?>
	font-family: <?php echo str_replace('+', ' ', $qode_options_satellite['menu_google_fonts']); ?>, sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_satellite['menu_fontsize'])) { ?> font-size: <?php echo $qode_options_satellite['menu_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_satellite['menu_fontstyle'])) { ?> font-style: <?php echo $qode_options_satellite['menu_fontstyle'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_satellite['menu_fontweight'])) { ?> font-weight: <?php echo $qode_options_satellite['menu_fontweight'];  ?>; <?php } ?>

}
<?php } ?>
<?php if (!empty($qode_options_satellite['menu_hovercolor'])) { ?>
nav.main_menu ul li:hover a,
nav.main_menu ul li.active a{
	color: <?php echo $qode_options_satellite['menu_hovercolor'];  ?>;
}
<?php } ?>

<?php if(!empty($qode_options_satellite['dropdown_color']) || !empty($qode_options_satellite['dropdown_fontsize']) || !empty($qode_options_satellite['dropdown_lineheight']) || !empty($qode_options_satellite['dropdown_fontstyle']) || !empty($qode_options_satellite['dropdown_fontweight']) || $qode_options_satellite['dropdown_google_fonts'] != "-1"){ ?>
.drop_down .second .inner > ul > li > a,
.drop_down .second .inner > ul > li > h5,
.drop_down .wide .second .inner > ul > li > h5,
.drop_down .wide .second .inner > ul li.sub .flexslider ul li  h5 a,
.drop_down .wide .second .inner > ul li .flexslider ul li  h5 a,
.drop_down .wide .second .inner > ul li.sub .flexslider ul li  h5,
.drop_down .wide .second .inner > ul li .flexslider ul li  h5
{
	<?php if (!empty($qode_options_satellite['dropdown_color'])) { ?> color: <?php echo $qode_options_satellite['dropdown_color']; ?>; <?php } ?>
	<?php if($qode_options_satellite['dropdown_google_fonts'] != "-1"){ ?>
	font-family: <?php echo str_replace('+', ' ', $qode_options_satellite['dropdown_google_fonts']) ?>, sans-serif !important;
	<?php } ?>
	<?php if (!empty($qode_options_satellite['dropdown_fontsize'])) { ?> font-size: <?php echo $qode_options_satellite['dropdown_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_satellite['dropdown_lineheight'])) { ?> line-height: <?php echo $qode_options_satellite['dropdown_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_satellite['dropdown_fontstyle'])) { ?> font-style: <?php echo $qode_options_satellite['dropdown_fontstyle'];  ?>;  <?php } ?>
	<?php if (!empty($qode_options_satellite['dropdown_fontweight'])) { ?>font-weight: <?php echo $qode_options_satellite['dropdown_fontweight'];  ?>; <?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_satellite['dropdown_hovercolor'])) { ?>

.drop_down .second .inner ul > li:hover > a
{
	color: <?php echo $qode_options_satellite['dropdown_hovercolor'];  ?> !important;
}
<?php } ?>
<?php if(!empty($qode_options_satellite['dropdown_color_thirdlvl']) || !empty($qode_options_satellite['dropdown_fontsize_thirdlvl']) || !empty($qode_options_satellite['dropdown_lineheight_thirdlvl']) || !empty($qode_options_satellite['dropdown_fontstyle_thirdlvl']) || !empty($qode_options_satellite['dropdown_fontweight_thirdlvl']) || $qode_options_satellite['dropdown_google_fonts_thirdlvl'] != "-1"){ ?>
.drop_down .wide .second .inner ul li.sub ul li a,
.drop_down .wide .second ul li ul li a,
.drop_down .second .inner ul li.sub ul li a,
.drop_down .wide .second ul li ul li a,
.drop_down .wide .second .inner ul li.sub .flexslider ul li .menu_recent_post,
.drop_down .wide .second .inner ul li .flexslider ul li .menu_recent_post a,
.drop_down .wide .second .inner ul li .flexslider ul li .menu_recent_post,
.drop_down .wide .second .inner ul li .flexslider ul li .menu_recent_post a
{
	<?php if (!empty($qode_options_satellite['dropdown_color_thirdlvl'])) { ?> color: <?php echo $qode_options_satellite['dropdown_color_thirdlvl'];  ?> !important;  <?php } ?>
	<?php if($qode_options_satellite['dropdown_google_fonts_thirdlvl'] != "-1"){ ?>
	font-family: <?php echo str_replace('+', ' ', $qode_options_satellite['dropdown_google_fonts_thirdlvl']) ?>, sans-serif !important;
	<?php } ?>
	<?php if (!empty($qode_options_satellite['dropdown_fontsize_thirdlvl'])) { ?> font-size: <?php echo $qode_options_satellite['dropdown_fontsize_thirdlvl'];  ?>px !important;  <?php } ?>
	<?php if (!empty($qode_options_satellite['dropdown_lineheight_thirdlvl'])) { ?> line-height: <?php echo $qode_options_satellite['dropdown_lineheight_thirdlvl'];  ?>px !important;  <?php } ?>
	<?php if (!empty($qode_options_satellite['dropdown_fontstyle_thirdlvl'])) { ?> font-style: <?php echo $qode_options_satellite['dropdown_fontstyle_thirdlvl'];  ?> !important;   <?php } ?>
	<?php if (!empty($qode_options_satellite['dropdown_fontweight_thirdlvl'])) { ?> font-weight: <?php echo $qode_options_satellite['dropdown_fontweight_thirdlvl'];  ?> !important;  <?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_satellite['dropdown_hovercolor_thirdlvl'])) { ?>
.drop_down .second .inner ul li.sub ul li:hover a,
.drop_down .second .inner ul li ul li:hover a
{
	color: <?php echo $qode_options_satellite['dropdown_hovercolor_thirdlvl'];  ?> !important;
}
<?php } ?>
<?php if (!empty($qode_options_satellite['dropdown_separator_color'])) { ?>
.drop_down .second .inner ul li a,
.drop_down .second .inner ul li h5,
.drop_down .second .inner ul li.sub ul li a,
.drop_down .second .inner ul.right li.sub ul li a
{
	border-color: <?php echo $qode_options_satellite['dropdown_separator_color'];  ?> !important;
}
<?php } ?>
<?php if (!empty($qode_options_satellite['h1_color']) || !empty($qode_options_satellite['h1_fontsize']) || !empty($qode_options_satellite['h1_lineheight']) || !empty($qode_options_satellite['h1_fontstyle']) || !empty($qode_options_satellite['h1_fontweight']) || $qode_options_satellite['h1_google_fonts'] != "-1") { ?>
h1{
	<?php if (!empty($qode_options_satellite['h1_color'])) { ?>	color: <?php echo $qode_options_satellite['h1_color'];  ?>; <?php } ?>
	<?php if($qode_options_satellite['h1_google_fonts'] != "-1"){ ?>
	font-family: <?php echo str_replace('+', ' ', $qode_options_satellite['h1_google_fonts']); ?>, sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_satellite['h1_fontsize'])) { ?>font-size: <?php echo $qode_options_satellite['h1_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_satellite['h1_lineheight'])) { ?>line-height: <?php echo $qode_options_satellite['h1_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_satellite['h1_fontstyle'])) { ?>font-style: <?php echo $qode_options_satellite['h1_fontstyle'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_satellite['h1_fontweight'])) { ?>font-weight: <?php echo $qode_options_satellite['h1_fontweight'];  ?>; <?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_satellite['page_title_color']) || !empty($qode_options_satellite['page_title_fontsize']) || !empty($qode_options_satellite['page_title_lineheight']) || !empty($qode_options_satellite['page_title_fontstyle']) || !empty($qode_options_satellite['page_title_fontweight']) || $qode_options_satellite['page_title_position'] != "0" || $qode_options_satellite['page_title_google_fonts'] != "-1") { ?>
.title h1{
	<?php if (!empty($qode_options_satellite['page_title_color'])) { ?>color: <?php echo $qode_options_satellite['page_title_color'];  ?>; <?php } ?>
	<?php if($qode_options_satellite['page_title_google_fonts'] != "-1"){ ?>
	font-family: <?php echo str_replace('+', ' ', $qode_options_satellite['page_title_google_fonts']); ?>, sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_satellite['page_title_fontsize'])) { ?>font-size: <?php echo $qode_options_satellite['page_title_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_satellite['page_title_lineheight'])) { ?>line-height: <?php echo $qode_options_satellite['page_title_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_satellite['page_title_fontstyle'])) { ?>font-style: <?php echo $qode_options_satellite['page_title_fontstyle'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_satellite['page_title_fontweight'])) { ?>font-weight: <?php echo $qode_options_satellite['page_title_fontweight'];  ?>; <?php } ?>
	<?php if($qode_options_satellite['page_title_position'] != "0"){ ?>
		text-align: <?php if($qode_options_satellite['page_title_position'] == "1"){echo "left";} if($qode_options_satellite['page_title_position'] == "2"){echo "center";} if($qode_options_satellite['page_title_position'] == "3"){echo "right";}  ?>;
	<?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_satellite['h2_color']) || !empty($qode_options_satellite['h2_fontsize']) || !empty($qode_options_satellite['h2_lineheight']) || !empty($qode_options_satellite['h2_fontstyle']) || !empty($qode_options_satellite['h2_fontweight']) || $qode_options_satellite['h2_google_fonts'] != "-1") { ?>
h2,
h2 a{
	<?php if (!empty($qode_options_satellite['h2_color'])) { ?>color: <?php echo $qode_options_satellite['h2_color'];  ?>; <?php } ?>
	<?php if($qode_options_satellite['h2_google_fonts'] != "-1"){ ?>
		font-family: <?php echo str_replace('+', ' ', $qode_options_satellite['h2_google_fonts']); ?>, sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_satellite['h2_fontsize'])) { ?>font-size: <?php echo $qode_options_satellite['h2_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_satellite['h2_lineheight'])) { ?>line-height: <?php echo $qode_options_satellite['h2_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_satellite['h2_fontstyle'])) { ?>font-style: <?php echo $qode_options_satellite['h2_fontstyle'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_satellite['h2_fontweight'])) { ?>font-weight: <?php echo $qode_options_satellite['h2_fontweight'];  ?>; <?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_satellite['h3_color']) || !empty($qode_options_satellite['h3_fontsize']) || !empty($qode_options_satellite['h3_lineheight']) || !empty($qode_options_satellite['h3_fontstyle']) || !empty($qode_options_satellite['h3_fontweight']) || $qode_options_satellite['h3_google_fonts'] != "-1") { ?>
h3,h3 a{
	<?php if (!empty($qode_options_satellite['h3_color'])) { ?>color: <?php echo $qode_options_satellite['h3_color'];  ?>; <?php } ?>
	<?php if($qode_options_satellite['h3_google_fonts'] != "-1"){ ?>
	font-family: <?php echo str_replace('+', ' ', $qode_options_satellite['h3_google_fonts']); ?>, sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_satellite['h3_fontsize'])) { ?>font-size: <?php echo $qode_options_satellite['h3_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_satellite['h3_lineheight'])) { ?>line-height: <?php echo $qode_options_satellite['h3_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_satellite['h3_fontstyle'])) { ?>font-style: <?php echo $qode_options_satellite['h3_fontstyle'];?>; <?php } ?>
	<?php if (!empty($qode_options_satellite['h3_fontweight'])) { ?>font-weight: <?php echo $qode_options_satellite['h3_fontweight'];  ?>; <?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_satellite['h4_color']) || !empty($qode_options_satellite['h4_fontsize']) || !empty($qode_options_satellite['h4_lineheight']) || !empty($qode_options_satellite['h4_fontstyle']) || !empty($qode_options_satellite['h4_fontweight']) || $qode_options_satellite['h4_google_fonts'] != "-1") { ?>
h4,
h4 a{
	<?php if (!empty($qode_options_satellite['h4_color'])) { ?>color: <?php echo $qode_options_satellite['h4_color'];  ?>; <?php } ?>
	<?php if($qode_options_satellite['h4_google_fonts'] != "-1"){ ?>
		font-family: <?php echo str_replace('+', ' ', $qode_options_satellite['h4_google_fonts']); ?>, sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_satellite['h4_fontsize'])) { ?>font-size: <?php echo $qode_options_satellite['h4_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_satellite['h4_lineheight'])) { ?>line-height: <?php echo $qode_options_satellite['h4_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_satellite['h4_fontstyle'])) { ?>font-style: <?php echo $qode_options_satellite['h4_fontstyle'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_satellite['h4_fontweight'])) { ?>font-weight: <?php echo $qode_options_satellite['h4_fontweight'];  ?>; <?php } ?>
}

<?php } ?>
<?php if (!empty($qode_options_satellite['h5_color']) || !empty($qode_options_satellite['h5_fontsize']) || !empty($qode_options_satellite['h5_lineheight']) || !empty($qode_options_satellite['h5_fontstyle']) || !empty($qode_options_satellite['h5_fontweight']) || $qode_options_satellite['h5_google_fonts'] != "-1") { ?>
h5,
h5 a{
	<?php if (!empty($qode_options_satellite['h5_color'])) { ?>color: <?php echo $qode_options_satellite['h5_color'];  ?>; <?php } ?>
	<?php if($qode_options_satellite['h5_google_fonts'] != "-1"){ ?>
	font-family: <?php echo str_replace('+', ' ', $qode_options_satellite['h5_google_fonts']); ?>, sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_satellite['h5_fontsize'])) { ?>font-size: <?php echo $qode_options_satellite['h5_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_satellite['h5_lineheight'])) { ?>line-height: <?php echo $qode_options_satellite['h5_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_satellite['h5_fontstyle'])) { ?>font-style: <?php echo $qode_options_satellite['h5_fontstyle'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_satellite['h5_fontweight'])) { ?>font-weight: <?php echo $qode_options_satellite['h5_fontweight'];  ?>; <?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_satellite['h6_color']) || !empty($qode_options_satellite['h6_fontsize']) || !empty($qode_options_satellite['h6_lineheight']) || !empty($qode_options_satellite['h6_fontstyle']) || !empty($qode_options_satellite['h6_fontweight']) || $qode_options_satellite['h6_google_fonts'] != "-1") { ?>
h6{
	<?php if (!empty($qode_options_satellite['h6_color'])) { ?>color: <?php echo $qode_options_satellite['h6_color'];  ?>; <?php } ?>
	<?php if($qode_options_satellite['h6_google_fonts'] != "-1"){ ?>
	font-family: <?php echo str_replace('+', ' ', $qode_options_satellite['h6_google_fonts']); ?>, sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_satellite['h6_fontsize'])) { ?>font-size: <?php echo $qode_options_satellite['h6_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_satellite['h6_lineheight'])) { ?>line-height: <?php echo $qode_options_satellite['h6_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_satellite['h6_fontstyle'])) { ?>font-style: <?php echo $qode_options_satellite['h6_fontstyle'];  ?>;  <?php } ?>
	<?php if (!empty($qode_options_satellite['h6_fontweight'])) { ?>font-weight: <?php echo $qode_options_satellite['h6_fontweight'];  ?>; <?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_satellite['text_color']) || !empty($qode_options_satellite['text_fontsize']) || !empty($qode_options_satellite['text_lineheight']) || !empty($qode_options_satellite['text_fontstyle']) || !empty($qode_options_satellite['text_fontweight']) || $qode_options_satellite['text_google_fonts'] != "-1" || !empty($qode_options_satellite['text_margin'])) { ?>
p{
	<?php if (!empty($qode_options_satellite['text_color'])) { ?>color: <?php echo $qode_options_satellite['text_color'];  ?>;<?php } ?>
	<?php if($qode_options_satellite['text_google_fonts'] != "-1"){ ?>
		font-family: <?php echo str_replace('+', ' ', $qode_options_satellite['text_google_fonts']); ?>, sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_satellite['text_fontsize'])) { ?>font-size: <?php echo $qode_options_satellite['text_fontsize'];  ?>px;<?php } ?>
	<?php if (!empty($qode_options_satellite['text_lineheight'])) { ?>line-height: <?php echo $qode_options_satellite['text_lineheight'];  ?>px;<?php } ?>
	<?php if (!empty($qode_options_satellite['text_fontstyle'])) { ?>font-style: <?php echo $qode_options_satellite['text_fontstyle'];  ?>;<?php } ?>
	<?php if (!empty($qode_options_satellite['text_fontweight'])) { ?>font-weight: <?php echo $qode_options_satellite['text_fontweight'];  ?>;<?php } ?>
	<?php if (!empty($qode_options_satellite['text_margin'])) { ?>margin-top: <?php echo $qode_options_satellite['text_margin'];  ?>px;<?php } ?>
	<?php if (!empty($qode_options_satellite['text_margin'])) { ?>margin-bottom: <?php echo $qode_options_satellite['text_margin'];  ?>px;<?php } ?>
}

.title .subtitle{
	<?php if (!empty($qode_options_satellite['text_color'])) { ?>color: <?php echo $qode_options_satellite['text_color'];  ?>;<?php } ?>
	<?php if($qode_options_satellite['text_google_fonts'] != "-1"){ ?>
		font-family: <?php echo str_replace('+', ' ', $qode_options_satellite['text_google_fonts']); ?>, sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_satellite['text_fontsize'])) { ?>font-size: <?php echo $qode_options_satellite['text_fontsize'];  ?>px;<?php } ?>
	<?php if (!empty($qode_options_satellite['text_lineheight'])) { ?>line-height: <?php echo $qode_options_satellite['text_lineheight'];  ?>px;<?php } ?>
	<?php if (!empty($qode_options_satellite['text_fontstyle'])) { ?>font-style: <?php echo $qode_options_satellite['text_fontstyle'];  ?>;<?php } ?>
	<?php if (!empty($qode_options_satellite['text_fontweight'])) { ?>font-weight: <?php echo $qode_options_satellite['text_fontweight'];  ?>;<?php } ?>
}
<?php } ?>

<?php if($qode_options_satellite['page_title_position'] != "0"){ ?>
	.title .subtitle{
		text-align: <?php if($qode_options_satellite['page_title_position'] == "1"){echo "left";} if($qode_options_satellite['page_title_position'] == "2"){echo "center";} if($qode_options_satellite['page_title_position'] == "3"){echo "right";}  ?>;
	}
<?php } ?>

<?php if (!empty($qode_options_satellite['link_color']) || !empty($qode_options_satellite['link_fontstyle']) || !empty($qode_options_satellite['link_fontweight']) || !empty($qode_options_satellite['link_fontdecoration'])) { ?>
a, p a{
	<?php if (!empty($qode_options_satellite['link_color'])) { ?>color: <?php echo $qode_options_satellite['link_color'];  ?>;<?php } ?>
	<?php if (!empty($qode_options_satellite['link_fontstyle'])) { ?>font-style: <?php echo $qode_options_satellite['link_fontstyle'];  ?>;<?php } ?>
	<?php if (!empty($qode_options_satellite['link_fontweight'])) { ?>font-weight: <?php echo $qode_options_satellite['link_fontweight'];  ?>;<?php } ?>
	<?php if (!empty($qode_options_satellite['link_fontdecoration'])) { ?>text-decoration: <?php echo $qode_options_satellite['link_fontdecoration'];  ?>;<?php } ?>
}
<?php } ?>

<?php if (!empty($qode_options_satellite['page_subtitle_color']) || !empty($qode_options_satellite['page_subtitle_fontsize']) || !empty($qode_options_satellite['page_subtitle_lineheight']) || !empty($qode_options_satellite['page_subtitle_fontstyle']) || !empty($qode_options_satellite['page_subtitle_fontweight']) || $qode_options_satellite['page_subtitle_google_fonts'] != "-1") { ?>
.title .subtitle{
	<?php if (!empty($qode_options_satellite['page_subtitle_color'])) { ?>color: <?php echo $qode_options_satellite['page_subtitle_color'];  ?>; <?php } ?>
	<?php if($qode_options_satellite['page_title_google_fonts'] != "-1"){ ?>
	font-family: <?php echo str_replace('+', ' ', $qode_options_satellite['page_subtitle_google_fonts']); ?>, sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_satellite['page_subtitle_fontsize'])) { ?>font-size: <?php echo $qode_options_satellite['page_subtitle_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_satellite['page_subtitle_lineheight'])) { ?>line-height: <?php echo $qode_options_satellite['page_subtitle_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_satellite['page_subtitle_fontstyle'])) { ?>font-style: <?php echo $qode_options_satellite['page_subtitle_fontstyle'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_satellite['page_subtitle_fontweight'])) { ?>font-weight: <?php echo $qode_options_satellite['page_subtitle_fontweight'];  ?>; <?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_satellite['link_hovercolor']) || !empty($qode_options_satellite['link_fontdecoration'])) { ?>
a:hover,
p a:hover,
#lang_sel_footer ul li a.lang_sel_sel,
#lang_sel_footer ul li a:hover,
#lang_sel_footer ul li a.lang_sel_sel:hover,
.header_top #lang_sel ul > li:hover > a,
.header_top #lang_sel_click ul > li:hover > a,
.header_top #lang_sel ul li ul li a:hover,
.header_top #lang_sel_click ul li ul li a:hover,
.header_top #lang_sel_list ul li a,
.header_top #lang_sel_list ul li a:visited,
.header_top #lang_sel_list ul li a:hover,
.header_top #lang_sel_list ul li a.lang_sel_other:hover,
aside #lang_sel_list ul li a:hover,
aside #lang_sel_list a.lang_sel_sel:hover,
aside #lang_sel_list ul li a.lang_sel_sel,
aside #lang_sel ul li ul li:hover a,
aside #lang_sel_click ul li ul li:hover a,
aside #lang_sel_click a.lang_sel_sel:hover,
aside #lang_sel a.lang_sel_sel:hover,
.footer_top #lang_sel_list ul li a:hover,
.footer_top #lang_sel_list a.lang_sel_sel:hover,
.footer_top #lang_sel_list ul li a.lang_sel_sel,
.footer_top #lang_sel ul li ul li:hover a,
.footer_top #lang_sel_click ul li ul li:hover a,
.footer_top #lang_sel_click a.lang_sel_sel:hover,
.footer_top #lang_sel a.lang_sel_sel:hover,
.footer_top #lang_sel_list ul li a:hover,
.footer_top #lang_sel_list a.lang_sel_sel:hover,
.footer_top #lang_sel_list ul li a.lang_sel_sel,
.footer_top #lang_sel ul li ul li:hover a,
.footer_top #lang_sel_click ul li ul li:hover a,
.footer_top #lang_sel_click a.lang_sel_sel:hover,
.footer_top #lang_sel a.lang_sel_sel:hover{

	<?php if (!empty($qode_options_satellite['link_hovercolor'])) { ?>color: <?php echo $qode_options_satellite['link_hovercolor'];  ?>;<?php } ?>
	<?php if (!empty($qode_options_satellite['link_fontdecoration'])) { ?>text-decoration: <?php echo $qode_options_satellite['link_fontdecoration'];  ?>;<?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_satellite['blockquote_font_color'])) { ?>
	blockquote h4{
		color: <?php echo $qode_options_satellite['blockquote_font_color'];  ?>;  
	}
<?php } ?>
<?php if (!empty($qode_options_satellite['smooth_background_color'])) { ?>
#ascrail2000{
	background-color: <?php echo $qode_options_satellite['smooth_background_color'];  ?>; 
}
<?php } ?>
<?php if (!empty($qode_options_satellite['smooth_bar_color'])) { 
?>
#ascrail2000 div{
	background-color: <?php echo $qode_options_satellite['smooth_bar_color'];  ?> !important;
}
<?php } ?>

<?php if (!empty($qode_options_satellite['message_backgroundcolor']) || (isset($qode_options_satellite['message_bordercolor']) && !empty($qode_options_satellite['message_bordercolor']))) { ?>
.message{
	<?php if (!empty($qode_options_satellite['message_backgroundcolor'])) { ?>background-color: <?php echo $qode_options_satellite['message_backgroundcolor'];  ?><?php } ?>;
	<?php if (isset($qode_options_satellite['message_bordercolor']) && !empty($qode_options_satellite['message_bordercolor'])) { ?>border-color: <?php echo $qode_options_satellite['message_bordercolor'];  ?> <?php } ?>; 
}
<?php } ?>
<?php if (!empty($qode_options_satellite['message_title_color']) || !empty($qode_options_satellite['message_title_fontsize']) || !empty($qode_options_satellite['message_title_lineheight']) || !empty($qode_options_satellite['message_title_fontstyle']) || !empty($qode_options_satellite['message_title_fontweight']) || $qode_options_satellite['message_title_google_fonts'] != "-1") { ?>
.message h4{
<?php if (!empty($qode_options_satellite['message_title_color'])) { ?>	color: <?php echo $qode_options_satellite['message_title_color'];  ?>; <?php } ?>
	<?php if($qode_options_satellite['message_title_google_fonts'] != "-1"){ ?>
	font-family: <?php echo str_replace('+', ' ', $qode_options_satellite['message_title_google_fonts']); ?>, sans-serif;
	<?php } ?>
<?php if (!empty($qode_options_satellite['message_title_fontsize'])) { ?>	font-size: <?php echo $qode_options_satellite['message_title_fontsize'];  ?>px; <?php } ?>
<?php if (!empty($qode_options_satellite['message_title_lineheight'])) { ?>	line-height: <?php echo $qode_options_satellite['message_title_lineheight'];  ?>px; <?php } ?>
<?php if (!empty($qode_options_satellite['message_title_fontstyle'])) { ?>	font-style: <?php echo $qode_options_satellite['message_title_fontstyle'];  ?>; <?php } ?>
<?php if (!empty($qode_options_satellite['message_title_fontweight'])) { ?>	font-weight: <?php echo $qode_options_satellite['message_title_fontweight'];  ?>; <?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_satellite['separator_thickness']) || !empty($qode_options_satellite['separator_topmargin']) || !empty($qode_options_satellite['separator_bottommargin']) || !empty($qode_options_satellite['separator_color'])) { ?>
.separator
{
<?php if (!empty($qode_options_satellite['separator_thickness'])) { ?>	height: <?php echo $qode_options_satellite['separator_thickness'];  ?>px; <?php } ?>
<?php if (!empty($qode_options_satellite['separator_topmargin'])) { ?>	margin-top: <?php echo $qode_options_satellite['separator_topmargin'];  ?>px; <?php } ?>
<?php if (!empty($qode_options_satellite['separator_bottommargin'])) { ?>	margin-bottom: <?php echo $qode_options_satellite['separator_bottommargin'];  ?>px; <?php } ?>
<?php if (!empty($qode_options_satellite['separator_color'])) { ?>	background-color: <?php echo $qode_options_satellite['separator_color'];  ?>; <?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_satellite['separator_thickness']) || !empty($qode_options_satellite['separator_color'])) { ?>
	.comment_holder ul.comment-list,
	.blog_holder article
	{
		border-color:<?php echo $qode_options_satellite['separator_color'];  ?>;
		border-width:<?php echo $qode_options_satellite['separator_thickness'];  ?>px;
		
	}
<?php } ?>

<?php if (!empty($qode_options_satellite['button_title_color']) || !empty($qode_options_satellite['button_title_fontsize']) || !empty($qode_options_satellite['button_title_lineheight']) || !empty($qode_options_satellite['button_title_fontstyle']) || !empty($qode_options_satellite['button_title_fontweight']) || !empty($qode_options_satellite['button_backgroundcolor']) || $qode_options_satellite['button_title_google_fonts'] != "-1") { ?>
.button, #submit_comment, .load_more a{
<?php if (!empty($qode_options_satellite['button_title_color'])) { ?>	color: <?php echo $qode_options_satellite['button_title_color'];  ?>; <?php } ?>
	<?php if($qode_options_satellite['button_title_google_fonts'] != "-1"){ ?>
	font-family: <?php echo str_replace('+', ' ', $qode_options_satellite['button_title_google_fonts']); ?>, sans-serif;
	<?php } ?>
	<?php if (!empty($qode_options_satellite['button_title_fontsize'])) { ?>	font-size: <?php echo $qode_options_satellite['button_title_fontsize'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_satellite['button_title_lineheight'])) { ?>	line-height: <?php echo $qode_options_satellite['button_title_lineheight'];  ?>px; <?php } ?>
	<?php if (!empty($qode_options_satellite['button_title_fontstyle'])) { ?>	font-style: <?php echo $qode_options_satellite['button_title_fontstyle'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_satellite['button_title_fontweight'])) { ?>	font-weight: <?php echo $qode_options_satellite['button_title_fontweight'];  ?>; <?php } ?>
	<?php if (!empty($qode_options_satellite['button_backgroundcolor'])) { ?>	background-color: <?php echo $qode_options_satellite['button_backgroundcolor'];  ?>; <?php } ?>
}
<?php } ?>
<?php if (!empty($qode_options_satellite['button_title_hovercolor']) || (isset($qode_options_satellite['button_backgroundhovercolor']) && !empty($qode_options_satellite['button_backgroundhovercolor']))) { ?>
	.button:hover,
	#submit_comment:hover,
	.load_more a:hover{
		<?php if (!empty($qode_options_satellite['button_title_hovercolor'])) { ?> color: <?php echo $qode_options_satellite['button_title_hovercolor'];?> !important; <?php } ?>
			}
<?php } ?>
<?php if (!empty($qode_options_satellite['footer_top_background_color'])) { ?>
	footer,
	.footer_top #lang_sel ul ul,
	.footer_top #lang_sel_click ul ul,
	.footer_top  #lang_sel *:hover > a,
	.footer_top  #lang_sel ul ul *:hover > a,
	.footer_top  #lang_sel_click *:hover > a,
	.footer_top  #lang_sel_click ul ul *:hover > a
	{
		background-color: <?php echo $qode_options_satellite['footer_top_background_color'];  ?>;
	}
<?php } ?>
<?php if (!empty($qode_options_satellite['footer_top_title_color'])) { ?>
.footer_top .column_inner > div h5 { 
	color:<?php echo $qode_options_satellite['footer_top_title_color'];  ?>;
}
<?php } ?>
<?php if (!empty($qode_options_satellite['footer_top_text_color'])) { ?>
	footer,
	.footer_top,
	.footer_top p,
	.footer_top ul li a,
	.footer_top #lang_sel ul li ul li a,
	.footer_top #lang_sel_click ul li ul li a,
	.footer_top #lang_sel ul li ul li a:visited,
	.footer_top #lang_sel_click ul li ul li a:visited,
	.footer_top #lang_sel a.lang_sel_sel,
	.footer_top #lang_sel_click a.lang_sel_sel,
	.footer_top #lang_sel_list ul li a,
	.footer_top #lang_sel_list ul li a:visited
	{
		color: <?php echo $qode_options_satellite['footer_top_text_color'];  ?>;
	}
<?php } ?>
<?php if (!empty($qode_options_satellite['footer_bottom_background_color'])) { ?>
	.footer_bottom,
	#lang_sel_footer
	{
		background-color:<?php echo $qode_options_satellite['footer_bottom_background_color'];  ?>;
	}
<?php } ?>
<?php if (!empty($qode_options_satellite['footer_bottom_text_color'])) { ?>
.footer_bottom, .footer_bottom p, .footer_bottom p a, #lang_sel_footer ul li a{
	color:<?php echo $qode_options_satellite['footer_bottom_text_color'];  ?>;
}
<?php } ?>
<?php if (isset($qode_options_satellite['side_area_background_color']) && !empty($qode_options_satellite['side_area_background_color'])) { ?>
	.side_menu,
	.side_menu #lang_sel,
	.side_menu #lang_sel_click,
	.side_menu #lang_sel ul ul,
	.side_menu #lang_sel_click ul ul 
	{
		background-color:<?php echo $qode_options_satellite['side_area_background_color'];  ?>;
	}
<?php } ?>
<?php if (isset($qode_options_satellite['side_area_text_color']) && !empty($qode_options_satellite['side_area_text_color'])) { ?>
	.side_menu .widget.widget_search form,
	.side_menu .widget.widget_search form input[type="text"],
	.side_menu .widget.widget_search form input[type="submit"],
	.side_menu .widget h6,
	.side_menu .widget h6 a,
	.side_menu .widget p,
	.side_menu .widget li a,
	.side_menu .widget.widget_rss li a.rsswidget,
	.side_menu #wp-calendar caption,
	.side_menu .widget li,
	.side_menu_title h5,
	.side_menu #lang_sel_list ul li a,
	.side_menu #lang_sel_list ul li a:visited,
	.side_menu #lang_sel_list ul li a:hover,
	.side_menu #lang_sel_list a.lang_sel_sel:hover,
	.side_menu #lang_sel_list ul li a.lang_sel_sel,
	.side_menu #lang_sel a.lang_sel_sel,
	.side_menu #lang_sel_click a.lang_sel_sel,
	.side_menu #lang_sel ul li ul li a,
	.side_menu #lang_sel_click ul li ul li a,
	.side_menu #lang_sel ul li ul li a:visited,
	.side_menu #lang_sel_click ul li ul li a:visited
	{
		color:<?php echo $qode_options_satellite['side_area_text_color'];  ?>;
	}

	.side_menu .widget.widget_archive select, 
	.side_menu .widget.widget_categories select, 
	.side_menu .widget.widget_text select,
	.side_menu .widget.widget_search form input[type="submit"],
	.side_menu #wp-calendar th, 
	.side_menu #wp-calendar td,
	.side_menu .widget .tagcloud a
	
	{
		background-color: <?php echo $qode_options_satellite['side_area_text_color'];  ?>;
	}

	.side_menu .widget.widget_search form,
	.side_menu #lang_sel,
	.side_menu #lang_sel_click,
	.side_menu #lang_sel ul ul,
	.side_menu #lang_sel_click ul ul 	
	{
		border-color: <?php echo $qode_options_satellite['side_area_text_color'];  ?>;
	}
<?php } ?>