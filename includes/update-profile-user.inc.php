<?php

include './dbh.inc.php';

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $img = $_FILES['foto']['name'];

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
