<?php 
$result = 0;
if(isset($_SESSION['test'])){
	//читаємо відповіді з ini файлу
	$answers = parse_ini_file('answers.ini');
	//проходимо по відповідям і перевіряємо чи є серед них правильні
	foreach($_SESSION['test'] as $value){
		if (array_key_exists($value, $answers))
			//сумуємо правильні відповіді
		$result += (int)$answers[$value];
	}
	//очищуємо дані сессії
	session_destroy();
}
?>
<table width="100%">
	<tr>
		<td align="left">
		<p>Ваш результат: <?= $result?> з 30</p>
		</td>
	</tr>
</table>