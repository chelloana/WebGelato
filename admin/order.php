<?php
session_start();
if (empty($_SESSION['username'])) {
    header("location:../login.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>

    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">

    <link rel="stylesheet" href="assets/css/shared/iconly.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="order.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>ORDERS</span>
                            </a>
                        </li>

                        <li class="sidebar-item ">
                            <a href="rasa.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>VARIANT RASA</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="wadah.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>VARIANT CUP</span>
                            </a>
                        </li>

                        <li class="sidebar-item ">
                            <a href="topping.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>VARIANT TOPPING</span>
                            </a>
                        </li>

                        <br>

                        <li class="sidebar-item active ">
                            <a href="../logout.php" class='sidebar-link'>
                                <i class="bi bi-x-lg"></i>
                                <span><b>LOGOUT</b></span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <!-- ISI -->
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Customer Order</h3>
                            <a href="#" class="btn icon icon-left btn-primary" data-bs-toggle="modal" data-bs-target="#tambah"><i data-feather="edit"></i>Tambah Order</a>
                            <br><br><br>
                        </div>
                        <br><br><br>
                    </div>
                </div>
                <section id="basic-modals">
                    <div class="row">
                        <div class="col-md-15 col-12">
                            <div class="card">
                                <div class="card-body">

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Pelanggan</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Tanggal dan Waktu Pembelian</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>

                                        <?php
                                        include '../koneksi.php';
                                        $sql    = "SELECT pesanan.id_pesanan, pesanan.nama, pesanan.tanggal, rasa.rasa, topping.topping, wadah.wadah, rasa.harga_rasa+topping.harga_topping+wadah.harga_wadah as total FROM pesanan JOIN rasa USING(id_rasa) JOIN topping USING(id_topping) JOIN wadah USING(id_wadah);";
                                        $query  = mysqli_query($connect, $sql);
                                        $no     = 1;

                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>

                                            <tbody>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $data['nama']; ?></td>
                                                    <td><?= $data['total']; ?></td>
                                                    <td><?= $data['tanggal']; ?></td>
                                                    <td>
                                                        <a href=nota.php?id_pesanan=<?= $data['id_pesanan']; ?>><button type="button" class="btn btn-outline-success">Nota</button></a>
                                                        <a href=hapuspesanan_proses.php?id_pesanan=<?= $data['id_pesanan']; ?>><button type="button" class="btn btn-outline-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        <?php }    ?>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- AKHIR ISI -->

                    <!-- MODAL -->

                    <!--Basic Modal -->
                    <div class="modal fade text-left" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabel1">Tambah Order</h5>
                                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                        <i data-feather="x"></i>
                                    </button>
                                </div>
                                <br>
                                <div class="modal-body">
                                    <form method="POST" action="tambahpesanan_proses.php" class="row g-3">
                                        <div class="row mb-3">
                                            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="nama" name="nama">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="rasa" class="col-sm-3 col-form-label">Rasa</label>
                                            <div class="col-sm-9">
                                                <select name="id_rasa" id="inputState" class="form-select">
                                                    <option disabled selected> Pilih </option>
                                                    <?php
                                                    $sql    = "SELECT * FROM rasa;";
                                                    $query  = mysqli_query($connect, $sql);
                                                    while ($data_rasa = mysqli_fetch_array($query)) {
                                                    ?>
                                                        <option value="<?= $data_rasa['id_rasa'] ?>"><?= $data_rasa['rasa'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="wadah" class="col-sm-3 col-form-label">Cup</label>
                                            <div class="col-sm-9">
                                                <select name="id_wadah" id="inputState" class="form-select">
                                                    <option disabled selected> Pilih </option>
                                                    <?php
                                                    $sql    = "SELECT * FROM wadah;";
                                                    $query  = mysqli_query($connect, $sql);
                                                    while ($data_wadah = mysqli_fetch_array($query)) {
                                                    ?>
                                                        <option value="<?= $data_wadah['id_wadah'] ?>"><?= $data_wadah['wadah'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="topping" class="col-sm-3 col-form-label">Topping</label>
                                            <div class="col-sm-9">
                                                <select name="id_topping" id="inputState" class="form-select">
                                                    <option disabled selected> Pilih </option>
                                                    <?php
                                                    $sql    = "SELECT * FROM topping;";
                                                    $query  = mysqli_query($connect, $sql);
                                                    while ($data_topping = mysqli_fetch_array($query)) {
                                                    ?>
                                                        <option value="<?= $data_topping['id_topping'] ?>"><?= $data_topping['topping'] ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <input type="submit" class="btn btn-info">
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <!-- AKHIT MODAL -->
    </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- Need: Apexcharts -->
    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>