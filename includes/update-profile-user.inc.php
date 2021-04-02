<?php
session_start();
include './dbh.inc.php';

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $_SESSION["emailUser"] = $email;
    $phone = $_POST["phone"];
    $_SESSION["phoneUser"] = $phone;
    $img = $_FILES['foto']['name'];

    if ($img != "") {
        $allowed_ext = array('png', 'jpg', 'jpeg');
        $x = explode('.', $img);
        $ext = strtolower(end($x));
        $file_temp = $_FILES['foto']['tmp_name'];
        $destination = "../assets/foto/";
        $rand_number = rand(1, 999);
        $new_img_name = $rand_number . '-' . $img;
        if (in_array($ext, $allowed_ext) === true) {
            move_uploaded_file($file_temp, $destination . $new_img_name);
            $query = "UPDATE users SET usersEmail='" . $email . "', phoneNumber='" . $phone . "', usersPhoto='" . $new_img_name . "' WHERE usersId = '" . $_SESSION['idUser'] . "'";
            $result = mysqli_query($conn, $query);
            if ($result) {
                header("Location: ../user/pages-profile.php");
            } else {
                echo "GAGAL";
            }
        }
    }
}
