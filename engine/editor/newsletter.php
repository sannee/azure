<?php
/*
=====================================================
 DataLife Engine - by SoftNews Media Group 
-----------------------------------------------------
 http://dle-news.ru/
-----------------------------------------------------
 Copyright (c) 2004,2012 SoftNews Media Group
=====================================================
 ������ ��� ������� ���������� �������
=====================================================
 ����: newsletter.php
-----------------------------------------------------
 ����������: WYSIWYG ��� ��������
=====================================================
*/
if(!defined('DATALIFEENGINE'))
{
  die("Hacking attempt!");
}

echo <<<HTML
<tr>
	<td width="140" valign="top">
	<br />{$lang['nl_message']}</td>
	<td>
		<script type="text/javascript" src="engine/editor/jscripts/tiny_mce/jquery.tinymce.js"></script>
<script type="text/javascript">
$(function(){
	$('#message').tinymce({
		script_url : 'engine/editor/jscripts/tiny_mce/tiny_mce_gzip.php',
		theme : "advanced",
		skin : "cirkuit",
		language : "{$lang['wysiwyg_language']}",
		width : "98%",
		height : "400",
		plugins : "safari,advhr,advimage,emotions,inlinepopups,insertdatetime,media,searchreplace,contextmenu,paste,fullscreen,nonbreaking",
		relative_urls : false,
		convert_urls : false,
		remove_script_host : false,
		force_br_newlines : true,
		force_p_newlines : false,
		dialog_type : 'window',
		extended_valid_elements : "div[align|class|style|id|title]",
		paste_auto_cleanup_on_paste : false,
		paste_text_use_dialog: true,

		// Theme options
		theme_advanced_buttons1 : "formatselect,fontselect,fontsizeselect,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,bullist,numlist,|,forecolor,backcolor,|,code",
		theme_advanced_buttons2 : "fullscreen,|,cut,copy,|,paste,pastetext,pasteword,|,search,|,outdent,indent,|,undo,redo,|,link,image,media,emotions,|,sub,sup,|,charmap,advhr,|,insertdate,inserttime,|,cleanup,removeformat,",
		theme_advanced_buttons3 : "",

		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
	   	plugin_insertdate_dateFormat : "%d-%m-%Y",
	    	plugin_insertdate_timeFormat : "%H:%M:%S",

		// Example content CSS (should be your site CSS)
		content_css : "{$config['http_home_url']}engine/editor/css/content.css"


	});
});
</script>
    <textarea id="message" name="message" style="width:98%;height:300px;"></textarea><br><br>{$lang['nl_info_1']} <b>{$lang['nl_info_2']}</b></td>
	</tr>
HTML;

?>