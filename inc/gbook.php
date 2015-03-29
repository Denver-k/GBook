<?php
    include_once __DIR__.'/db_settings.inc.php';
    include_once $_SERVER['DOCUMENT_ROOT'].'/class/db.class.php';
    include_once $_SERVER['DOCUMENT_ROOT'].'/class/validation.class.php';
    include_once $_SERVER['DOCUMENT_ROOT'].'/class/pagination.class.php';
  //Подключение к БД
  $connection = new DB(HOSTNAME, DBNAME, USERNAME, PASSWORD);
  $num_rows = $connection->get_num_rows();
  
  //Пагинация
  $pages = new Pagination($num_rows, $limit_view_rows);
  // Валидация
  $valid = new Validation();
  //Приём данных с формы
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $valid -> clearData($_POST['name']);
        $email = $valid -> clearData($_POST['email']);
        $comment = $valid -> clearData($_POST['comment']);
    }
    if(!empty($name) and !empty($email) and !empty($comment))
    {
	$connection -> add($name, $email, $comment);
	header("Location: http://gbook.esy.es/index.php");
    }
    //Выборка данных с БД
    $users = $connection ->getAll($pages);
    if(isset($_GET['del']))
    {
        $del_id = $valid->clearData($_GET['del'], "i");
    }
    //Удаление данных с БД
    if(!empty($del_id))
    {
        $connection ->delete($del_id);
        header("Location: http://gbook.esy.es/index.php");
    }

  
    