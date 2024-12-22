<?php 

class Login extends DbHelper {

    protected function getUser($auID, $email, $pwd) {
        // $stmt = $this->connect()->prepare('SELECT AuditorPassword FROM tblauditor tblauditor WHERE AuditorID = ? OR AuditorEmail = ?;');
        $stmt = $this->connect()->prepare('SELECT AuditorPassword FROM tblauditor WHERE AuditorID = ? AND AuditorEmail = ?;');

        //$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($auID, $email))) {
            $stmt = null;
            header("location: ../auditorLogin.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../auditorLogin.php?error=usernotfound");
            exit();
        }

        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (empty($user)) {
            $stmt = null;
            header("location: ../auditorLogin.php?error=usernotfound");
            exit();
        }

        $checkPassword = password_verify($pwd, $user[0]["AuditorPassword"]);
        if (!$checkPassword) {
            $stmt = null;
            header("location: ../auditorLogin.php?error=wrongpassword");
            exit();
        }

        // Retrieve additional user information
        $stmt = $this->connect()->prepare('SELECT AuditorID, AuditorName FROM tblauditor WHERE AuditorEmail = ?;');
        if (!$stmt->execute(array($email))) {
            $stmt = null;
            header("location: ../auditorLogin.php?error=stmtfailed");
            exit();
        }

        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (empty($user)) {
            header("location: ../auditorLogin.php?error=usernotfound");
            exit();
        }

        // Start session and set session variables
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION["userid"] = $user[0]["AuditorID"];
        $_SESSION["username"] = $user[0]["AuditorName"];

        // Redirect to the dashboard or another page
        header("location: ../webpages/dashboard.php");
        exit();

    }

    
}