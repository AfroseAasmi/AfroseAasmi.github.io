<?php 

session_start(); 

include "db.php";

if (isset($_POST['u']) && isset($_POST['p']) isset($_POST['s'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['u']);

    $pass = validate($_POST['p']);
	$pass = validate($_POST['s']);

    if (empty($uname)) {

        header("Location: login.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: login.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE username='$u' AND user_password='$p' AND use_status= 1";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $u && $row['password'] === $p && $row['des'] === $s) {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                $_SESSION['name'] = $row['user_email'];

                $_SESSION['id'] = $row['id'];

                header("Location: home.php");

                exit();

            }else{

                header("Location: sign.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: sign.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: sign.php");

    exit();

}
