<?php

class DbHelper {

    public function connect() {
        try {
            $username = "root";
            $password = "";
            
            $dbh = new PDO('mysql:host=localhost;dbname=ezaudit', $username, $password);
            // $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbh;
        } catch(PDOException $e) {
            // echo "Connection Failed: ". $e->getMessage();
            print "ERROR!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}