<?php

namespace furtakm\Tools;

class Shortcut
{
    private $lenght;
    private $str;
    
    public function setStr($str)
    {
        $this->str = $str;
        return $this;
    }
    
    public function getStr()
    {
        return $this->str;
    }
    
    public function setLenght($lenght)
    {
        $this->lenght = $lenght;
        return $this;
    }
    
    public function getLenght()
    {
        return $this->lenght;
    }
    
    public function shortcut()
    {
        $result = '';
        $counter = ($this->lenght);
        $string = ($this->str);
        
        for ($i = 0; $i < $counter; $i++)
        {
            $result .= $string[$i];
        }
        
        return $result;
    }
}
