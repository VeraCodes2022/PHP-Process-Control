<?php
//If it is not empty, it means that there is post submission data.
if(!empty($_POST)){
        // var_dump($_POST);
    $year=$_POST['year']; //get year value
    if ($year==''){
        echo 'Please enter a year!';
    }else{
        if(is_numeric($year)){
            $year+=0;
        if(is_int($year)){
          if($year<1){
              echo 'Years must be greater than zero!';
          }else{
              if($year%4 ==0 && $year %100!=0||$year%400==0||$year%3200==0 ||$year%172800==0){
                  echo "{$year}is leap year.";
              }else{echo"{$year} is a normal year.";}
          }
        }else{
            echo 'is not integer!';
        }

        }else{
            echo 'Please enter a numeric year!';
        }
       
    }
}
    
?> 