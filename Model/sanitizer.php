<?php 
function sanitize($value,$type){
    switch ($type){
        case "string":
            return filter_var($value, FILTER_SANITIZE_STRING);
            break;
        case "integer":
            return filter_var($value, FILTER_SANITIZE_NUMBER_INT);
            break;
        case "float":
            return filter_var($value, FILTER_SANITIZE_NUMBER_FLOAT);
            break;
        case "email":
            return filter_var($value, FILTER_SANITIZE_EMAIL);
            break;
    }
}

?>