<?php
$tableau =array('id'=>"merde","name"=>"jean") ;
$tab = array("article"=>$tableau);

foreach ($tab as $key => $value) {
     $$key=$value;
    
}
echo'<pre>';
    print_r($article);
    echo'</pre>';

