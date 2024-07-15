<?php
function getScore($score){

if ($score >=80){
    $grade ="A";
} else if($score >=70){
    $grade = "B";
}else if($score>=60){
    $grade = "C";
}else if($score>= 50){
$grade ="D";
}else if($score>= 40){
    $grade ="E";

}else {
    $grade ="F";{
        return $grade;
    }
}

}
//scores of the students
$njorogeScore = 26;
$kamauScore = 70;
 //determine the grades 
 $njorogeGrade = getScore($njorogeScore);
 $kamauGrade =  getScore($kamauScore);

 // output the grades
 echo "njoroge got a grade of:$njorogeGrade<br>";
 echo "kamau got a grade of:$kamauGrade<br>"; 

 ?>