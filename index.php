<?php include("./config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar Dasar CRUD dengan PHP dan MySQL">
    <title>Datos tabla Apartado</title>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- material icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg-light">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom" style="position: sticky !important;
    top: 0 !important; z-index : 99999 !important;">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">MI NEGOCIO SWEET QUEEN</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link active text-sm-start text-center" aria-current="page" href="#">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary ms-md-4 text-white" href="#">INICIO DE SESION</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-5">
        <!-- form tambah row_tblApartado -->
        <div class="card mb-5">
            <!-- <div class="card-header">
                Latihan CRUD PHP & MySQL
            </div> -->
            <!-- tambah data -->
            <div class="card-body">
                <h3 class="card-title">MOLINA VILLELA REYNA LETICIA 5-I</h3>
                <p class="card-text">TABLA APARTADO</p>

                <!-- Mostrar mensaje de éxito -->
                <?php if (isset($_GET['status'])) : ?>
                    <?php
                    if ($_GET['status'] == 'sukses')
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Exito!</strong> Datos agregados correctamente!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    else
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> No se pudieron agregar datos!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    ?>
                <?php endif; ?>


                <form class="row g-3" action="tambah.php" method="POST">

                    <div class="col-12">
                        <label for="nama" class="form-label">ID Apartado</label>
                        <input type="number" step=1 name="idApartado" class="form-control" placeholder="Se genera automaticamente no es necesario ingresar" disabled>
                    </div>
                    <div class="col-md-4">
                        <label for="NIM" class="form-label">ID Sucursal</label>
                        <input type="number" step=1  name="idSucursal" class="form-control" placeholder="ID Sucursal" required>
                    </div>

                    <div class="col-md-4">
                        <label for="Agama" class="form-label">ID Cliente</label>
                        <input type="number" step=1  name="idCliente" class="form-control" placeholder="ID Cliente" required>
                      <!--  <select class="form-select" name="agama" aria-label="Default select example">
                            <option value="Hindu">1</option>
                            <option value="Buddha">2</option>
                            <option value="Islam">3</option>
                            <option value="Konghucu">4</option>
                            <option value="Protestan">5</option>
                            <option value="Katolik">Katolik</option>
                        </select>-->
                    </div>

                    <div class="col-md-4">
                        <label for="tittle" class="form-label">Anticipo</label>
                        <input type="number" step=0.01 name="Anticipo" class="form-control" placeholder="Anticipo a dar" required>
                       <!-- <div class="col-md-12">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="jenis_kelamin">Laki-Laki</label>
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="jenis_kelamin">Perempuan</label>
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                            </div>
                        </div>-->
                    </div>

                    <div class="col-md-6">
                        <label for="Jurusan" class="form-label">Cantidad</label>
                        <input type="number" step=1 name="Cantidad" class="form-control" placeholder="Cantidad de pasteles" required>
                    </div>

                    <div class="col-md-6">
                        <label for="IPK" class="form-label">Detalles</label>
                        <input type="text"  name="Detalles" class=" form-control" placeholder="Sabor Vainilla.....etc" required>
                    </div>

                   <!--CODIGO AGREGADO-->
                    <div class="col-md-6">
                        <label for="Jurusan" class="form-label">Fecha anticipo</label>
                        <input type="date" name="FechaAnticipo" class="form-control" placeholder="" required>
                    </div>

                    <div class="col-md-6">
                        <label for="IPK" class="form-label">Liquidacion</label>
                        <input type="number" step=0.01 name="liquidacion" class=" form-control" placeholder="Saldo para liquidar" required>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" value="daftar" name="tambah"><i class="fa fa-plus"></i><span class="ms-2">Agregar</span></button>
                    </div>
                </form>
            </div>
        </div>


        <!-- Encabezados de tabla -->
        <h5 class="mb-3">Mi lista de apartados</h5>

        <div class="row my-3">
            <div class="col-md-2 mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Mostrar entradas</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            <div class="col-md-3 ms-auto">
                <div class="input-group mb-3 ms-auto">
                    <input type="text" class="form-control" placeholder="Buscar apartado..." aria-label="cari" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>


        <!-- Mostrar mensaje de éxito eliminado -->
        <?php if (isset($_GET['hapus'])) : ?>
            <?php
            if ($_GET['hapus'] == 'sukses')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Exito!</strong> Datos eliminados con éxito!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> No se pudieron eliminar los datos!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- Mostrar mensaje de éxito en la edición-->
        <?php if (isset($_GET['update'])) : ?>
            <?php
            if ($_GET['update'] == 'sukses')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Exito!</strong> Datos actualizados correctamente!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Los datos no se actualizaron!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tabel -->
        <div class="table-responsive mb-5 card">
            <?php
            echo "<div class='card-body'>";

            echo "<table class='table table-hover align-middle bg-white'>";
            echo "<thead>";
            echo "<center><h3>TABLA APARTADO</h3></center>";
            echo "<tr>";
            echo "<th scope='col' class='text-center'>ID Apartado</th>";
            echo "<th scope='col'>ID Sucursal</th>";
            echo "<th scope='col'>ID Cliente </th>";
            echo "<th scope='col'>Anticipo</th>";
            echo "<th scope='col'>Cantidad</th>";
            echo "<th scope='col'>Detalles</th>";
            echo "<th scope='col'>Fecha Anticipo</th>";
            echo "<th scope='col'>Liquidacion</th>";
            echo "<th scope='col' class='text-center'>EDITAR</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";



            $batas = 10;
            $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
            $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

            $previous = $halaman - 1;
            $next = $halaman + 1;

            $data = mysqli_query($db, "SELECT * FROM tbl_apartado");
            $jumlah_data = mysqli_num_rows($data);
            $total_halaman = ceil($jumlah_data / $batas);

            $data_mhs = mysqli_query($db, "SELECT * FROM tbl_apartado LIMIT $halaman_awal, $batas");
            $no = $halaman_awal + 1;

            // $sql = "SELECT * FROM row_tblApartado";
            // $query = mysqli_query($db, $sql);




            while ($row_tblApartado = mysqli_fetch_array($data_mhs)) {
                echo "<tr>";
                echo "<td>" . $row_tblApartado['idApartado'] . "</td>";  
                echo "<td>" . $row_tblApartado['idSucursal'] . "</td>";  
                echo "<td>" . $row_tblApartado['idCliente'] . "</td>";
                echo "<td>" . $row_tblApartado['Anticipo'] . "</td>";
                echo "<td>" . $row_tblApartado['Cantidad'] . "</td>";
                echo "<td>" . $row_tblApartado['Detalles'] . "</td>";
                echo "<td>" . $row_tblApartado['FechaAnticipo'] . "</td>";
                echo "<td>" . $row_tblApartado['liquidacion'] . "</td>";
                echo "<td class='text-center'>";

                echo "<button type='button' class='btn btn-primary editButton pad m-1'><span class='material-icons align-middle'>edit</span></button>";

                // tombol hapus
                echo "
                            <!-- Button trigger modal -->
                            <button type='button' class='btn btn-danger deleteButton pad m-1'><span class='material-icons align-middle'>delete</span></button>";
                echo "</td>";

                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
            if ($jumlah_data == 0) {
                echo "<p class='text-center'>No hay datos disponibles en esta tabla</p>";
            } else {
                echo "<p>Total de registros: $jumlah_data </p>";
            }

            echo "</div>";
            ?>
        </div>

        <!-- pagination -->
        <nav class="mt-5 mb-5">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php echo ($halaman > 1) ? "href='?halaman=$previous'" : "" ?>><i class="fa fa-chevron-left"></i></a>
                </li>
                <?php
                for ($x = 1; $x <= $total_halaman; $x++) {
                ?>
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" <?php echo ($halaman < $total_halaman) ? "href='?halaman=$next'" : "" ?>><i class="fa fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Modal Edit-->
        <div class='modal fade' style="top:58px !important;" id='editModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog' style="margin-bottom:100px !important;">
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Editar datos tabla apartado</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>

                    <?php
                    $sql = "SELECT * FROM tbl_apartado";
                    $query = mysqli_query($db, $sql);
                    $row_tblApartado = mysqli_fetch_array($query);
                    ?>

                    <form action='edit.php' method='POST'>
                        <div class='modal-body text-start'>
                            <input type='hidden' name='edit_idApartado' id='edit_idApartado'>
                           <!--  <div class="col-12 mb-3">
                                <label for="edit_id" class="form-label">ID Apartado</label>
                                <input type="numeric" name="edit_id" id="edit_id" class="form-control" placeholder="" disabled>
                            </div>-->
                           
                            <div class="col-12 mb-3">
                                <label for="edit_idSucursal" class="form-label">ID Sucursal</label>
                                <input type="numeric" name="edit_idSucursal" id="edit_idSucursal" class="form-control" placeholder="G64190021" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_agama" class="form-label">ID Cliente</label>
                                <input type="numeric" name="edit_idCliente" id="edit_idCliente" class="form-control" placeholder="G64190021" required>
                                <!--<select class="form-select" name="edit_agama" id="edit_agama" aria-label="Default select example">
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Konghucu">Konghucu</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Katolik">Katolik</option>
                                </select>-->
                            </div>


                            <div class="col-12 mb-3">
                                <label for="edit_jenis_kelamin" class="form-label">Anticipo</label>
                                <input type="number" step=0.01 name="edit_Anticipo" id="edit_Anticipo" class="form-control" placeholder="G64190021" required>
                                <!--<div class="col-md-12" id="gender">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="jenis_kelamin">
                                            <input class="form-check-input" type="radio" name="edit_jenis_kelamin" value="Laki-Laki" id="cowok">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="jenis_kelamin">
                                            <input class="form-check-input" type="radio" name="edit_jenis_kelamin" value="Perempuan" id="cewek">Perempuan</label>
                                    </div>
                                </div>-->
                            </div>



                            <div class="col-12 mb-3">
                                <label for="edit_urusan" class="form-label">Cantidad</label>
                                <input type="numeric" name="edit_Cantidad" class="form-control" id="edit_Cantidad" placeholder="10" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_ipk" class="form-label">Detalles</label>
                                <input type="text" name="edit_Detalles" id="edit_Detalles" class=" form-control" placeholder="Sabor vainilla...etc" required>
                            </div>
                            <!--CODIGO AGREGADO-->
                            <div class="col-12 mb-3">
                                <label for="edit_urusan" class="form-label">Fecha anticipo</label>
                                <input type="date" name="edit_FechaAnticipo" class="form-control" id="edit_FechaAnticipo" placeholder="" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_ipk" class="form-label">Liquidación</label>
                                <input type="number" step=0.01 name="edit_liquidacion" id="edit_liquidacion" class=" form-control" placeholder="" required>
                            </div>


                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='edit_data' class='btn btn-primary'>Enviar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- ELIMINAR REGISTRO-->
        <div class='modal fade' style="top:58px !important;" id='deleteModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Confirmar</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>


                    <form action='hapus.php' method='POST'>

                        <div class='modal-body text-start'>
                            <input type='hidden' name='delete_id' id='delete_id'>
                            <p>¿Está seguro de que desea eliminar estos datos?</p>
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='deletedata' class='btn btn-primary'>Confirmar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- tutup container -->
    </div>


    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Javascript bule with popper bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- edit function -->
    <script>
        $(document).ready(function() {
            $('.editButton').on('click', function() {
                $('#editModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#edit_idApartado').val(data[0]);//Asigna valor al campo idApartado
                //No se usa, porque es solo un número de incremento
               // $('#no').val(datos[1]);
                $('#edit_idSucursal').val(data[1]); //Asigna valor al campo idSucursal
                $('#edit_idCliente').val(data[2]);//Asigna valor al campo idCliente
                $('#edit_Anticipo').val(data[3]);//Asigna valor al campo Anticipo
                $('#edit_Cantidad').val(data[4]);//Asigna valor al campo Cantidad
                $('#edit_Detalles').val(data[5]);//Asigna valor al campo Detalles
                $('#edit_FechaAnticipo').val(data[6]);//Asigna valor al campo FechaAnticipo
                $('#edit_liquidacion').val(data[7]);//Asigna valor al campo liquidacion
            });
        });
    </script>

    <!-- delete function -->
    <script>
        $(document).ready(function() {
            $('.deleteButton').on('click', function() {
                $('#deleteModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#delete_id').val(data[0]);
            });
        });
    </script>

    <script>
        function clicking() {
            window.location.href = './index.php';
        }
    </script>
</body>

</html>