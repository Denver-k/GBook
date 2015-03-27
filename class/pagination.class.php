<?php
     class Pagination
     {
         
         public $offset;
         public $limit;
         protected $_curr_page;
         protected $_total_num_rows;
                 
         function __construct($num_rows, $limit)
            {
             $this->_total_num_rows = $num_rows;
             $this->limit = $limit;
             
             if(empty($_GET['page']))
                {
                    $this -> _curr_page = 1;
                    $this -> offset = 0;
                }
             else
                {
                    $this -> _curr_page = $_GET['page']*1;
                    $this -> offset = ($this -> limit * $this -> _curr_page) - $this -> limit;
                } 
            }
        public function view()
        {
                if($this->_total_num_rows > $this->limit)
                {
                    $n = 1;
                    while($n <= ceil($this->_total_num_rows/$this->limit))
                    {
                        if($n != $this -> _curr_page)
                        {
                            echo "<a href='?page=$n'>$n</a>";
                        }
                        else
                        {
                            echo "<strong>$n</strong>";
                        }
                        $n++;
                    }
                }
            }
            
     }


?>