<?php

namespace kzolnierz\Tools;

class Zad1
{
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
    
    
    public function statystyka()
    {
    	$slowa = explode(" ", $this->str);
        $tab = array_combine($slowa, array_fill(0, count($slowa), 0));
        $statystyka = '';
        foreach($slowa as $slowo) 
        {
        	$tab[$slowo]++;
		}
		foreach($tab as $slowo => $licznik) 
		{
			$statystyka .= "$slowo - $licznik; ";
		}
		return $statystyka;
    }
}
