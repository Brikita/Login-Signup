<?php

function emptyInputSignup($fname, $lname, $email, $pwd, $pwdRepeat) {
    $result = "";
    if (empty($fname) || empty($lname) || empty($email) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function invalidEmail($email) {
    $result = "";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function pwdMatch($pwd, $pwdRepeat) {
    $result = "";
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function emailExists($conn, $email) {
   $sql = "SELECT * FROM users WHERE usersEmail = ?;";
   $stmt = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=stmtfailed");
        exit();
   }
   mysqli_stmt_bind_param($stmt, "s", $email);
   mysqli_stmt_execute($stmt);

   $resultData = mysqli_stmt_get_result($stmt);
   
   if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
   }
   else {
    $result = false;
    return $result;
   }

   mysqli_stmt_close($stmt);
}
function createUser($conn, $fname, $lname, $email, $pwd ) {
   $sql = "INSERT INTO users(usersFirstName, usersLastName, usersEmail, usersPwd) VALUES (?, ?, ?, ?);";
   $stmt = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=stmtfailed");
        exit();
   }
   $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);


   mysqli_stmt_bind_param($stmt, "ssss",$fname, $lname, $email, $hashedPwd);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   header("location: ../signup.php?error=none");
    exit();

   
}
function emptyInputLogin($email, $pwd) {
    $result = "";
    if (empty($email) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}


function validateUser($email, $password, $conn) {
    // Escape user inputs to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $email);

    // Fetch user data from the database based on the provided email
    $sql = "SELECT * FROM users WHERE usersEmail = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedHashedPassword = $row['usersPwd'];

        // Verify the provided password against the stored hashed password
        if (password_verify($password, $storedHashedPassword)) {
            session_start();
            $_SESSION["userid"] = $row["usersId"];
            $_SESSION["userfname"] = $row["usersFirstName"];
            return true; // Passwords match
        }
    }

    return false; // Invalid credentials
}
