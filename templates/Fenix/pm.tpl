<table width="100%">
    <tr>
        <td width="5"></td>
      <td class="componentheading" valign="top">Персональные сообщения</td>
        <td width="5"></td>
  </tr>
    <tr>
        <td></td>
      <td class="news" height="50"><div class="dpad">
<div class="pm_status">
	<div class="pm_status_head">Состояние папок</div>
	<div class="pm_status_content">Папки сообщений заполнены на:
{pm-progress-bar}
{proc-pm-limit}% от лимита ({pm-limit} сообщений)
	</div>
</div>
<div style="padding-top:10px;">[inbox]Входящие[/inbox]<br /><br />
[outbox]Отправленные[/outbox]<br /><br />
[new_pm]Отправить[/new_pm]</div>
</div><br />

<div class="clr"></div></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
      <td></td>
        <td></td>
    </tr>
</table>
[pmlist]
<table width="100%">
    <tr>
        <td width="5"></td>
        <td class="componentheading" valign="top">Список сообщений</td>
        <td width="5"></td>
    </tr>
    <tr>
        <td></td>
      <td class="news">{pmlist}</td>
        <td></td>
    </tr>
    <tr>
        <td></td>
      <td></td>
        <td></td>
    </tr>
</table>
[/pmlist]
[newpm]
<table width="100%">
    <tr>
        <td width="5"></td>
        <td class="componentheading" valign="top">Отправка персонального сообщения</td>
        <td width="5"></td>
    </tr>
    <tr>
        <td></td>
      <td class="news" valign="top" style="padding-left:20px;">
<table width="100%" class="slink">
<tr><td colspan="2">
<table class="slink">
                <tr align="left" valign="middle">
                  <td width="80" height="25">Получатель:</td>
                  <td height="25"><input type="text" name="name" value="{author}" style="width:140px; font-family:tahoma; font-size:11px; border:1px solid #E0E0E0 "></td>
                </tr>
                <tr align="left" valign="middle">
                  <td height="25" align="left" >Тема:</td>
                  <td height="25"><input type="text" name="subj" value="{subj}" style="width:200px; font-family:tahoma; font-size:11px; border:1px solid #E0E0E0 "></td>
                </tr></table>
</td></tr>
 				<tr align="left" valign="middle">
                  <td colspan="2">{editor}<br><input type="checkbox" name="outboxcopy" value="1"> Сохранить сообщение в папке "Отправленные"</td>
                            </tr>
[sec_code]                  <tr>
                              <td>Код:</td>
                              <td width="100%"><br />{sec_code}</td>
                            </tr>
                            <tr>
                              <td nowrap>Введите код:</td>
                              <td><input type="text" name="sec_code" id="sec_code" style="width:115px; font-family:verdana; font-size:11px; border:1px solid #E0E0E0;" /></td>
                            </tr>
[/sec_code]
[recaptcha]
							<tr>
							<td colspan="2" height="25"><strong>Введите два слова, показанных на изображении:</strong></td>
							</tr>
							<tr>
							<td colspan="2" height="25">{recaptcha}</td>
							</tr>
[/recaptcha]
[question]
							<tr>
								   <td class="label">
									Вопрос:
								</td>
								<td>
									<div>{question}</div>
								</td>
							</tr>
							<tr>
								<td class="label">
									Ответ:<span class="impot">*</span>
								</td>
								<td>
							<div><input type="text" name="question_answer" id="question_answer" class="f_input" /></div>
								</td>
							</tr>
[/question]
<tr>
<td colspan="2"><br /><input class="bbcodes" type="submit" name="add" value="отправить" />&nbsp;&nbsp;<input class="bbcodes" type="button" onclick="dlePMPreview()" value="просмотр" /></td>
</tr>
</table>
</td>
        <td></td>
  </tr>
    <tr>
        <td></td>
      <td></td>
        <td></td>
    </tr>
</table>
[/newpm]
[readpm]
<table width="100%">
    <tr>
        <td width="5"></td>
      <td class="ntitle2" valign="top" colspan="2">{subj}</td>
        <td width="5"></td>
  </tr>
    <tr>
        <td></td>
      <td class="news" valign="top" height="50" colspan="2">{text}</td>
        <td></td>
    </tr>
    <tr>
        <td></td>
	  <td style="border-top:1px solid #474747;" class="slink">Отправил: {author}</td>
		<td style="border-top:1px solid #474747;" class="slink" align="right">[complaint][пожаловаться][/complaint] [ignore][игнорировать][/ignore] [reply][ответить][/reply] [del][удалить][/del]</td>
        <td></td>
  </tr>
</table>
[/readpm]