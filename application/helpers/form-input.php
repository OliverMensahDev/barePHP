<?php
 /**
  * Validate Any input which are strings 
  */
function validateStringInput(){
    return filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
}

 /**
  * Validate Any input which are integers 
  */

function validateIntegerInput(){
    return filter_input_array(INPUT_POST, FILTER_SANITIZE_INTEGER);
}

 /**
  * Validate Any input which are email form 
  */
function validateEmailInput(){
    return filter_input_array(INPUT_POST, FILTER_SANITIZE_EMAIL);
}