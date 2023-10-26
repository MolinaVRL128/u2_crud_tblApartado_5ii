<?php
include("./config.php");

if (isset($_POST['deletedata'])) {
    // ambil id dari query string
    $id = $_POST['delete_id'];

    // query hapus
    $sql = "DELETE FROM tbl_apartado WHERE idApartado = '$id'";
    $query = mysqli_query($db, $sql);

    // ¿Qué se eliminó correctamente la consulta?
    if ($query) {
        header('Location: ./index.php?hapus=sukses');
    } else
        die('Location: ./index.php?hapus=gagal');
} else
    die("Prohibido el acceso...");
