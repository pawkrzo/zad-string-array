<?php

namespace kamajo5\Tools;

class Zadanie
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
    public function wynik()
    {
        $slowa = explode(" ", $this->str);
        $tab = array_combine($slowa, array_fill(0, count($slowa), 0));
        $wynik = '';
        foreach($slowa as $slowo) 
        {
            $tab[$slowo]++;
        }
        foreach($tab as $slowo => $licznik) 
        {
            $wynik .= "$slowo - $licznik; ";
        }
       return $wynik;
    }
}