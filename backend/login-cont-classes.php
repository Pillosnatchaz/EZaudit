<?php

    class loginCont extends Login {

        private $auID;
        private $email;
        private $pwd;

        public function __construct($auID, $email, $pwd) {
            $this->auID = $auID;
            $this->email = $email;
            $this->pwd = $pwd;
        }

        public function loginUser() {
            
            if($this->emptyInput() == false) {
                // echo "Empty input!";
                header("location: ../webpages/auditorLogin.php?error=emptyinput");
                exit();
            }

            if($this->invalidID() == false) {
                header("location: ../webpages/auditorLogin.php?error=invalidID");
                exit();
            }

            if($this->invalidEmail() == false) {
                header("location: ../webpages/auditorLogin.php?error=invalidEmail");
                exit();
            }

            if($this->invalidPassword() == false) {
                header("location: ../webpages/auditorLogin.php?error=invalidPassword");
                exit();
            }

            $this->getUser($this->auID, $this->email, $this->pwd);
        }

        private function emptyInput() {
            $result;
            if(empty($this->auID) || empty($this->email) || empty($this->pwd)) {
                $result = false;
            } else {
                $result = true;
            } return $result;
        }

        private function invalidID() {
            $result;

            if(!preg_match("/^[0-9]*$/", $this->auID)) {
                $result = false;
            } else {
                $result = true;
            } return $result; 
            
        }

        private function invalidEmail() {
            $result;

            if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $result = false;
            } else {
                $result = true;
            } return $result; 
            
        }

        private function invalidPassword() {
            $result;

            if(!preg_match("/^[a-z A-Z0-9]*$/", $this->pwd)) {
                $result = false;
            } else {
                $result = true;
            } return $result; 
            
        }
} 