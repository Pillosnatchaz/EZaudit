<?php

class FormValidator
{
    public function validateForm($name, $email, $pono, $request, $description)
    { // SAME W/ THIS ONE
        $errors = [];

        if (empty($name)) {
            $errors[] = "Name is required";
        } elseif (!preg_match("/^([a-zA-Z'. -]+)$/", $name)) {
            $errors[] = 'Invalid name format.';
        }

        if (empty($email)) {
            $errors[] = "Email is required";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format";
        }

        if (empty($pono)) {
            $errors[] = "Phone Number is required";
        } elseif (!preg_match("/^([0-9 -]+)$/", $pono)) {
            $errors[] = "Invalid email format";
        } elseif (strlen($pono) < 10 || strlen($pono) > 15) {
            $errors[] = "Phone number must be 10 or 15 characters long";
        }

        if (empty($request)) {
            $errors[] = "request is required";
        }

        if (empty($description)) {
            $errors[] = "false";
        } elseif (!preg_match("/^([a-zA-Z0-9'. ]+)$/", $description)) {
            $errors[] = "false";
        }

        return $errors;
    }
}

// class LoginValidator {

//     public function validateFormLogin($auID, $email, $pwd, $pwdR) {
//         $errors = [];

//         if (empty($auID)) {
//             $errors[] = "null";
//         } elseif (!preg_match("/^([0-9]+)$/", $auID)) {
//             $errors[] = "invalid";
//         }

//         if (empty($email)) {
//             $errors[] = "null";
//         } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//             $errors[] = "invalid";
//         }

//         if (empty($pwd)) {
//             $errors[] = "null";
//         } elseif (!preg_match("/^([0-9a-zA-Z'. -]+)$/", $pwd)) {
//             $errors[] = "invalid";
//         }

//         return $errors;
//     }
// }

// class ReportValidator {

//     public function validateFormReport($auID, $email, $pwd, $pwdR) {
//         $errors = [];

//         if (empty($auID)) {
//             $errors[] = "null";
//         } elseif (!preg_match("/^([0-9a-zA-Z'. -]+)$/", $auID)) {
//             $errors[] = "invalid";
//         }

//         return $errors;
//     }
// }

// class QuestionareValidator {

//     public function validateQuestionareForm($Qtitle, $QDdepart, $Qtype, $Qdos, $QreportID, $Qstatus) {
//         $errors = [];

//         ssss
//     }
// }