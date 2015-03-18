<?php
$message1 =array(1,'hhhhh','kkkkkkk');
$message2 =array(2,'jjjjj','uuuuuuu');
$message3 =array(3,'ffffff','pppppp');




function addmessage($message){
    $_SESSION['messages'][] =array("code"=>$message[0],
                                    "lib"=>$message[1],
                                    "numero"=>$message[2]

    );
}

addMessage($message1);
addMessage($message2);
addMessage($message3);

foreach (array_expression as $key => $value) {

}



?>

