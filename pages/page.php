<?php
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );


foreach ( $cars as $tab) {
    foreach ($tab as $key => $value) {
        echo $value  ;
    }

}

?>


