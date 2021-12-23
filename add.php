<?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        $namakaryawan = $_POST['namakaryawan'];
        $alamat = $_POST['alamat'];
        
        // include database connection file
        include_once("conn.php");
                
        // Insert user data into table
         $query = mysqli_query($query, "INSERT INTO tbl_karyawan(namakaryawan,alamat) VALUES('$namakaryawan','$alamat')");

                
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Karyawan</a>";
    }
    ?>
<html>
<head>
    <title>Add Karyawan</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama Karyawan</td>
                <td><input type="text" name="namakaryawan"></td>
            </tr>
            <tr> 
                <td>Alamat Karyawan</td>
                <td><textarea name="alamat"></textarea>
            </tr>   
            <tr> 
                <td></td>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>         
        </table>
    </form>    
</body>
</html>