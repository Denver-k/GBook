<?php
class DB extends PDO{

    public function __construct($host,$dbname,$user_name, $pass)
    {
        parent::__construct("mysql:host=$host;port=3306;dbname=$dbname",$user_name, $pass);
        
        try 
        { 
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }
        catch (PDOException $e) 
        {
            die($e->getMessage());
        }
    }

    function add($name, $email, $comment)
    {
        
        $stmt = parent::prepare("INSERT INTO gbook(name, email, comment) VALUES('$name', '$email', '$comment')");
        if($stmt)
            $stmt ->execute();
        else
            self::getError();
    }
    
    function getAll($pages)
    {
        $stmt = parent::prepare("SELECT id, name, email, comment FROM gbook ORDER BY id DESC LIMIT :start,:end ");
        
        if($stmt)
        {
            $stmt->bindParam(':start', $pages->offset, PDO::PARAM_INT);
            $stmt->bindParam(':end', $pages->limit, PDO::PARAM_INT);
            $stmt ->execute();
            return $stmt ->fetchAll();
        }
        else
        {
            self::getError();
        }
    }
    function delete($id)
    {
        $stmt = parent::prepare("DELETE FROM gbook WHERE id=$id");
        
        if($stmt)
        {
            $stmt ->execute();
        }
        else
        {
            self::getError();
        }
    }
    function get_num_rows()
    {
        $stmt = parent::prepare('SELECT COUNT(*) FROM gbook');
        if($stmt)
        {
            $stmt ->execute();
            return $stmt ->fetchColumn();
        }
        else
        {
            self::getError();
        }
    }
}
