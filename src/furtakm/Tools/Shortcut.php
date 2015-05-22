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
        
        // Założenia:
        // Długość skrótu nie może byc mniejsza od 1
        // Długość skrótu nie może byc większa od długości skracanego wyrażenia
        // furtakm
        
        if ($counter < 1)
        {
            $result = 'Długość skrótu musi być wartością większą od 0!';
        }
        elseif(strlen($string) >= $counter)
        {
            
            for ($i = 0; $i < $counter; $i++)
            {
                $result .= $string[$i];
            }
        
        }
        else
        {
            $result = 'Podana długość skrótu jest większa niż długość wyrazu!';
        }
        
        return $result;
    }
}
