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
      <center><h1>JASA LOUNDRY</h1></center>
      <h3>Tabel Karyawan </h3>
      <table>
         <thead>
            <tr>
               <th>id_karyawan</th>
               <th>nama_karyawan</th>
               <th>no.telp</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM karyawan';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_karyawan'] ?></td>
               <td><?php echo $row['nama_karyawan'] ?></td>
               <td><?php echo $row['no.telp'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>Tabel Jenis Barang </h3>
      <table>
         <thead>
            <tr>
               <th>id_jenis</th>
               <th>nama_barang</th>
               <th>tarif</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM jenis barang';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_jenis'] ?></td>
               <td><?php echo $row['nama_barang'] ?></td>
               <td><?php echo $row['tarif'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>Tabel pelanggan </h3>
      <table>
         <thead>
            <tr>
               <th>id_pelanggan</th>
               <th>nama_pelanggan</th>
               <th>no.telp</th>
               <th>alamat</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM pelanggan';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_pelanggan'] ?></td>
               <td><?php echo $row['nama_pelanggan'] ?></td>
               <td><?php echo $row['no.telp'] ?></td>
               <td><?php echo $row['alamat'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <h3>Tabel Transaksi </h3>
      <table>
         <thead>
            <tr>
               <th>id_trans</th>
               <th>tanggal</th>
               <th>id_karyawan</th>
               <th>id_pelanggan</th>
               <th>berat</th>
               <th>id_jenis</th>
               <th>tarif</th>
               <th>total</th>
               <th>note</th>
            </tr>
         </thead>
         <?php
            $sql = 'SELECT  * FROM transaksi';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_trans'] ?></td>
               <td><?php echo $row['tanggal'] ?></td>
               <td><?php echo $row['id_karyawan'] ?></td>
               <td><?php echo $row['id_pelanggan'] ?></td>
               <td><?php echo $row['berat'] ?></td>
               <td><?php echo $row['id_jenis'] ?></td>
               <td><?php echo $row['tarif'] ?></td>
               <td><?php echo $row['total'] ?></td>
               <td><?php echo $row['note'] ?></td> 
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
   </body>
</html>