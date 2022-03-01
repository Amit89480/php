<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <style>
        *{
            padding:0px;
            margin:0px;
            box-sizing:border-box;
        }
    .container{
        height: 44px;
    width: 245px;
    margin:auto;

        background-color:red;
        text-align:centre;
    }
</style>
</head>
<body>
    <div class="container">
        <p>Here is your party status</p>
        <?php

$age=18;
if($age>18)
{
    echo "You can go to party!";
}
else{
   echo "you cannot go to party!";
}
$friends=array("Amit","Subham","Ashis","Misti");
// echo $friends[0];
// echo $friends[1];
// echo $friends[2];
// echo $friends[3];
// echo count ($friends);
// $a=100;
// do{
// echo "<br>The Name of the friends are: ";
// echo $friends[$a];
// $a++;
// }while($a <count($friends)) 
foreach($friends as $values){
    echo "<br> the values are:";
    echo $values;
}
for($a=0;$a<=10;$a++){
    echo $a;
}
function even($a){
    if($a%2==0){
        echo "It is even number";
    }
    else{
        echo "It is odd number";
    }


    
}
echo "<br> The output of the function:";
even(4);

// $a=(int)readline("enter an integer");
// echo "the input is:"
// echo $a;
$abc="Amit";
echo "the replace string is:".str_replace("it","ut",$abc);
echo "the position of the string is:".strpos($abc,"i");


?>
    </div>
</body>
</html>