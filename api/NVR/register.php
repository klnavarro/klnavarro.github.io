<?php
    include_once("/config/config.php");
    $con = mysqli_connect($db_host, $db_username, $db_password, $db_name);

    if(mysqli_connect_errno()){
        echo "1: Connection failed";
        exit();
    }

    $username = $_POST["name"];
    $password = $_POST["password"];

    $namecheckquery = "SELECT username FROM users WHERE username = '" . $username . "';";

    $namecheck = mysqli_query($con, $namecheckquery) or die("2: Name check query failed"); 

    if(mysqli_num_rows($namecheck) > 0){ 
        echo "3: Name already exists";
        exit();
    }

    //add user to table, we need to convert player password not as plain text (salting? and hashing)
    $salt = "\$5\$rounds=5000\$" . "steamedhams" . $username . "\$"; // username salt added 'steamedhams' for ensuring the 16 character salt
    $hash = crypt($password, $salt); //very simple security

    $insertuserquery = "INSERT INTO players (username, hash, salt) VALUES ('" . $username . "', '" . $hash . "', '" . $salt . "');";  //values are in database as table columns
    mysqli_query($con, $insertuserquery) or die("4: Insert player query failed"); //error code #4 = insert query failed

    echo("0"); //success
  ?>