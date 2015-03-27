<?php
class Validation
{
    function clearData($data, $type="s")
    {
       switch($type)
        {
           case "s": return trim(strip_tags($data));break;
           case "i": return abs((int)$data);break;
        }
    }
}
