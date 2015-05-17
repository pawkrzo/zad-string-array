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
        $dlugosc=strlen($this->str);
        $i=0;
        $pom;
        $aTab=array();
        
        for ($k=0;$k<$dlugosc;$k++)
        {
            if ($str[k]!= ' ')
            {
                $pom+=$str[k];
            }
            else if ($str[k]== ' ')
            {
                $aTab[]=$pom;
                $pom=' ';
            }
            
        }
        
        $i=count($aTab);
        for($j=0;$j<$i;$j++)
        {
             for($k=0;$k<$i-1;$k++)
             {
                  if(strlen($aTab[k])>(strlen($aTab[k+1])))
                  {
                $pom=$aTab[k];
                $aTab[k]=$aTab[k+1];
                $aTab[k+1]=$pom;
                 }
             }
        
        }
        $pom='';
          for($j=0;$j<$i;$j++)
          {
              $pom+=$aTab[j];
              $pom+=' -'.count($aTab[j]);
          }
          return $pom;
    }
}
