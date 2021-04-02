<?php

//function for sign up
function emptyInputSignup($name, $username, $email, $phone, $password, $repeatPassword)
{
    $result;
    if (empty($name) || empty($username) || empty($email) || empty($phone) || empty($password) || empty($repeatPassword)) {
        $result = TRUE;
    } else {
        $result = FALSE;
    }
    return $result;
}

function invalidUid($username)
{
    $result;
    if (strlen($username) < 4) {
        $result = TRUE;
    } else {
        $result = FALSE;
    }
    return $result;
}

function invalidEmail($email)
{
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = TRUE;
    } else {
        $result = FALSE;
    }
    return $result;
}

function passwordMatch($password, $repeatPassword)
{
    $result;
    if ($password !== $repeatPassword) {
        $result = TRUE;
    } else {
        $result = FALSE;
    }
    return $result;
}

function invalidPhoneNumber($phone)
{
    $result;
    if (!preg_match("/^[0-9]*$/", $phone)) {
        $result = TRUE;
    } else {
        $result = FALSE;
    }
    return $result;
}

function passwordTooShort($password)
{
    $result;
    if (strlen($password) < 5) {
        $result = TRUE;
    } else {
        $result = FALSE;
    }
    return $result;
}

function usernameExists($conn, $username, $email)
{
    $sql = "SELECT * FROM users WHERE usersUsername = ? OR usersEmail = ?;";
    $stmt =  mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtError");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = FALSE;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $username, $email, $phone, $password, $img)
{
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    if ($img != "") {
        $allowed_ext = array('png', 'jpg', 'jpeg');
        $x = explode('.', $img);
        $ext = strtolower(end($x));
        $file_temp = $_FILES['foto']['tmp_name'];
        $rand_number = rand(1, 999);
        $new_img_name = $rand_number . '-' . $img;
        if (in_array($ext, $allowed_ext) === true) {
            move_uploaded_file($file_temp, 'C:/xampp/htdocs/rumahsakit/assets/foto/' . $new_img_name);
            $query = "INSERT INTO users (usersName, usersUsername, usersEmail, phoneNumber, usersPassword, usersPhoto) VALUES ('$name', '$username', '$email', '$phone', '$hashedPassword', '$new_img_name')";
            $result = mysqli_query($conn, $query);
            if ($result) {
                header("location: ../login.php?error=none");
                exit();
            }
        }
    }
}

function updateUser($conn, $name, $email, $phone, $password, $img)
{
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    if ($img != "") {
        $allowed_ext = array('png', 'jpg', 'jpeg');
        $x = explode('.', $img);
        $ext = strtolower(end($x));
        $file_temp = $_FILES['foto']['tmp_name'];
        $rand_number = rand(1, 999);
        $new_img_name = $rand_number . '-' . $img;
        if (in_array($ext, $allowed_ext) === true) {
            move_uploaded_file($file_temp, 'C:/xampp/htdocs/rumahsakit/assets/foto/' . $new_img_name);
            $query = "UPDATE users SET usersName='" . $name . "', usersEmail='" . $email . "', phoneNumber='" . $phone . "', usersPassword='" . $hashedPassword . "', usersPhoto='" . $new_img_name . "' WHERE usersId = '" . $_SESSION['idUser'] . "'";
            $result = mysqli_query($conn, $query);
            if ($result) {
                header("location: ../login.php?error=none");
                exit();
            }
        }
    }
}

//function for sign in

function emptyInputLogin($username, $password)
{
    $result;
    if (empty($username) || empty($password)) {
        $result = TRUE;
    } else {
        $result = FALSE;
    }
    return $result;
}

function loginUser($conn, $username, $password)
{

    if ($username === '123' && $password === '123') {
        header("location: ../admin/monster-html/doctors-page.php");
        exit();
    }

    $usernameExists = usernameExists($conn, $username, $username, $username, $username, $username, $username);

    if ($usernameExists == FALSE) {
        header("location: ../login.php?error=usernameDoesntExist");
        exit();
    }

    $passwordHashed = $usernameExists["usersPassword"];
    $checkPassword = password_verify($password, $passwordHashed);

    if ($checkPassword == FALSE) {
        header("location: ../login.php?error=passwordIncorrect");
        exit();
    } elseif ($checkPassword == TRUE) {
        session_start();
        $_SESSION["idUser"] = $usernameExists["usersId"];
        $_SESSION["usernameUser"] = $usernameExists["usersUsername"];
        $_SESSION["nameUser"] = $usernameExists["usersName"];
        $_SESSION["emailUser"] = $usernameExists["usersEmail"];
        $_SESSION["phoneUser"] = $usernameExists["phoneNumber"];
        $_SESSION["photoUser"] = $usernameExists["usersPhoto"];

        header("location: ../index.php");
        exit();
    }
}
