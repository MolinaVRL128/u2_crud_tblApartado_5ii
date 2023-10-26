<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['edit_data'])) {
    // ambil data dari form
    $idApartado = $_POST['edit_idApartado'];
    $idSucursal = $_POST['edit_idSucursal'];
    $idCliente = $_POST['edit_idCliente'];
    $Anticipo = $_POST['edit_Anticipo'];
    $Cantidad = $_POST['edit_Cantidad'];
    $Detalles = $_POST['edit_Detalles'];
    $FechaAnticipo = $_POST['edit_FechaAnticipo'];
    $liquidacion = $_POST['edit_liquidacion'];

    // query
    $sql = "UPDATE tbl_apartado SET idSucursal='$idSucursal', idCliente='$idCliente', Anticipo='$Anticipo', Cantidad='$Cantidad', Detalles='$Detalles' , FechaAnticipo='$FechaAnticipo' , liquidacion='$liquidacion' WHERE idApartado = '$idApartado'";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?update=sukses');
    else
        header('Location: ./index.php?update=gagal');
} else
    die("Akses dilarang...");
