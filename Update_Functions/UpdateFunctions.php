<?php
    function check_fields_empty($required_fields){
        $ChangePasswordForm_Errors = array();
        foreach($required_fields as $nfield){
            if(!isset($_POST[$nfield]) || $_POST[$nfield] == NULL){
                $ChangePasswordForm_Errors[] = $nfield . " is a required input";
            }
        }
        return $ChangePasswordForm_Errors;
    }

    function displayMessage($input){
        $output = "<div class='alert alert-warning'>{$input}</div>";
        return $output;
    }
?>