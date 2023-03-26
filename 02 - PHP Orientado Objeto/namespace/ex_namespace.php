<?php

    use app\Login as Login; 
    use api\Login as apiLogin; 
	
    class Auth { 
        
        public function appAuthentication($user, $password) { 
	        $login = new Login(); 
	    }

        public function apiAuthentication($user, $password) { 
            $login = new apiLogin();
        }
	}