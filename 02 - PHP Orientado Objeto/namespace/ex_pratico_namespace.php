<?php

    include_once "app/Login.php"; 
    include_once "api/Login.php"; 
	
    class Auth { 
        
        public function appAuthentication($user, $password) { 
	        $login = new Login(); 
	    }

        public function apiAuthentication($user, $password) { 
            $login = new Login();
        }
	}