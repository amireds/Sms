<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Utility{

    function validateUser(){
        return array("user_id"=>1,"priviledge"=>1);
    }


    function getUser($userId){
        return array("email"=>"infinitypaul@live.com");
    }

    function getCurrentNumber(){
        return array("msisdn"=>"080900404");
    }


    function getContent($id=0){
        array("title"=>"","content"=>"");
    }



    function sendMail($message,$reciever,$sender=""){

        return true;
    }

    function successMessage($message){
        return "<div class='alert alert-success alert-dismissable' data-dismiss='alert'>$message</div>";
    }


    function failedMessage($message){
        return "<div class='alert alert-danger alert-dismissable' data-dismiss='alert'>$message</div>";
    }


    function warningMessage($message){
        return "<div class='alert alert-warning alert-dismissable' data-dismiss='alert'>$message</div>";
    }

   
}

?>