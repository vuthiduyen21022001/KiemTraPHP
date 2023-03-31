<?php //IDEA:
require_once("helpers.php");


class User{
    private $username;
    private $userEmail;
    private $userID;
    private $status;

    public function _construct($newUser, $email){
        $this->username = $newUser;
        $this->userEmail = $email;
        $this->status = 1;
        $this->userID = GetNextUserID();

    }
    public function _destruct(){
        $this->username = NULL;
        $this->userEmail = NULL;
        $this->status = NULL;
        $this->userID = NULL;
    }
    public function GetUserName(){
        return $this->username;
    }
    public function GetUserEmail(){
        return $this->userEmail;
    }
    public function GetStatus(){
        return $this->status;
    }
    public function SetUserStatus($input){
        if($input > 1 || $input <0){
            return false;
        }
        $this->status = $input;
        return true;
    }

}