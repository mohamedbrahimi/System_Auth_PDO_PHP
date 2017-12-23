<?php

    require 'config.php';    
    require 'database.php'; 
    require_once 'class-phppass.php';
    
    
    class connectionClass
    {
       private $connection ;
        function __construct()
        {
          $this->connection = new database(DB_HOST,DB_NAME,DB_USER,DB_PASS);
        }

        function exsistUser($loginName, $loginPass){
            $sql  = "SELECT * FROM wpmu_users where user_login = '".$loginName."' ";
            $sql1 = "SELECT user_pass FROM wpmu_users where user_login = '".$loginName."' ";
            $hasher = new PasswordHash( 8, true );

           if(!$this->connection->num_rows($sql))return -1;
           else {

            $PasswordHash = $this->connection->str_pass($sql1)[0];
            $essai = "mohamed";
            echo $essai;
            echo "<br>";
            echo $PasswordHash;
            echo "<br>";
            if($hasher->CheckPassword($loginPass, $PasswordHash)) {
                return 1;
                } else {
                return 0;
                }
           } 
    
        }
    }



    $inst  = new connectionClass();
    var_dump($inst->exsistUser('admin', 'Jugurta'));
    
    
    
    
 
    
   

   ?>