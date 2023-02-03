<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rekap.css">
    <link rel="stylesheet" href="../assets/boxicons/css/boxicons.css">

    <title>Document</title>
</head>

<body>
    <?php
    include 'headerrekap.php';
    ?>
    <?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'data_rekapabsen');
    $data = mysqli_query($koneksi, "select * from t_siswa where jurusan='Rekayasa Perangkat Lunak'");
    ?>
    <div class="container1">
        <div class="container_content">
            <div class="content1">
                <img src="../assets/img/avatar.svg" alt="">
                <h2 class="main_text">12 RPL</h2>
            </div>
            <div class="content2">
                <form action="rekap_act12rpl.php" method="POST">
                    <h3 style="color:#757575 ;"><?php echo date('d M Y') ?></h3>
                    <input hidden type="text" name="tanggal" value="<?php echo date('d M Y') ?>">
                    <div class="container_input container_1">
                        <div class="i">
                            <i class='bx bxs-user bx-tada-hover'></i>
                        </div>
                        <select name="nama" id="">
                            <?php
                            $query    = mysqli_query($koneksi, "SELECT * FROM t_siswa where jurusan='Rekayasa Perangkat Lunak' and kelas='xii' ");
                            while ($data = mysqli_fetch_array($query)) {
                            ?>
                                <option><?php echo $data['nis'] ?>: <?php echo $data['nama'] ?></option>

                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="container_input container_1">

                        <div class="i">
                            <i class='bx bxs-label'></i>
                        </div>
                        <div>
                            <input type="text" placeholder="Rekayasa Perangkat Lunak" name="jurusan" value="Rekayasa Perangkat Lunak">
                        </div>

                    </div>
                    <div class="container_input container_1">

                        <div class="i">
                            <i class='bx bxs-label'></i>
                        </div>
                        <div>
                            <input type="text" placeholder="Kelas 10" name="kelas" value="xii">
                        </div>
                    </div>
                    <div class="container_input container_1">

                        <div class="i">
                            <i class='bx bxs-label'></i>
                        </div>
                        <select name="ket" required>
                            <option value="">Keterangan</option>
                            <option>Sakit</option>
                            <option>Izin</option>
                            <option>Alfa</option>
                        </select>
                    </div>
                    <a href="../index.php?data=list" class="forgot">Back to list of class?</a>
                    <button type="submit" class="btn">Send</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container2">
        <div class="info_table">
           
            <div class="container_down">
                    <form action="table_siswa.php" method="get" class="form-search">
                        <div class="select_jurusan">
                            <input type="text" name="a" class="search-item" placeholder="Cari nama siswa/NIS">
                        </div>
                        <div class="pilih_jurusan">
                            <select name="b" class="select-search">
                                <option value="">Jurusan</option>
                                <option value="Teknik Komputer dan Jaringan">TKJ</option>
                                <option value="Teknik Instalasi Tenaga Listrik">TITL</option>
                                <option value="Teknik Jaringan Akses">TJA</option>
                                <option value="Rekayasa Perangkat Lunak">RPL</option>
                            </select>
                        </div>
                        <div>
                            <select name="c" class="select-search">
                                <option value="">Kelas</option>
                                <option value="x">10</option>
                                <option value="xi">11</option>
                                <option value="xii">12</option>
                            </select>
                        </div>
                        <button type="submit" class="icon-search">
                            <i class='bx bx-search-alt' type="submit"></i>
                        </button>
                        <a href="table_siswa.php" class="icon-search2"> <i class='bx bx-reset'></i></a>

                    </form>
                </div>
        </div>
        <div class="table_container">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Kelas</th>
                        <th>Ket</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        $koneksi = mysqli_connect('localhost', 'root', '', 'data_rekapabsen');
                        $nomor = 1;
                        $keyword = "";
                        if (isset($_POST['search'])) {
                            $keyword = $_POST['search'];
                        }
                        $query = mysqli_query($koneksi, "select t_rekap.id,t_siswa.nama,t_siswa.nis,t_siswa.jurusan,t_siswa.kelas,t_rekap.tanggal,t_rekap.ket from t_siswa inner join t_rekap on t_siswa.nis = t_rekap.nis where tanggal LIKE '%" . $keyword . "%' or nama LIKE '%" . $keyword . "%' ORDER BY tanggal DESC");
                        $hitung_data = mysqli_num_rows($query);
                        if ($hitung_data > 0) {
                            while ($d = mysqli_fetch_array($query)) {
                        ?>
                                <tr>
                                    <td><?php echo $nomor++; ?></td>
                                    <td hidden><?php echo $d['id'] ?></td>
                                    <td><?php echo $d['tanggal'] ?></td>
                                    <td><?php echo $d['nis'] ?></td>
                                    <td><?php echo $d['nama']; ?></td>
                                    <td><?php echo $d['jurusan']; ?> </td>
                                    <td><?php echo strtoupper($d['kelas']) ?></td>
                                    <td><?php echo $d['ket']; ?></td>
                                    <td class="d-flex justify-content-center edit">
                                        <a href="index.php" class="button">Edit</a>
                                        <a href="delete11rpl.php?id=<?php echo $d['id'] ?>" class="button">Delete</a>
                                    </td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan='8' class="text-center">Tidak ada data ditemukan</td>
                            </tr>
                        <?php } ?>
                </tbody>

            </table>
        </div>

    </div>

    <?php
    // }
    ?>



</body>

</html>