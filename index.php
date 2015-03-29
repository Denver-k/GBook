<?php 
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Expires: " . date("r"));
include_once __DIR__.'/inc/gbook.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Guest Book</title>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
	<link href="css/all.css" type="text/css" rel="stylesheet"/>
</head>
<body>
<h1 style="text-align: center">Guest Book</h1>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
Name:<br />
<input type="text" name="name" style="border-radius:4px" /><br />
E-mail:<br />
<input type="text" name="email" style="border-radius:4px" /><br />
Message:<br />
<textarea name="comment" cols="50" rows="5" style="width:100%; border-radius:5px" ></textarea><br />
<br />
<input type="submit" value="Send!" style="border-radius:5px" />
</form>
<table>
	<tr>
		<th>User</th>
		<th>Comments</th>
		<th>Delete</th>
	</tr>
<?php foreach ($users as $user) :?>
	<tr>
		<td><a href = "mailto:<?=$user['email'];?>"><?=$user['name'];?></a></td>
		<td><?=$user['comment'];?></td>
		<td><a href="http://gbook.esy.es/index.php?del=<?=$user['id'];?>"> Delete</a></td>
	</tr>
<?php endforeach;?>
</table>
<?php
	echo $pages->view();
	//echo "<span class=\"\">".$pages->display_jump_menu().$pages->display_items_per_page()."</span>";
?>
</body>
</html>