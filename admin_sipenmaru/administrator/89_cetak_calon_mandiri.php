
<?php
  include "session.php";
?>

<?php
  include"../config/koneksi.php";
  include("bar128.php");
  include("library.php");
  include("fucnt_tgl.php");
  
    
  $query=mysqli_query($kon,"select * from tb_formulir5 where username='$_GET[username]'");
   $a=mysqli_fetch_array($query);
  $tanggal = tgl_indo($a['tanggal_lahir']);
?>
<html>
  <body>

          <table width="75%" border="0"  align="center">
          <tr>
            <td width="101" height="102">
              <img src="../assets/img/logo-kemenkes.png" width="100" height="100"/>
            </td>
            <td width="601" align="center">
              <strong><h2>Seleksi Penerimaan Mahasiswa Baru (SIPENMARU)</br>PENDIDIKAN TENAGA KESEHATAN <br>Poltekkes Kemenkes Bengkulu T.A 2023/2024</h2></strong>
            </td>
            <td width="109" align="center"><img src="../assets/img/logorevisi.png" width="100" height="100"/></td>
          </tr>
          <tr><td colspan="3"><hr></hr>
          </td>
          </tr>
        </table>

        <table align="center">
          <tr>
              *Catatan : Klik untuk melihat gambar/PDF
              <td rowspan=14 width=164 valign="top">
                <a href="../../login_mandiri_1pilihan/assets/img/<?php echo $a['nama_foto'];?>" class="fancy">
              <img src="../../login_mandiri_1pilihan/assets/img/<?php echo $a['nama_foto'];?>" alt="" width=150 height=175 border="0" /> </a></td>

              <td rowspan=14 width=164 valign="top">
              <a href="../../login_mandiri_1pilihan/assets/berkas/<?php echo $a['photo1'];?>" class="fancy">
              <img src="../../login_mandiri_1pilihan/assets/berkas/<?php echo $a['photo1'];?>" alt="" width=150 height=175 border="0" /></a></td>

              <td rowspan=14 width=164 valign="top">
                <a href="../../login_mandiri_1pilihan/assets/berkas/<?php echo $a['photo2'];?>" class="fancy">
              <img src="../../login_mandiri_1pilihan/assets/berkas/<?php echo $a['photo2'];?>" alt="" width=150 height=175 border="0" /></a></td>

              <td rowspan=14 width=164 valign="top">
                <a href="../../login_mandiri_1pilihan/assets/berkas/<?php echo $a['photo3'];?>" class="fancy">
              <img src="../../login_mandiri_1pilihan/assets/berkas/<?php echo $a['photo3'];?>" alt="" width=150 height=175 border="0" /></a></td>
          </tr>
        </table>
</body>
</html>
