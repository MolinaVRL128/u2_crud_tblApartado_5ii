<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['tambah'])) {
    // ambil data dari form
    $idApartado = $_POST['idApartado'];
    $idSucursal = $_POST['idSucursal'];
    $idCliente = $_POST['idCliente'];
    $Anticipo = $_POST['Anticipo'];
    $Cantidad = $_POST['Cantidad'];
    $Detalles = $_POST['Detalles'];
    $FechaAnticipo = $_POST['FechaAnticipo'];
    $liquidacion = $_POST['liquidacion'];
    // query
    $sql = "INSERT INTO tbl_apartado(idApartado, idSucursal, idCliente, Anticipo, Cantidad, Detalles, FechaAnticipo, liquidacion)
    VALUES('$idApartado', '$idSucursal', '$idCliente', '$Anticipo', '$Cantidad', '$Detalles', '$FechaAnticipo', '$liquidacion')";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?status=sukses');
    else
        header('Location: ./index.php?status=gagal');
} else
    die("Akses dilarang...");
