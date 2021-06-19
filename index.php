<html>
   <head>
      <title>Menampilkan Data Tabel MySQL</title>
      <style>
         body {font-family:tahoma, arial}
         table {border-collapse: collapse}
         th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
         th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
      </style>
   </head>
   <body>
   <a href="add.php">add New User</a><br/><br/>
      <center><h1>jasa_loundry</h1></center>
      <h3>Tabel Karyawan </h3>
      <table>
         <thead>
            <tr>
               <th>ID Karyawan</th>
               <th>Nama Karyawan</th>
               <th>No.Telp</th>
               <th>Update</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM karyawan';
            $query = mysqli_query($link, $sql);	
            while ($row = mysqli_fetch_array($query))
            {
               
            	?>
         <tbody>
            <tr>
      
               <td><?php echo $row['id_karyawan'] ?></td>
               <td><?php echo $row['nama_karyawan'] ?></td>
               <td><?php echo $row['no_telp'] ?></td>
               <td><a href="edit.php?id=<?php echo $row['id_karyawan'] ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id_karyawan'] ?>">Delete</a>
               
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>Tabel Pelanggan </h3>
      <table>
         <thead>
            <tr>
               <th>ID Pelanggan</th>
               <th>Nama Pelanggan</th>
               <th>No Telp</th>
               <th>Alamat</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM pelanggan';
            $query = mysqli_query($link, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row[0] ?></td>
               <td><?php echo $row[1] ?></td>
               <td><?php echo $row[2] ?></td>
               <td><?php echo $row[3] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>Tabel Transaksi  </h3>
      <table>
         <thead>
            <tr>
               <th>ID Transaksi</th>
               <th>Tanggal</th>
               <th>ID Karyawan</th>
               <th>ID Pelanggan</th>
               <th>Berat</th>
               <th>ID Jenis</th>
               <th>Tarif</th>
               <th>Total</th>
               <th>Note</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM transaksi';
            $query = mysqli_query($link, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row[0] ?></td>
               <td><?php echo $row[1] ?></td>
               <td><?php echo $row[2] ?></td>
               <td><?php echo $row[3] ?></td>
               <td><?php echo $row[4] ?></td>
               <td><?php echo $row[5] ?></td>
               <td><?php echo $row[6] ?></td>
               <td><?php echo $row[7] ?></td>
               <td><?php echo $row[8] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>Tabel Jenis Barang</h3>
      <table>
         <thead>
            <tr>
               <th>ID Jenis</th>
               <th>Nama Barang</th>
               <th>Jenis</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM transaksi';
            $query = mysqli_query($link, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row[0] ?></td>
               <td><?php echo $row[1] ?></td>
               <td><?php echo $row[2] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      </table>
   </body>
</html>