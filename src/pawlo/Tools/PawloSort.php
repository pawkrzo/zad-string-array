<?php

namespace pawlo\Tools;

class PawloSort
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
    
    public function sort()
    {
        $string = ($this->str);
        $dlugosc=strlen($string);                
        $i=0;
        $pom='';
        $aTab=array();
        
        for ($k=0;$k<$dlugosc;$k++)
        {
         
            if ($string[$k]== ' ')
            {
                $aTab[$i]=$pom;
                $pom='';
                $i++;
            }
            else if ($k+1==$dlugosc)
            {
                $pom.=$string[$k];
                $aTab[$i]=$pom;
                $i++;
            }
            else
                $pom.=$string[$k];
        }
        
        
       
         $g=0;$k=0;
         for($i=0;$i<count($aTab);$i++)
        {
         $pom=$aTab[$i];
         for($j=0;$j<=$i;$j++)
          {
             if($pom==$aTab[$j] && $j!=$i)
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
        $p='';
          for($j=0;$j<count($str);$j++)
          {
           $p.=$str[$j].' - '.strlen($str[$j]).' ';       
          } 
    
       return $p;
       
    } 
}
    

