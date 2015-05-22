<?php

namespace annabiala94\Tools;

class Convert
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
  

    public function toarabic()
    {
        
         $Poz1 = 0 ; 
         $Poz2 = 0 ; 
         $Wynik = 0 ; 
         $Length = 0; 
         
    $Arabic = array(1000, 500, 100, 50, 10, 5, 1); 
    $Roman = array('M', 'D', 'C', 'L', 'X', 'V', 'I');    

   $Length = strlen($this->str) ; 

    while( ($Poz2 < $Length) && ( $Poz1 < 7) ) 
    { 
        if( $this->str[$Poz2] == $Roman[$Poz1] ) 
        { 
          $Wynik += $Arabic[$Poz1]; 
          $Poz2++; 
        } 
        elseif(( $Poz2 % 2 == 0) && ( $Poz1 < 5 ) && ($Poz2 < $Length-1) && 
                ($this->str[$Poz2] == $Roman[$Poz1+2]) && ($this->str[$Poz2+1] == $Roman[$Poz1]) ) 
        { 
            $Wynik += $Arabic[$Poz1] - $Arabic[$Poz1 + 2]; 
            $Poz2 += 2 ; 
            $Poz1++ ; 
        } 
        elseif( ($Poz1 % 2 == 1) && ($Poz1 < 6) && ($Poz2 < $Length-1) && 
                 ($this->str[$Poz2] == $Roman[$Poz1 + 1]) && ($this->str[$Poz2 + 1] == $Roman[$Poz1]) ) 
        { 
            $Wynik += $Arabic[$Poz1] - $Arabic[$Poz1 + 1]; 
            $Poz2 += 2; 
            $Poz1++; 
        } 
        else 
        { 
            $Poz1++; 
        } 
    } 

    if ($Poz1 == 7) 
    { 
       $Wynik = -1; 
    } 

    return $Wynik; 
    }
}
