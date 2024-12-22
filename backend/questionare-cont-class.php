<?php

class Questionare1Cont extends Questionare1 {

    private $auTitle;
    private $auLocation;
    private $auDOA;
    private $auAU;
    private $checklist1;
    private $checklist2;
    private $checklist3;
    private $checklist4;
    private $checklist5;
    private $checklist6;
    private $checklist7;
    private $checklist8;
    private $checklist9;
    private $checklist10;
    private $equipment_condition;
    private $Chemicals_storing;
    private $evacuation_route;
    private $general_comments;
    private $signaturePath;

    public function __construct($auTitle, $auLocation, $auDOA, $auAU, $checklist1, $checklist2, $checklist3, $checklist4, $checklist5, $checklist6, $checklist7, $checklist8, $checklist9, $checklist10, $equipment_condition, $Chemicals_storing, $evacuation_route, $general_comments, $signaturePath) {
        $this->auTitle = $auTitle;
        $this->auLocation = $auLocation;
        $this->auDOA = $auDOA;
        $this->auAU = $auAU;
        $this->checklist1 = $checklist1;
        $this->checklist2 = $checklist2;
        $this->checklist3 = $checklist3;
        $this->checklist4 = $checklist4;
        $this->checklist5 = $checklist5;
        $this->checklist6 = $checklist6;
        $this->checklist7 = $checklist7;
        $this->checklist8 = $checklist8;
        $this->checklist9 = $checklist9;
        $this->checklist10 = $checklist10;
        $this->equipment_condition = $equipment_condition;
        $this->Chemicals_storing = $Chemicals_storing;
        $this->evacuation_route = $evacuation_route;
        $this->general_comments = $general_comments;
        $this->signaturePath = $signaturePath;
    }

    public function inputData(){

        if($this->emptyInput() == false) {
            header("location: ../webpages/auditorQuestionare.php?error=emptyinput");
            exit();
        }
        
        if($this->invalidTitle() == false) {
            header("location: ../webpages/auditorQuestionare.php?error=invalidTitle");
            exit();
        }

        if($this->invalidLocation() == false) {
            header("location: ../webpages/auditorQuestionare.php?error=invalidLocation");
            exit();
        }

        if($this->invalidAuditorName() == false) {
            header("location: ../webpages/auditorQuestionare.php?error=invalidAuditorName");
            exit();
        }

        if($this->invalidComments() == false) {
            header("location: ../webpages/auditorQuestionare.php?error=invalidComments");
            exit();
        }

        if($this->invalidGeneralInformation() == false) {
            header("location: ../webpages/auditorQuestionare.php?error=invalidGeneralInformation");
            exit();
        }

        $this->inputDataQuestionare1($this->auTitle, $this->auLocation, $this->auDOA, $this->auAU, $this->checklist1, $this->checklist2, $this->checklist3, $this->checklist4, $this->checklist5, $this->checklist6, $this->checklist7, $this->checklist8, $this->checklist9, $this->checklist10, $this->equipment_condition, $this->Chemicals_storing, $this->evacuation_route, $this->general_comments, $this->signaturePath);

    }

    private function emptyInput(){
        $result;
        
        if(empty($this->auTitle) || empty($this->auLocation) || empty($this->auDOA) || empty($this->auAU) || empty($this->equipment_condition) || empty($this->Chemicals_storing) || empty($this->evacuation_route) || empty($this->general_comments || empty($this->signaturePath))) {
            $result = false;
        } else {
            $result = true;
        } return $result;

    }

    private function invalidTitle(){
        $result;

        if(!preg_match("/^[a-zA-Z0-9 ,\-]*$/", $this->auTitle)) {
            $result = false;
        } else {
            $result = true;
        } return $result; 

    }

    private function invalidLocation(){
        $result;

        if(!preg_match("/^[a-zA-Z0-9 ,\-.]*$/", $this->auLocation)) {
            $result = false;
        } else {
            $result = true;
        } return $result; 

    }

    private function invalidAuditorName(){
        $result;

        if(!preg_match("/^[a-zA-Z ]*$/", $this->auAU)) {
            $result = false;
        } else {
            $result = true;
        } return $result; 

    }

    private function invalidComments(){
        $result;

        if(!preg_match("/^[a-zA-Z0-9 ,\-.]*$/", $this->general_comments)) {
            $result = false;
        } else {
            $result = true;
        } return $result; 
    }

    private function invalidGeneralInformation() {
        $result;
        if(!$this->checkData($this->auTitle, $this->auLocation, $this->auDOA)) {
            $result = false;
        } else {
            $result = true;
        } return $result;
    } 
}