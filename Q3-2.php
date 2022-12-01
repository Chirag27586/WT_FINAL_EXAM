<?php
function greeting(){
    $timeOfDay = date('a');
    if($timeOfDay =='am'){
        return 'Hellow Good Morning!!!!';
   }
    if($timeOfDay =='PM'){
        return'GOODNIGHT';
  }
}
$message = greeting();
echo $message;
?>