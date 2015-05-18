<?php

namespace Shuwax\Tools;

class Dlugosc
{

    public $text;
    public function setText($text)
    {
        $this->text=$text;
        return $this;
    }
    
    public function getText() {
       return $this->text;        
    }
    
    public function dlugosc() {
        
    $tekst=$this->text;
    $n=0;
    $wyraz='';
    $tablica=array('');
    
    
    // zamiana całego tekstu na części
    for($i=0;$i<strlen($tekst);$i++)
    {
        if($tekst[$i]==' ')
        {
            $tablica[$n]=$wyraz;
            $wyraz='';
            $n++;
        }
        else if($i+1==strlen($tekst))
        {
            $wyraz.=$tekst[$i];
            $tablica[$n]=$wyraz;
            $n++;
        }
        else
        $wyraz.=$tekst[$i];
    } 
    
    
    // usuniecie powtarzajacych sie elementow
     $g=0;$k=0;
     for($i=0;$i<count($tablica);$i++)
    {
        $pom=$tablica[$i];
        for($j=0;$j<=$i;$j++)
        {
            if($pom==$tablica[$j] && $j!=$i)
            {
                $g++;
            }
        }
        if($g==0)
        {
            $str[$k]=$pom;
            $k++;
        }
        $g=0;
    }
    
    
    // bombelkowe sortowanie
     for($i=0;$i<count($str);$i++)
    {
         for($j=0;$j<count($str)-$i-1;$j++)
         {
             if(strlen($str[$j])<strlen($str[$j+1]))
             {
               $pom=$str[$j];
               $str[$j]=$str[$j+1];
               $str[$j+1]=$pom;
             }
         }         
     }
     
     $koniec='';
     for($i=0;$i<count($str);$i++)
    {
         $koniec.=$str[$i].' - '.strlen($str[$i]).' ';
     }
    return $koniec;
        
    }

}
