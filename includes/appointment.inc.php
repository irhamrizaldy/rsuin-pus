<?php

if (isset($_POST["submit"])) {

    session_start();

    $id_user = $_SESSION["idUser"];
    $id_jadwal = $_POST["jadwal"];
    $gejala = $_POST["gejala"];
    $pesan = $_POST["pesan"];
    $pembayaran = $_POST["pembayaran"];

    require_once 'dbh.inc.php';

    function createAppointment($conn, $id_user, $id_jadwal, $gejala, $pesan, $pembayaran)
    {
        $sql = "INSERT INTO appointment (id_user, id_jadwal, gejala, pesan, pembayaran) VALUES (?, ?, ?, ?, ?);";
        $stmt =  mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../buat-janji.php?error=stmtError");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "iisss", $id_user, $id_jadwal, $gejala, $pesan, $pembayaran);
        mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
        // echo '<script> alert ("Penjadwalan konsultasi telah kami terima. Terima kasih") </script>';
        header("location: ../doctor-search.php?error=none");
        exit();
    }

    createAppointment($conn, $id_user, $id_jadwal, $gejala, $pesan, $pembayaran);
} else {
    header("location: ../buat-janji.php");
    exit();
}
