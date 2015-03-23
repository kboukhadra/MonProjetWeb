<?php
function addMessages($code, $type, $lib) {
    $_SESSION['messages'][] = array("code" => $code, "type" => $type, "lib" => $lib);
    
}

function addMessageRedirect($code, $type, $lib, $url = "index.php") {
    
    header("Location: ".$url);
    exit(addMessages($code, $type, $lib));
}

/**
 * 
 * afficher les messages
 */
function afficheMessage() {
    if (isset($_SESSION['messages'])) {

        foreach ($_SESSION['messages'] as $message) {
            echo'<font color="red">MESSAGE : '.$message['lib'].'</font>';
        }
       unset($_SESSION['messages']); 
    }
    
}
