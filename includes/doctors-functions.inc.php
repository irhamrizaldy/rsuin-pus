<?php

function emailExists($conn, $email)
{
    $sql = "SELECT * FROM doctors WHERE email_dokter = ?;";
    $stmt =  mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../admin/monster-html/doctors-page.php?error=stmtEmailError");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
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

function createDoctors($conn, $name, $email, $speciality, $phone, $city, $img_doc)
{
    if ($img_doc != "") {
        $allowed_ext = array('png', 'jpg', 'jpeg');
        $x = explode('.', $img_doc);
        $ext = strtolower(end($x));
        $file_temp = $_FILES['docs_img']['tmp_name'];
        $rand_number = rand(1, 999);
        $new_img_name = $rand_number . '-' . $img_doc;
        if (in_array($ext, $allowed_ext) === true) {
            move_uploaded_file($file_temp, '../assets/img/team/' . $new_img_name);
            $query = "INSERT INTO doctors (nama_dokter, email_dokter, spesialisasi, nomor_telepon, kota, doc_img) VALUES ('$name', '$email', '$speciality', '$phone', '$city', '$new_img_name')";
            $result = mysqli_query($conn, $query);
            if ($result) {
                header("location: ../admin/monster-html/doctors-page.php?error=none");
                exit();
            }
        }
    }
}
