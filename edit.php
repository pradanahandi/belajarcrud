
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Dengan PHP MySQLi</title>
</head>
<body>
    <center>
        <h2>CRUD DATA Karyawan</h2>
        <br />
        <a href="index.php">KEMBALI</a>
        <br />
        <br />
        <h3>EDIT DATA Karyawan</h3>
        <?php
        include 'conn.php';
        $id = $_GET['id'];
        $data = mysqli_query($query, "SELECT * from tbl_karyawan where idkaryawan='$id'");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <form method="post" action="update.php">
                <table>
                    <tr>
                        <td>ID</td>
                        <td>
                            <input type="text" name="idkaryawan" value="<?php echo $d['idkaryawan']; ?>">
                        </td>
                    </tr>
                    <tr>
                    <td>NAMA</td>
                    <td><input type="text" name="nama" value="<?php echo $d['namakaryawan']; ?>"></td>
                    </tr>
                    <tr>
                    <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="update"></td>
                    </tr>
                </table>
            </form>
        <?php
        }
        ?>
    </center>
</body>
</html>