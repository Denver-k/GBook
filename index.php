<?php include_once dirname(__FILE__).'\inc\gbook.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Гостевая книга</title>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
	<link href="css/all.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<h1>Гостевая книга</h1>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
Ваше имя:<br />
<input type="text" name="name" /><br />
Ваш e-mail:<br />
<input type="text" name="email" /><br />
Сообщение:<br />
<textarea name="comment" cols="50" rows="5"></textarea><br />
<br />
<input type="submit" value="Добавить!" />
</form>
<table>
	<tr>
		<th>Пользователь</th>
		<th>Коментарии</th>
		<th>Удаление</th>
	</tr>
<?php foreach ($users as $user) :?>
	<tr>
		<td><a href = "mailto:<?=$user['email'];?>"><?=$user['name'];?></a></td>
		<td><?=$user['comment'];?></td>
		<td><a href="http://mylocalsite.ua/gbook/index.php?del=<?=$user['id'];?>"> Удалить</a></td>
	</tr>
<?php endforeach;?>
</table>
<?php
	echo $pages->view();
	//echo "<span class=\"\">".$pages->display_jump_menu().$pages->display_items_per_page()."</span>";
?>
</body>
</html>