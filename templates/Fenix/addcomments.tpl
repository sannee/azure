<table width="100%" style="padding-top:15px;">
    <tr>
        <td width="5"></td>
        <td class="news" valign="top">
<table width="450">
[not-logged]    <tr>
                  <td height="25" class="slink">Ваше Имя:</td>
                  <td height="25" style="width:380px;"><input type="text" name="name" id="name" style="width:140px; height:20px; font-family:tahoma; font-size:11px; border:1px solid #E0E0E0 "></td>
                </tr>
                <tr>
                  <td height="25" class="slink">Ваш E-Mail:</td>
                  <td height="25"><input type="text" name="mail" id="mail" style="width:140px; height:20px; font-family:tahoma; font-size:11px; border:1px solid #E0E0E0 "></td>
                </tr>[/not-logged]
 				<tr>
                  <td colspan="2">{editor}</td>
                </tr>
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
[sec_code]
				<tr>
				  <td class="slink">Код:</td>
				  <td class="slink">{sec_code}</td>
				</tr>
				<tr>
				  <td height="25" class="slink">Введите код</td>
				  <td><input type="text" name="sec_code" id="sec_code" style="width:167px; height:20px; font-family:tahoma; font-size:11px; border:1px solid #E0E0E0 "></td>
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

</table><div class="fieldsubmit">
			<button type="submit" name="submit" class="cool_button yellow"><span>[not-aviable=comments]Добавить[/not-aviable][aviable=comments]Изменить[/aviable]</span></button><br><br>
		</div></td>
        <td width="5"></td>
    </tr>
</table>