<?php
    function GetNextUserId(){
        static $userID = 1;
        return $userID++;
    }

?>