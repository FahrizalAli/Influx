<?php
include "../koneksi.php";
include "../ExcelReader/excel_reader.php";

if ($_POST['upload'] == "upload") {
    $type         = explode(".", $_FILES['namafile']['name']);

    if (empty($_FILES['namafile']['name'])) {
?>
        <script language="JavaScript">
            alert('Oops! Please fill all / select file ...');
            document.location = './';
        </script>
    <?php
    } else if (strtolower(end($type)) != 'xls') {
    ?>
        <script language="JavaScript">
            alert('Oops! Please upload only Excel XLS file ...');
            document.location = './';
        </script>
        <?php
    } else {
        $target = basename($_FILES['namafile']['name']);
        move_uploaded_file($_FILES['namafile']['tmp_name'], $target);

        $data    = new Spreadsheet_Excel_Reader($_FILES['namafile']['name'], false);

        $baris = $data->rowcount($sheet_index = 0);

        for ($i = 2; $i <= $baris; $i++) {
            $nis        = $data->val($i, 1);
            $jurusan    = $data->val($i, 2);
            $nama   = $data->val($i, 3);
            $kelas   = $data->val($i, 4);


            $query = mysqli_query($koneksi, "INSERT INTO t_siswa (nis, jurusan, nama, kelas) VALUES ('$nis', '$jurusan', '$nama', '$kelas')");
        }

        if (isset($query)) {
        ?>
            <script language="JavaScript">
                alert('<b>Oops!</b> 404 Error Server.');
                document.location = './';
            </script>
        <?php
        } else {
        ?>
            <script language="JavaScript">
                alert('Good! Import Excel XLS file success...');
                document.location = './';
            </script>
<?php
        }
        unlink($_FILES['namafile']['name']);
    }
}
?>