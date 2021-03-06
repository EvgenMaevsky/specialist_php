<?php  
	session_start();
	if(!isset($_SESSION['test']) and !isset($_POST['q'])){
		//якщо перший запуск тесту- ініціалізуємо змінні
		$q = 0; //номер запитання
		$title = "Пройдіть тест";
	}else{
		//створюємо сессійну змінну test, що містить масив відповідей
		if($_POST['q']!='1')
			$_SESSION['test'][] = $_POST['answer'];
		$q = $_POST['q'];
		$title = $_POST['title'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Тест</title>
</head>
<body>

<table width="50%" border="1" align='center'>

<tr>
	<td align="center">
		<!-- Верхняя часть страницы -->
		<h1><?= $title?></h1>
		<table width="100%">
			<tr>
				<td align="center">
					<h1>...</h1>
					<p><a href='/index.php'>Прервать тест и вернуться на сайт</a></p>
				</td>
			</tr>
		</table>
		<!-- Верхняя часть страницы -->
	</td>
</tr>

<tr>
	<td>
		<!-- Область основного контента -->
		<?php  
		//в залежності від номеру питання,
		//підключаємо відповідний файл з питанням
		switch($q){
			case 0:
				include 'start.php';
				break;
			case 1:
				include 'q1.php';
				break;
			case 2:
				include 'q2.php';
				break;
			case 3:
				include 'q3.php';
				break;
			default:
				include 'result.php';
		}
		?>
		<!-- Область основного контента -->
	</td>
</tr>
</table>

</body>
</html>