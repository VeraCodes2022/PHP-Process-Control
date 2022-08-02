   
<?php
//if the submit button  clicked 
if(isset($_POST['button']) && !empty($_POST) ){
    $Chinese=$_POST['ch'];
    $Mathematics=$_POST['math'];

    if($Chinese=="" || !is_numeric($Chinese)|| !($Chinese>=0 && $Chinese<=100) ){
        echo 'Chemistry scores must be between 0-100';
    }
    elseif($Mathematics=="" || !is_numeric($Mathematics) || !($Mathematics>=0 && $Mathematics<=100) ){
        echo 'Math scores must be between 0-100';
    }else{
        $average=($Chinese+$Mathematics)/2;
            echo "Your average score is:{$average}<br>";
        if($average >=90) 
            echo 'A';
        elseif($average >=80) 
            echo 'B';
        elseif($average >=70) 
            echo 'C';
        elseif($average >=60) 
            echo 'D';
        else  
            echo 'E';
    }
}
?>