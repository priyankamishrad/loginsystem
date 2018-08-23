<?php
session_start();

if (isset($_POST['submit'])) {
    include_once 'dbh.inc.php';

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

  
    if (empty($uid) || empty($pwd)) {
        header('Location: ../index.php?login=empty');
        echo "not Working!";
    }else {
        
        $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultcheck < 1) { // that is no user name like this one exists and no input row has been returned.
            header('Location: ../index.php?login=nouid');
            exit(); 
        } else {
            
            if ($row = mysqli_fetch_assoc($result)) {
              
                $hashedPwdCheck = password_verify($pwd, $row['user_pwd']); 
                
                if($hashedPwdCheck == false) {
                    header('Location: ../index.php?login=error');
                    exit(); 
                } elseif ($hashedPwdCheck == true) {
                    // if all is good then login the user
                    $_SESSION['u_id']       = $row['user_id']; 
                    $_SESSION['u_first']    = $row['user_first'];
                    $_SESSION['u_last']     = $row['user_last'];
                    $_SESSION['u_email']    = $row['user_email'];
                    $_SESSION['u_uid']      = $row['user_uid'];
                    header('Location: ../index.php?login=success');
                    exit();
                }

            
            }
        }
}
} else {
    header('Location: ../index.php?login=error');
    exit();
}
